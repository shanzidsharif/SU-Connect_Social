@extends('student.master')

@section('title')
    Student Dashboard
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Student Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Student Profile</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
{{--                Start Row       --}}
            <div class="row">
                <div class="col-md-8 offset-2">
                    <form action="{{ route('student.profile.update',['id'=> $profile->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-control" for="">Profile Image</label>
                                </div>
                                <div class=" col-md-9">
                                    <img src="{{ asset($profile->image) }}" alt="{{ $profile->name }}" width="100px" height="100px"/>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="file" name="image"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label class="form-control" for="">Name</label>
                                </div>
                                <div class=" col-md-9">
                                    <input type="text" class="form-control" name="name" readonly value="{{ $profile->name }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-control" for="">Email</label>
                                </div>
                                <div class=" col-md-9">
                                    <input type="email" class="form-control" name="email" readonly value="{{ $profile->email }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-control" for="">Mobile</label>
                                </div>
                                <div class=" col-md-9">
                                    <input type="number" class="form-control" name="mobile" readonly value="{{ $profile->mobile }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-control" for="">SU ID</label>
                                </div>
                                <div class=" col-md-9">
                                    <input type="text" class="form-control" name="suid" readonly value="{{ $profile->suid }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-control" for="">Department</label>
                                </div>
                                <div class=" col-md-9">
                                    <input type="text" class="form-control" name="department" readonly value="{{ $profile->department  }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-control" for="">Semester</label>
                                </div>
                                <div class=" col-md-9">
                                    <input type="text" class="form-control" name="semester" value="{{ $profile->semester  }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-control" for="">Address</label>
                                </div>
                                <div class=" col-md-9">
                                    <textarea class="form-control" name="address" >{{ $profile->address  }}</textarea>
                                </div>
                            </div>

                            <div class="row my-2">
                                <div class="col-md-3">
                                    <label class="form-control" for="">Blood Group</label>
                                </div>
                                <div class=" col-md-9">
                                    <input type="text" class="form-control" name="blood_group" value="{{ $profile->blood_group  }}"/>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12 text-center">
                                    <input type="submit" class="btn btn-success"  value="Update Profile"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>

@endsection
