@extends('lecturer.master')

@section('title')
    Lecturer Announcement
@endsection
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="" class="btn-success btn">Edit</a>
                                <a href="" class="btn-danger btn">Delete</a>
                                @if($post->status == 1)
                                    <a href="" class="btn-outline-primary btn">Public</a>
                                @else
                                    <a href="" class="btn-outline-warning btn">Only Me</a>
                                @endif
                                <h3 class="text-center text-black-50">{{ $post->title }}</h3>
                                <p class="text-black">{{ $post->description }}</p>
                                <iframe src="{{ asset($post->file) }}" frameborder="0" class="form-control" height="400px"></iframe>
                                <a href="" class="btn-outline-light btn mt-2 mx-2">Comment</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

