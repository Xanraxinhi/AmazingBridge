<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function index() {
        return view('fontend.index');
    }

    public function show() {
        return view('fontend.show');
    }
    public function detail() {
        return view('fontend.detail');
    }

}
