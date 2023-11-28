<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    private static $data, $file, $fileNewName, $fileUrl, $directory;
    use HasFactory;
    public static function saveFile($request)
    {
        self::$data = new FileUpload();
        self::$data->lecturer_id = $request->lecturer_id;
        self::$data->title = $request->title;
        self::$data->description = $request->description;
        self::$fileUrl = self::getFileUrl($request);
        self::$data->file = self::$fileUrl;
        self::$data->save();
        return self::$data;
    }
    public static function getFileUrl($request)
    {
        self::$file = $request->file;
        self::$fileNewName = 'File'.'-'.time().'.'.self::$file->getClientOriginalName();
        self::$directory = 'upload/lecturer/files/';
        self::$file->move(self::$directory, self::$fileNewName);
        self::$fileUrl = self::$directory.self::$fileNewName;
        return self::$fileUrl;
    }
}
