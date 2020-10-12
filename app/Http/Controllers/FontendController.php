<?php

namespace App\Http\Controllers;

use App\Bridge;
use App\Contact;
use App\Country;
use App\Parameter;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function postContact(Request $request){
        $request->validate([
            'name' => 'required|max:80',
            'email' => 'required|email',
            'number' => 'required|regex:/(0)[0-9]{9}/',
            'message' => 'required|min:10|max:255'
        ]);
        Contact::create($request->all());
        return back()->with('success', 'You have successfully send a message');
    }
    public function index() {
        return view('fontend.index');
    }

    public function showCountryBridge() {
        return view('fontend.show_country_bridge');
    }

    public function showClassifyBridge() {
        return view('fontend.show_classify_bridge');
    }

    public function detail(Request $request) {
        $data = [];
        if(isset($request->idCountry) && !blank($request->idCountry)){
            $idCountry = $request->idCountry;
            $data['findCountry'] = Country::findOrFail($idCountry);
            $data['nameCountry'] =  $data['findCountry']->name;
            $data['listBridge'] = Bridge::where('country_id', $idCountry)->get();
        }

        if(isset($request->classify) && !blank($request->classify)){
            switch ($request->classify){
                case 'Famous':
                    /* Nổi tiếng nhất */
                    $queryListFamous = Parameter::where('famous', '>', 0)->select('bridge_id');
                    $data['mostFamous'] = Bridge::whereIn('id', $queryListFamous)->get();
                    $data['nameCountry'] = 'Famous';
                    $data['listBridge'] = $data['mostFamous'];
                    break;
                case 'Beautiful':
                    /* Đẹp nhất */
                    $queryListBeautiful = Parameter::where('beautiful', '>', 0)->select('bridge_id');
                    $data['mostBeautiful'] = Bridge::whereIn('id', $queryListBeautiful)->get();
                    $data['nameCountry'] = 'Beautiful';
                    $data['listBridge'] = $data['mostBeautiful'];
                    break;
                case 'Strange':
                    /* Độc nhất */
                    $queryListStrange = Parameter::where('strange', '>', 0)->select('bridge_id');
                    $data['mostStrange'] = Bridge::whereIn('id', $queryListStrange)->get();
                    $data['nameCountry'] = 'Strange';
                    $data['listBridge'] = $data['mostStrange'];
                    break;
                case 'Oldest':
                    /* Cổ nhất */
                    $queryOldest = Parameter::whereRaw('builded = (select min(`builded`) from parameters)')->select('bridge_id');
                    $data['oldest'] = Bridge::whereIn('id', $queryOldest)->get();
                    $data['nameCountry'] = 'Oldest';
                    $data['listBridge'] = $data['oldest'];
                 break;
                case 'Highest':
                    /* Cao nhất */
                    $queryHighest = Parameter::whereRaw('height = (select max(`height`) from parameters)')->select('bridge_id');
                    $data['highest'] = Bridge::whereIn('id', $queryHighest)->get();
                    $data['nameCountry'] = 'Highest';
                    $data['listBridge'] = $data['highest'];
                    break;
                case 'Longest':
                    /* Dài nhất */
                    $queryLongest = Parameter::whereRaw('length = (select max(`length`) from parameters)')->select('bridge_id');
                    $data['longest'] = Bridge::whereIn('id', $queryLongest)->get();
                    $data['nameCountry'] = 'Longest';
                    $data['listBridge'] = $data['longest'];
                    break;
            }
        }
        return view('fontend.detail', $data);
    }
}
