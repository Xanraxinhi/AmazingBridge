<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function redirectIndex()
    {
        return redirect()->route('home');
    }

    public function index()
    {
        return view('backend.home');
    }

    public function contact()
    {
        $contacts = Contact::all();
        return view('backend.contacts.index', compact('contacts'));
    }
    public function contactDelete($id)
    {
        Contact::destroy($id);
        return back()->with('success', 'You have delete the contact successfully !');
    }
}
