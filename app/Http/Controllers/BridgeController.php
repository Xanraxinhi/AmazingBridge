<?php

namespace App\Http\Controllers;

use App\Bridge;
use App\Parameter;
use App\Photo;
use Illuminate\Http\Request;

class BridgeController extends Controller
{
    public function index() {
        /* return về danh sách các cây cầu */
        return view ('backend.bridges.index');
    }
    public function getCreate() {
        /* return về giao diện update ( thêm hoặc cập nhật) cây cầu */
        return view('backend.bridges.update');
    }

    public function getEdit($id) {
        /* return về giao diện update ( thêm hoặc cập nhật) cây cầu với id của cây cầu */
        /* tìm cây cầu với $id được gửi lên thông qua router */
        $currentBridge = Bridge::findOrFail($id);
        return view('backend.bridges.update', compact('currentBridge'));
    }

    public function postUpdate(Request $request) {
        /* kiểm tra cây cầu có được public không */
        if(isset($request->public) == true && $request->public == 1){
            /* public */
            $checkPublic = 1;
        }else{
            /* no public  */
            $checkPublic = 0;
        }
        /* Cập nhật cây cầu đã có hoặc tạo mới */
        Bridge::updateOrCreate(
        /* kiểm tra nếu tồn tại id của cây cầu, nếu có thì cập nhật, ko có thì thêm mới*/
            [
                'id' => $request->idBridge],
            [
                /* các trường dữ liệu của cây cầu được thêm hoặc cập nhật */
                'name' => $request->name,
                'introduce' => $request->introduce,
                'map' => $request->map,
                'public' => $checkPublic,
                'country_id' => $request->country_id
            ]
        );
        /* return về danh sách các cây cầu thông qua route name */
        return redirect()->route('bridge');
    }

    public function getDelete($id){
        Bridge::destroy($id);
        return redirect()->route('bridge');
    }
    public function getPhoto($id) {
        $currentBridge = Bridge::findOrFail($id);
        return view('backend.bridges.photo.update', compact('currentBridge'));
    }

    public function postUpdatePhoto(Request $request)
    {
        /* bắt lỗi sai định dạng ở backend */
        $request->validate([
            'name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        /* tạo tên mới cho photo bằng cách lấy thời gian hiện tại nhằm bị trùng tên */
        $imageName = time().'.'.$request->name->extension();
        /* Lưu tên vừa tạo vào csdl */
        Photo::updateOrCreate(
        /* kiểm tra nếu tồn tại id của photo, nếu có thì cập nhật, ko có thì thêm mới */
            ['id' => $request->idPhoto],
            /* các trường dữ liệu của photo được thêm vào */
            [
                'name' => $imageName,
                'bridge_id' => $request->bridge_id
            ]
        );
        /*  lưu photo vừa upload vào thư mục public/store-public/tên_tấm_hình_tạo_ở_trên    */
        $request->name->move(public_path('store-public'), $imageName);

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);

    }

    public function getParameter($id){
        $currentBridge = Bridge::findOrFail($id);
        return view('backend.bridges.parameter.update', compact('currentBridge'));
    }

    public function postUpdateParameter(Request $request)
    {
        /* bắt lỗi sai định dạng ở backend */
        $request->validate([
            'length' => 'nullable | numeric | min:0',
            'width' => 'nullable | numeric | min:0',
            'height' => 'nullable | numeric | min:0',
            'pier' => 'nullable | numeric | min:0',
            'type' => 'nullable',
            'builded' => 'nullable | numeric',
            'beautiful' => 'nullable | integer | min:0 | max:10',
            'strange' => 'nullable | integer|min:0|max:10',
            'famous' => 'nullable | integer|min:0|max:10',
        ]);
        $CheckExistBridge = Bridge::findOrFail($request->bridge_id);
        if($CheckExistBridge){
            Parameter::updateOrCreate(
                [
                'id' => $request->idParameter
                ],
                $request->except('idParameter')
            );
        }
        return back()->with('success', 'You have successfully parameter update.');

    }


}
