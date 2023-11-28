@extends('admin.master')

@section('title')
   Manage Lecturer
@endsection

@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-md-12 px-4">
                    <h4 class="text-center mt-7">Lecturer List</h4>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Category</label>
                            <div class="col-md-12">
                                <select name="category_id" id="">
                                    <option value="" disabled selected>--- Select Category ---</option>
                                    <option value="1"> CSE</option>
                                    <option value="2"> EEE</option>
                                    <option value="3"> BBA</option>
                                    <option value="4"> ME</option>
                                    <option value="5"> Civil</option>
                                </select>
                                <span>
                                <input type="submit" class="btn btn-success" value="Search"/>
                            </span>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <Label>Lecturer Id</Label>
                            <div class="col-md-12">
                                <input type="text" name="suid" placeholder="Search By ID">
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
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Lecturer Id</th>
                                    <th>Image</th>
                                    <th>Mobile No</th>
                                    <th>Email Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($lecturers as $lecturer)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $lecturer->name }}</td>
                                    <td>{{ $lecturer->department }}</td>
                                    <td>{{ $lecturer->suid }}</td>
                                    <td>{{ $lecturer->image }}</td>
                                    <td>{{ $lecturer->mobile }}</td>
                                    <td>{{ $lecturer->email }}</td>
                                    <td>
                                        @if($lecturer->status == 0)
                                            <a href="{{ route('lecturer.status',['id' => $lecturer->id]) }}" class="btn btn-primary btn-sm" >Accept</a>
                                        @else
                                            <a href="{{ route('lecturer.status',['id' => $lecturer->id]) }}" class="btn btn-warning btn-sm" onclick="return confirm('Do You Really Want to change!')">Accepted</a>
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
