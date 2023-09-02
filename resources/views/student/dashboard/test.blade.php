@extends('student.master')

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
                            <li><a href="" class="nav-link active" data-bs-target="#student" data-bs-toggle="pill">Student Registration</a></li>
                            <li><a href="" class="nav-link" data-bs-target="#lecturer" data-bs-toggle="pill">Lecturer Registration</a></li>
                        </ul>
                        <div class="col-lg-6">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="student">
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="row ">
                                            <div class="col-md-12 mt-3">
                                                <div class="single-form form-default">
                                                    <label>Full Name</label>
                                                    <div class="col-md-12 form-input form">

                                                        <input type="text" class="form-control" name="name" required  placeholder="Enter Ful Name"/>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 ">
                                                <div class="single-form button mt-3">
                                                    <button class="btn btn-success" type="submit" >Register</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade show" id="lecturer">
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="row ">
                                            <div class="col-md-12 mt-3">
                                                <div class="single-form form-default">
                                                    <label>Full Name</label>
                                                    <div class="col-md-12 form-input form">

                                                        <input type="text" class="form-control" name="name" required  placeholder="Enter Ful Name"/>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 ">
                                                <div class="single-form button mt-3">
                                                    <button class="btn btn-success" type="submit" >Register</button>
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

        </div> <!-- container-fluid -->
    </div>

@endsection

