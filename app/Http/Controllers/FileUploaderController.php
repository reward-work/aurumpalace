<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class FileUploaderController extends Controller
{
    const UPLOAD_MAX_SIZE = 2097152;
    public static function upload($file)
    {
        $size = $file->getSize();
        if($size > self::UPLOAD_MAX_SIZE) {
            return '';
        }

        $name = uniqid() . '_' . $file->getClientOriginalName();

        $upload = Storage::disk('public')->put('images/'.$name, file_get_contents($file));

        return 'images/'.$name;
    }
}
