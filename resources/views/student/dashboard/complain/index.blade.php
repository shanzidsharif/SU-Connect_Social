@extends('student.master')

@section('title')
    Student Complain Form
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->

            <!-- end page title -->
            {{--                Start Row       --}}
            <div class="row">
                <h4 class="text-center text-primary"> {{ session('message')}}</h4>
                <div class="col-md-8 offset-2">
                    <form action="{{ route('student.add.complain') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card card-body">
                            <input type="hidden" class="form-control" name="student_id" value="{{ Session::get('student_id') }}">

                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Title</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title" placeholder="Input Title">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <label for="">Description</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea type="text" class="form-control" name="description" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <label for="">Image</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image" accept="image/*" />
                                </div>
                            </div>
                            <div class="row mt-3 ">
                                <div class="col-md-12 text-center">
                                    <input type="submit" class="btn btn-success" value="Submit"/>
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
