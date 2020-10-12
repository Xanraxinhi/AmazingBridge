<?php

namespace App\Http\Controllers;

use App\Bridge;
use App\Parameter;
use App\Photo;
use Illuminate\Http\Request;

class BridgeController extends Controller
{
    /*
        return về danh sách các cây cầu
    */
    public function index() {
        return view ('backend.bridges.index');
    }

    /*
       Return view Create or Update the Bridge
    */
    public function getCreate() {
        /* return về giao diện update ( thêm hoặc cập nhật) cây cầu */
        return view('backend.bridges.update');
    }

    /*
       Return view Edit data the Bridge
    */
    public function getEdit($id) {
        /* return về giao diện update ( thêm hoặc cập nhật) cây cầu với id của cây cầu */
        /* tìm cây cầu với $id được gửi lên thông qua router */
        $currentBridge = Bridge::findOrFail($id);
        return view('backend.bridges.update', compact('currentBridge'));
    }

    /*
       Logic Handle Create or Update the Bridge
    */
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
        return redirect()->route('bridge')->with('success', 'You have successfully bridge update.');
    }

    /*
        Delete the bridge
    */
    public function getDelete($id){
        Bridge::destroy($id);
        return redirect()->route('bridge')->with('success', 'You have successfully deleted the bridge.');
    }

    /*
     * Return view the list photos of the bridge
     * */
    public function getListPhoto($id){
        $currentBridge = Bridge::findOrFail($id);
        return view('backend.bridges.photo.list', compact('currentBridge'));
    }

    /*
    *  return về giao diện update ( thêm hoặc cập nhật) hình của cây cầu
    */
    public function getPhoto(Request $request) {
        $currentBridge = Bridge::findOrFail($request->idBridge);
        if(!blank($request->idPhoto)){
            $currentPhoto = Photo::findOrFail($request->idPhoto);
        }else{
            $currentPhoto = [];
        }
        return view('backend.bridges.photo.update', compact(['currentBridge','currentPhoto']));
    }

    /*
     *  Xử lí logic khi admin upload hình ảnh, tạo mới hoặc cập nhật hình ảnh của cây cầu
     * */
    public function postUpdatePhoto(Request $request)
    {
        /* bắt lỗi sai định dạng ở backend */
        /* name is the photo */
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
        /* remove hình cũ */
        if($request->hasFile('name') && !blank($request->namePhoto)){
            $oldPath = 'store-public/' . $request->namePhoto;
            if(file_exists(public_path($oldPath))){
                unlink(public_path($oldPath));
            };
        }

        /*  lưu hình mới vừa upload vào thư mục public/store-public/tên_tấm_hình_tạo_ở_trên    */
        $request->name->move(public_path('store-public'), $imageName);


        return back()->with('success', 'You have successfully upload image.')->with('image', $imageName);

    }

    /* Xóa hình trong csdl và trong folder */
    public function getDeletePhoto($id){
        /* tìm id của bảng photos */
        $photo = Photo::findOrFail($id);
        /* xóa trong csdl */
        Photo::destroy($id);
        /* tạo đường dẫn với tên photo */
        $oldPath = 'store-public/' . $photo->name;
        /* kiểm tra trong thư mục có tồn tại tên photo này ko */
        if(file_exists(public_path($oldPath))){
            /* xóa nếu tồn tại */
            unlink(public_path($oldPath));
        };

        return back()->with('success', 'You have successfully deleted the photo.');
    }


    /*
     *  Return view Parameter of the bridge
     * */
    public function getParameter($id){
        $currentBridge = Bridge::findOrFail($id);
        return view('backend.bridges.parameter.update', compact('currentBridge'));
    }

    /*
     *  Xử lí logic khi thêm hoặc cập nhật parameter của cây cầu
     * */
    public function postUpdateParameter(Request $request)
    {
        /* bắt lỗi sai định dạng ở backend */
        $request->validate([
            'length' => 'nullable|numeric|min:0',
            'width' => 'nullable|numeric|min:0',
            'height' => 'nullable|numeric|min:0',
            'pier' => 'nullable|numeric|min:0',
            'type' => 'nullable',
            'builded' => 'nullable|numeric',
            'beautiful' => 'integer|min:0|max:10',
            'strange' => 'integer|min:0|max:10',
            'famous' => 'integer|min:0|max:10',
        ]);
        /* Kiểm tra xem cây cầu này có parameter chưa */
        $CheckExistBridge = Bridge::findOrFail($request->bridge_id);
        /* nếu có thì cập nhật, không thì thêm mới */
        if($CheckExistBridge){
            Parameter::updateOrCreate(
                [
                'id' => $request->idParameter
                ],
                /* Thêm tất cả các field được submit từ giao diện ngoại trừ field idParameter */
                $request->except('idParameter')
            );
        }
        return back()->with('success', 'You have successfully parameter update.');
    }



}
