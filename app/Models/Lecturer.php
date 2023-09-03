<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    private static $lecturer, $directory, $imgUrl, $imgNewName, $image;
    use HasFactory;
    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imgNewName = self::$image->getClientOriginalName();
        self::$directory = 'upload/student/profile-image/';
        self::$image->move(self::$directory, self::$imgNewName);
        self::$imgUrl = self::$directory.self::$imgNewName;
        return self::$imgUrl;
    }
    public static function addLecturer($request)
    {
        self::$lecturer = new Lecturer();
        self::$lecturer->name = $request->name;
        self::$lecturer->email = $request->email;
        self::$lecturer->mobile = $request->mobile;
        self::$lecturer->suid = $request->suid;
        self::$lecturer->password = bcrypt($request->password);
        self::$lecturer->department =$request->department;
        if($request->status)
        {
            self::$lecturer->status = $request->status;
        }
        self::$lecturer->save();
        return self::$lecturer;
    }
    public static function profileUpdate($request, $id)
    {
        self::$lecturer = Lecturer::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$lecturer->image))
            {
                unlink(self::$lecturer->image);
            }
            self::$imgUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imgUrl = self::$lecturer->image;
        }
        self::$lecturer->image = self::$imgUrl;
        self::$lecturer->name = $request->name;
        self::$lecturer->email = $request->email;
        self::$lecturer->mobile = $request->mobile;
        self::$lecturer->suid = $request->suid;
        self::$lecturer->department =$request->department;
        self::$lecturer->address =$request->address;
        self::$lecturer->blood_group =$request->blood_group;
        self::$lecturer->save();
        return self::$lecturer;
    }
}
