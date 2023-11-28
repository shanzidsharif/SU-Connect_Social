@extends('student.master')

@section('title')
    Manage Complain
@endsection

@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-md-12 px-4">
                    <h4 class="text-center mt-7">Complain List</h4>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <Label>Complain Title</Label>
                            <div class="col-md-12">
                                <input type="text" name="title" placeholder="Search By Title ">
                                <span>
                                <input type="submit" class="btn btn-success" value="Search">
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <section>
                    <div class="col-md-12 mt-3">
                        <div class="card card-body table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($complains as $complain)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $complain->title }}</td>
                                        <td>{{ $complain->description }}</td>
                                        <td>
                                            <img src="{{ asset($complain->image) }}" alt="">
                                        </td>
                                        <td>
                                            @if($complain->status == 1)
                                                <a href="" class="btn btn-primary btn-sm" >Unpublished</a>
                                            @else
                                                <a href="" class="btn btn-warning btn-sm" onclick="return confirm('Do You Really Want to change!')">published</a>
                                            @endif
                                        </td>
                                        <td class="btn-group-sm">
                                            <a href=""  class="btn btn-info btn-sm">Detail</a>
                                            <a href="" class="btn btn-success my-1">Edit</a>
                                            <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Do You Really Want to Delete!')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>

@endsection
