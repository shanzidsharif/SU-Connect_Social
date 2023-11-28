@extends('admin.master')

@section('title')
    Admin Profile
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Lecturer Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin Profile</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            {{--                Start Row       --}}
            <div class="row">
                <div class="col-md-8 offset-2">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-control" for="">Profile Image</label>
                                </div>
                                <div class=" col-md-9">
                                    <img src="{{ asset($user->profile_photo_url) }}" alt="{{ $user->name }}" width="100px" height="100px"/>
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
                                    <input type="text" class="form-control" name="name" readonly value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-control" for="">Email</label>
                                </div>
                                <div class=" col-md-9">
                                    <input type="email" class="form-control" name="email" readonly value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-control" for="">Mobile</label>
                                </div>
                                <div class=" col-md-9">
                                    <input type="number" class="form-control" name="mobile" readonly value="{{ $user->mobile }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-control" for="">Lecturer ID</label>
                                </div>
                                <div class=" col-md-9">
                                    <input type="text" class="form-control" name="suid" readonly value="{{ $user->suid }}">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-12 text-center">
                                    <input type="submit" class="btn btn-success"  value="Edit Profile"/>
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
