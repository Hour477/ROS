<?php

namespace App\Helper;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SystemHelper
{
    /**
     * Get a setting value by key.
     * Use caching to avoid redundant database queries.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function getSetting(string $key, $default = null)
    {
        return Cache::rememberForever("setting_{$key}", function () use ($key, $default) {
            $setting = Setting::where('key', $key)->first();
            return $setting ? $setting->value : $default;
        });
    }

    /**
     * Clear the cache for a specific setting.
     *
     * @param string $key
     * @return void
     */
    public static function forgetSetting(string $key)
    {
        Cache::forget("setting_{$key}");
    }

    /**
     * Get the business logo URL with fallback.
     *
     * @return string
     */
    public static function getLogo()
    {
        $logo = self::getSetting('business_logo');
        if ($logo) {
            return asset('storage/' . $logo);
        }
        return asset('images/logo.png');
    }

    /**
     * Get the business favicon URL with fallback.
     *
     * @return string
     */
    public static function getFavicon()
    {
        $favicon = self::getSetting('business_favicon');
        if ($favicon) {
            return asset('storage/' . $favicon);
        }
        return asset('favicon.ico');
    }
}
