<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Session;
use function Symfony\Component\Mime\Header\all;

class StudentController extends Controller
{
    private $student;

     public function register(Request $request)
     {
         $this->student = Student::addStudent($request);
         Session::put('student_id', $this->student->id);
         Session::put('student_suid',$this->student->suid);
         return back()->with('message', 'Wait Until Accept Your Account');
     }


     public function login(Request $request)
     {
         $this->student = Student::where('suid', $request->suid)->first();

         if($this->student)
         {
             if(password_verify($request->password, $this->student->password))
             {
                 if($this->student->status == 1)
                 {
                     Session::put('student_id', $this->student->id);
                     Session::put('student_suid',$this->student->suid);
                     return redirect('/student-dashboard');

                 }
                else
                {
                    return redirect('/')->with('message', 'Your Registration Process is not Complete Yet!!');
                }
             }
             else
             {
                 return redirect('/')->with('message', 'Wrong Password!!');
             }
         }
         else
         {
             return redirect('/')->with('message', 'Wrong SU ID');
         }
     }

     public function dashboard()
     {
         return view('student.dashboard.dashboard');
     }

     public function profile()
     {
         $this->student = Session::get('student_id');
//          return Student::where('id', $this->student)->first();
         return view('student.dashboard.profile.see-profile',[
            'profile' => Student::where('id', $this->student)->first(),
         ]);
     }
     public function profileUpdate(Request $request, $id)
     {
//         return $request->all();
         $this->student =Student::profileUpdate($request, $id);
         return back()->with('message', 'Successfully Updated Profile');
     }
}
