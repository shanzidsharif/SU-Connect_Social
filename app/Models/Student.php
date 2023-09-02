<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    private static $student, $directory, $imgUrl, $imgNewName, $image;
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
    public static function addStudent($request)
    {
        self::$student = new Student();
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->mobile = $request->mobile;
        self::$student->suid = $request->suid;
        self::$student->password = bcrypt($request->password);
        self::$student->department =$request->department;
        self::$student->semester =$request->semester;
        self::$student->save();
        return self::$student;
    }
    public static function profileUpdate($request, $id)
    {
        self::$student = Student::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$student->image))
            {
                unlink(self::$student->image);
            }
            self::$imgUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imgUrl = self::$student->image;
        }
        self::$student->image = self::$imgUrl;
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->mobile = $request->mobile;
        self::$student->suid = $request->suid;
        self::$student->department =$request->department;
        self::$student->semester =$request->semester;
        self::$student->address =$request->address;
        self::$student->blood_group =$request->blood_group;
        self::$student->save();
        return self::$student;
    }
}
