<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index() {
        return view('backend.countries.index');
    }

    public function getCreate() {
        return view('backend.countries.update');
    }

    public function getEdit($id) {
        $currentCountry = Country::findOrFail($id);
        return view('backend.countries.update', compact('currentCountry'));
    }

    public function postUpdate(Request $request) {
        Country::updateOrCreate(
            ['id' => $request->idCountry],
            ['name' => $request->name, 'introduce' => $request->introduce]
        );
        return redirect()->route('country')->with('success', 'You have successfully update the country .');
    }

    public function getDelete($id){
        Country::destroy($id);
        return redirect()->route('country')->with('success', 'You have successfully deleted the country.');
    }
}
