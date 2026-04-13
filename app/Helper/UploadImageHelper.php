<?php

namespace App\Helper;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class UploadImageHelper
{
    public static function upload(string $dir, string $format, $image = null)
    {
        if ($image != null) {
            $imageName = Carbon::now()->toDateString() . "-" . uniqid() . "." . $format;
            if ($dir && !Storage::disk('public')->exists($dir)) {
                Storage::disk('public')->makeDirectory($dir);
            }
            Storage::disk('public')->put($dir . '/' . $imageName, file_get_contents($image));
        } else {
            $imageName = 'def.png';
        }

        return $imageName;
    }

    public static function update(string $dir, $old_image, string $format, $image = null)
    {
        if ($old_image && Storage::disk('public')->exists($dir . '/' . $old_image)) {
            Storage::disk('public')->delete($dir . '/' . $old_image);
        }
        $imageName = self::upload($dir, $format, $image);
        return $imageName;
    }

    public static function delete($full_path)
    {
        if ($full_path && Storage::disk('public')->exists($full_path)) {
            Storage::disk('public')->delete($full_path);
        }

        return [
            'success' => 1,
            'message' => 'Removed successfully !'
        ];
    }
    public static function copy($copyPath, $toPath)
    {
        if ($copyPath && Storage::disk('public')->exists($copyPath)) {
            Storage::disk('public')->copy($copyPath, $toPath);
        }
        return [
            'success' => 1,
            'message' => 'Copy successfully !'
        ];
    }
    public static function getFullPath($image = null)
    {
        if ($image && Storage::disk('public')->exists($image)) {
            return Storage::url($image);
        }
        return asset('assets/img/placeholder.jpg');
    }

    public static function store(
        $file = null,
        string $folder = 'images',
        string $disk   = 'public',
        ?string $old    = null,
        bool $is_remove = false,
    ): ?string {
        if ($is_remove && $old) {
            static::delete($old);
            return null;
        }
        if ($file instanceof \Illuminate\Http\UploadedFile) {
            static::delete($old);
            $filename = Carbon::now()->toDateString() . "-" . uniqid() . "." . $file->getClientOriginalExtension();
            return $file->storeAs($folder, $filename, $disk);
        }

        return $old ?: null;
    }

    public static function storeMany(
        array      $files,
        array      $fields,
        string     $folder = 'images',
        string     $disk   = 'public',
        array      $old    = [],
        array|bool $is_removes = [],
    ): ?array {
        $paths = [];
        foreach ($fields as $field) {
            $paths[$field] = static::store(
                file:  $files[$field] ?? null,
                folder: $folder,
                disk:   $disk,
                old:    $old[$field] ?? '',
                is_remove: is_array($is_removes)
                    ? in_array($field, $is_removes)
                    : $is_removes,
            );
        }
        return $paths;
    }
}
