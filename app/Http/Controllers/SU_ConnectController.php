<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SU_ConnectController extends Controller
{
    public function index()
    {
        return view('su-connect.home.home');
    }
}
