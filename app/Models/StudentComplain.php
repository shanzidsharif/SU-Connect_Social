<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentComplain extends Model
{
    private static $complain, $directory, $imgUrl, $imgNewName, $image;
    use HasFactory;
    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imgNewName = 'comp-'.time().'-'.self::$image->getClientOriginalName();
        self::$directory = 'upload/complain/images/';
        self::$image->move(self::$directory, self::$imgNewName);
        self::$imgUrl = self::$directory.self::$imgNewName;
        return self::$imgUrl;
    }
    public static function addComplain($request)
    {
        self::$complain = new StudentComplain();

        if($request->lecturer_id){
            self::$complain->lecturer_id = $request->lecture_id;
        }
        if($request->student_id){
            self::$complain->student_id = $request->student_id;
        }
        if($request->admin_id){
            self::$complain->admin_id = $request->admin_id;
        }
        self::$complain->title = $request->title;
        self::$complain->description = $request->description;
        if($request->image) {
            self::$imgUrl = self::getImageUrl($request);
            self::$complain->image = self::$imgUrl;
        }
        self::$complain->save();
        return self::$complain;
    }
}
