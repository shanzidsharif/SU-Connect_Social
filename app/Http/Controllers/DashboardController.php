<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private $lecturers, $students, $arrangeStudents, $arrangeLecturers, $status, $admin_id, $admin;
    public function index()
    {
        return view('admin.dashboard.dashboard');
    }

    public function profileEdit()
    {
        return view('admin.profile.edit-profile');
    }

    public function addLecturer()
    {
        $this->status = 1;
        return view('admin.dashboard.lecturer.add',[
            'status' => $this->status,
        ]);
    }

    public function manageLecturer()
    {
        $this->lecturers = Lecturer::all();
        //return $this->lecturers;
        return view('admin.dashboard.lecturer.manage-lecturer',[
            'lecturers' => $this->lecturers,
        ]);
    }

    public function manageStudent()
    {
        $this->students = Student::all();
        //return $this->students;

        return view('admin.dashboard.manage-student',[
            'students' => $this->students,
        ]);
    }
    public function categoryStudent(Request $request)
    {
        return $this->students;
    }

    public function status($id)
    {
        $this->status = Lecturer::status($id);
        return redirect('/dashboard/manage-lecturer');
    }
    public function showProfile()
    {
        $this->admin_id = Auth::user()->id;
        $this->admin = User::find($this->admin_id);
//        return $this->admin;
        return view('admin.profile.profile',[
            'user' => $this->admin,
        ]);
    }

}
