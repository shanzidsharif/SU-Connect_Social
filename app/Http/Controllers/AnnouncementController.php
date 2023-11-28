<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\LecturerController;
use Session;

class AnnouncementController extends Controller
{
    public $announcement;
    public function index()
    {
        Session::get('lecturer_id');
        Session::get('lecturer_suid');

        return view('lecturer.dashboard.announcement.index');
    }
    public function addAnnouncement(Request $request)
    {
         $this->announcement = Announcement::newAnnouncement($request);
         return back()->with('message', 'Announce Created Successfully');
    }
    public function manageAnnouncement()
    {
        $this->announcement = Announcement::where('lecturer_id', Session::get('lecturer_id'))->get();
        return view('lecturer.dashboard.announcement.manage',[
                'posts' => $this->announcement,
        ]);
    }
}
