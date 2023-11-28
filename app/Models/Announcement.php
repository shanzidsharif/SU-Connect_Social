<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    private static $announcement, $file, $fileNewName, $directory, $fileUrl;
    use HasFactory;


    private static function getFileUrl($request)
    {
        self::$file = $request->file;
        self::$fileNewName = 'Announcement'.time().'.'.self::$file->getClientOriginalName();
        self::$directory = 'upload/lecturer/announcement/';
        self::$file->move(self::$directory, self::$fileNewName);
        self::$fileUrl = self::$directory.self::$fileNewName;
        return self::$fileUrl;

    }

    public static function newAnnouncement($request)
    {
        self::$announcement = new Announcement();
        self::$announcement->lecturer_id = $request->lecturer_id;
        self::$announcement->title = $request->title;
        self::$announcement->description = $request->description;
        self::$fileUrl = self::getFileUrl($request);
        self::$announcement->file = self::$fileUrl;
        self::$announcement->save();
        return self::$announcement;
    }
}
