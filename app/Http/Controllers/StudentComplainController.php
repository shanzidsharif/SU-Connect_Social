<?php

namespace App\Http\Controllers;

use App\Models\StudentComplain;
use Illuminate\Http\Request;
use Session;
class StudentComplainController extends Controller
{ public $complain;
    public function complainForm()
    {
        Session::get('student_id');
        return view('student.dashboard.complain.index');
    }

    public function addComplain(Request $request)
    {
        $this->complain = StudentComplain::addComplain($request);
//        return $this->complain;
        return back()->with('message', 'Complain Added Successfully');
    }

    public function manageComplain()
    {
        $this->complain = StudentComplain::where('student_id', Session::get('student_id'))->get();
        return view('student.dashboard.complain.manage',[
            'complains' => $this->complain,
        ]);
    }
}
