@extends('admin.master')

@section('title')
    Add Lecturer
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <section>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h4 class="text-center text-danger">{{ session('message') }}</h4>
                        <div class="col-lg-12">
                            <div class="card">
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

                                            <div class="">
                                                <div class="single-form form-default">
                                                    <div class="col-md-12 form-input form">
                                                        <input type="number" hidden class="form-control" name="status" value="{{ $status }}" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12 ">
                                                <div class="single-form button mt-3">
                                                    <button class="btn btn-success" type="submit" >Add Lecturer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection

