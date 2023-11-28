<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use Session;

class LecturerController extends Controller
{
    private $lecturer;

    public function register(Request $request)
    {

        if($request->status){
            $this->lecturer = Lecturer::addLecturer($request);
            return back()->with('message', 'Successfully Added');
        }
        else{
            $this->lecturer = Lecturer::addLecturer($request);
            return back()->with('message', 'Wait Until Accept Your Account');
        }

        Session::put('lecturer_id',  $this->lecturer->id);
        Session::put('lecturer_suid', $this->lecturer->suid);
    }


    public function login(Request $request)
    {
        $this->lecturer = Lecturer::where('suid', $request->suid)->first();

        if( $this->lecturer)
        {
            if(password_verify($request->password,  $this->lecturer->password))
            {
                if( $this->lecturer->status == 1)
                {
                    Session::put('lecturer_id',  $this->lecturer->id);
                    Session::put('lecturer_suid', $this->lecturer->suid);
                    return redirect('/lecturer-dashboard');
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
        Session::get('lecturer_id');
        Session::get('lecturer_suid');
        return view('lecturer.dashboard.dashboard');
    }

    public function profile()
    {
        $this->lecturer = Session::get('lecturer_id');
//         return Lecturer::where('id', $this->lecturer)->first();
        return view('lecturer.dashboard.profile.see-profile',[
            'profile' => Lecturer::where('id', $this->lecturer)->first(),
        ]);
    }
    public function profileUpdate(Request $request, $id)
    {
//         return $request->all();
        $this->lecturer =Lecturer::profileUpdate($request, $id);
        return back()->with('message', 'Successfully Updated Profile');
    }
}
