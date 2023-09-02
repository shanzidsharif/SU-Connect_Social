@extends('admin.master')

@section('title')
   Manage Student
@endsection

@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-md-12 px-4">
                    <h4 class="text-center mt-7">Student List</h4>
                </div>
                <section>
                    <form action=" {{ route('manage.student.category') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <label for="">Category</label>
                            </div>
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
                    </form>
                    <div class="col-md-12 mt-3">
                        <div class="card card-body">
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
                                @foreach($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->department }}</td>
                                    <td>{{ $student->suid }}</td>
                                    <td>{{ $student->image }}</td>
                                    <td>{{ $student->mobile }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>
                                        @if($student->status == 0)
                                            <a href="" class="btn btn-primary">Accept</a>
                                        @else
                                            <a href="" class="btn btn-warning">Postponed</a>
                                        @endif
                                    </td>
                                    <td class="btn-group">
                                        <a href="" class="btn btn-info mx-1">Detail</a>
                                        <a href="" class="btn btn-success">Edit</a>
                                        <a href="" class="btn btn-danger mx-1">Delete</a>
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
