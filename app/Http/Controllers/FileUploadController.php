<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use App\Http\Controllers\LecturerController;
use Session;
class FileUploadController extends Controller
{
    public $file, $data;
    public function index()
    {
        return view('lecturer.dashboard.upload.index',[
            'lecturer_id' => Session::get('lecturer_id'),
        ]);
    }
    public function uploadFile(Request $request)
    {
        $this->data = FileUpload::saveFile($request);
        return back()->with('message', 'Successfully Posted');
    }
    public function showPost()
    {
        $this->data = FileUpload::all();
        return view('lecturer.dashboard.upload.show-post',[
            'posts' => $this->data,
        ]);
    }

}
