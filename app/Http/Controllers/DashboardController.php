<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $lecturers, $students, $arrangeStudents, $arrangeLecturers, $status;
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

}
