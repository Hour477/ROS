<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Get current locale
        $locale = session()->get('locale') ?? config('app.locale');
        
        // 2. Set the application locale
        App::setLocale($locale);
        app('translator')->setLocale($locale);

        // 3. Sync Database to JSON Files only if needed (e.g., using a cache flag)
        // Optimization: Use a cache key to avoid syncing on every single request
        // 3. Sync Database → JSON files when translation count changes (or cache is empty)
        // We store the count inside the cache value so we can detect DB changes cheaply.
        $cacheKey = "lang_sync_{$locale}";
        $cachedCount = Cache::get($cacheKey, -1); // -1 means "never synced"
        $currentCount = \DB::table('translations')->count();

        if ($cachedCount !== $currentCount) {
            try {
                // Fetch all translations for this locale
                $translations = \DB::table('translations')->get();
                $data = [];

                foreach ($translations as $t) {
                    $val = ($locale === 'kh') ? ($t->kh ?: $t->en) : ($t->en ?: $t->kh);
                    if ($val) {
                        $data[$t->key] = $val;
                    }
                }

                if (!empty($data)) {
                    $langFile = lang_path($locale . '.json');

                    if (!file_exists(dirname($langFile))) {
                        mkdir(dirname($langFile), 0755, true);
                    }

                    // Write JSON with Khmer characters preserved
                    file_put_contents($langFile, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

                    // Reset translator so it re-reads the updated JSON file
                    app('translator')->setLoaded([]);

                    // Cache the current count for 60 minutes
                    Cache::put($cacheKey, $currentCount, now()->addMinutes(60));

                    \Log::debug("Language Sync: Rebuilt {$locale}.json ({$currentCount} keys)");
                }
            } catch (\Exception $e) {
                \Log::error("Translation Sync Failed: " . $e->getMessage());
            }
        }

        return $next($request);
    }
}
