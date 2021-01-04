<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchVideoController extends Controller
{
    public function index()
    {
        

        return view('users/videos');
    }
}
