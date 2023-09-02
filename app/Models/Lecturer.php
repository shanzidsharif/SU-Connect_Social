<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    private static $lecturer;
    use HasFactory;
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
}
