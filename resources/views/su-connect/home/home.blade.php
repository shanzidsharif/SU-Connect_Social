@extends('su-connect.master')

@section('title')
    Student Dashboard
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <section>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">
                            <li class="text-center"><a href="" class="nav-link active" data-bs-target="#student" data-bs-toggle="pill">Student Registration</a></li>
                            <li class="text-center"> <a href="" class="nav-link" data-bs-target="#lecturer" data-bs-toggle="pill">Lecturer Registration</a></li>
                        </ul>
                        <h4 class="text-center text-danger">{{ session('message') }}</h4>
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="student">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header"><h4 class="text-center">Registration Form</h4></div>

                                                <div class="card-body">
                                                    <form action="{{ route('student.registration') }}" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="single-form form-default">
                                                                    <label>Full Name</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <input type="text" class="form-control" name="name" required  placeholder="Enter Ful Name"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <div class="single-form form-default">
                                                                    <label>Email Address</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <input type="email" class="form-control" name="email" required  placeholder="Enter Email Address"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <div class="single-form form-default">
                                                                    <label>Mobile Number</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <input type="number" class="form-control" name="mobile" required  placeholder="Enter Mobile Number"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <div class="single-form form-default">
                                                                    <label>Su ID</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <input type="text" class="form-control" name="suid" required  placeholder="Enter Su ID"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <div class="single-form form-default">
                                                                    <label>Department</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <select class="form-control" required name="department" id="">
                                                                            <option  disabled selected> --Select Department---</option>
                                                                            <option value="1">CSE</option>
                                                                            <option value="2">EEE</option>
                                                                            <option value="3">BBA</option>
                                                                            <option value="4">ME</option>
                                                                            <option value="5">Civil</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <div class="single-form form-default">
                                                                    <label>Semester</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <select class="form-control" required name="semester" id="">
                                                                            <option  disabled selected> --Select Semester---</option>
                                                                            <option value="1">First</option>
                                                                            <option value="2">Second</option>
                                                                            <option value="3">Third</option>
                                                                            <option value="4">Four</option>
                                                                            <option value="5">Five</option>
                                                                            <option value="6">Six</option>
                                                                            <option value="7">Seven</option>
                                                                            <option value="8">Eight</option>
                                                                            <option value="9">Nine</option>
                                                                            <option value="10">Ten</option>
                                                                            <option value="11">Eleven</option>
                                                                            <option value="12">Twelve</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 mt-3">
                                                                <div class="single-form form-default">
                                                                    <label>Password</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <input type="password" class="form-control" name="password" required  placeholder="Enter Password"/>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 ">
                                                                <div class="single-form button mt-3 text-center">
                                                                    <button class="btn btn-primary form-control" type="submit" >Register</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header"><h4 class="text-center">Login Form</h4></div>
                                                <div class="card-body">
                                                    <form action="{{ route('student.login') }}" method="POST">
                                                        @csrf
                                                        <div class="row ">
{{--                                                            <div class="col-md-12 mt-3">--}}
{{--                                                                <div class="single-form form-default">--}}
{{--                                                                    <label>Email</label>--}}
{{--                                                                    <div class="col-md-12 form-input form">--}}
{{--                                                                        <input type="text" class="form-control" name="email" required  placeholder="Enter Email"/>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
                                                            <div class="col-md-12 mt-3">
                                                                <div class="single-form form-default">
                                                                    <label>Su ID</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <input type="text" class="form-control" name="suid" required  placeholder="Enter SU ID"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <div class="single-form form-default">
                                                                    <label>Password</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <input type="password" class="form-control" name="password" required  placeholder="Enter Password"/>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 ">
                                                                <div class="single-form button mt-3 text-center">
                                                                    <button class="btn btn-primary form-control" type="submit" >Login</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
{{--                                End Of Student DashBoard                        --}}

{{--                                Start Lecturer DashBoard                        --}}

                                <div class="tab-pane fade show" id="lecturer">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header"><h4 class="text-center">Registration Form</h4></div>

                                                <div class="card-body">
                                                    <form action="{{ route('lecturer.registration') }}" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="single-form form-default">
                                                                    <label>Full Name</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <input type="text" class="form-control" name="name" required  placeholder="Enter Ful Name"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <div class="single-form form-default">
                                                                    <label>Email Address</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <input type="email" class="form-control" name="email" required  placeholder="Enter Email Address"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <div class="single-form form-default">
                                                                    <label>Mobile Number</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <input type="number" class="form-control" name="mobile" required  placeholder="Enter Mobile Number"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <div class="single-form form-default">
                                                                    <label>Lecturer ID</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <input type="text" class="form-control" name="suid" required  placeholder="Enter Lecturer Id"/>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 mt-3">
                                                                <div class="single-form form-default">
                                                                    <label>Department</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <select class="form-control" required name="department" id="">
                                                                            <option  disabled selected> --Select Department---</option>
                                                                            <option value="1">CSE</option>
                                                                            <option value="2">EEE</option>
                                                                            <option value="3">BBA</option>
                                                                            <option value="4">ME</option>
                                                                            <option value="5">Civil</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 mt-3">
                                                                <div class="single-form form-default">
                                                                    <label>Password</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <input type="password" class="form-control" name="password" required  placeholder="Enter Password"/>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 ">
                                                                <div class="single-form button mt-3 text-center">
                                                                    <button class="btn btn-primary form-control" type="submit" >Register</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header"><h4>Login Form</h4></div>

                                                <div class="card-body">
                                                    <form action="{{ route('lecturer.login') }}" method="POST">
                                                        @csrf
                                                        <div class="row ">
                                                            <div class="col-md-12">
                                                                <div class="single-form form-default">
                                                                    <label>Email</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <input type="text" class="form-control" name="email" required  placeholder="Enter Email"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <div class="single-form form-default">
                                                                    <label>Lecturer ID</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <input type="text" class="form-control" name="suid" required  placeholder="Enter Lecturer ID"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <div class="single-form form-default">
                                                                    <label>Password</label>
                                                                    <div class="col-md-12 form-input form">
                                                                        <input type="password" class="form-control" name="password" required  placeholder="Enter Password"/>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 ">
                                                                <div class="single-form button mt-3 text-center">
                                                                    <button class="btn btn-primary form-control" type="submit" >Login</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection

