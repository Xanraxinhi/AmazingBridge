<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BridgeController extends Controller
{
    public function index() {
        return view ('backend.bridges.index');
    }
}
