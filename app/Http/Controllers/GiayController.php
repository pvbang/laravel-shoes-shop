<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

use App\Models\User;
use App\Models\Giay;
use App\Models\LoaiGiay;
use App\Models\ThuongHieu;
use App\Models\KhuyenMai;

class GiayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hinh1 = "";
        $hinh2 = "";
        $hinh3 = "";
        $hinh4 = "";

        if($request->file('hinh_anh_1')){
            $filename1 = $request->file('hinh_anh_1');
            $hinh1 = $filename1->getClientOriginalName();
            $filename1 -> move(public_path('storage/images'), $hinh1);
        }
        if($request->file('hinh_anh_2')){
            $filename2 = $request->file('hinh_anh_2');
            $hinh2 = $filename2->getClientOriginalName();
            $filename2 -> move(public_path('storage/images'), $hinh2);
        } else {
            $hinh2 = $hinh1;
        }
        if($request->file('hinh_anh_3')){
            $filename3 = $request->file('hinh_anh_3');
            $hinh3 = $filename3->getClientOriginalName();
            $filename3 -> move(public_path('storage/images'), $hinh3);
        } else {
            $hinh3 = $hinh1;
        }
        if($request->file('hinh_anh_4')){
            $filename4 = $request->file('hinh_anh_4');
            $hinh4 = $filename4->getClientOriginalName();
            $filename4 -> move(public_path('storage/images'), $hinh4);
        } else {
            $hinh4 = $hinh1;
        }
       
        $giay = Giay::create([
            'ten_giay' => $request->input('ten_giay'),
            'ten_loai_giay' => $request->input('ten_loai_giay'),
            'ten_thuong_hieu' => $request->input('ten_thuong_hieu'),
            'mo_ta' => $request->input('mo_ta'),
            'don_gia' => $request->input('don_gia'),
            'so_luong' => $request->input('so_luong'),
            'hinh_anh_1' => $hinh1,
            'hinh_anh_2' => $hinh2,
            'hinh_anh_3' => $hinh3,
            'hinh_anh_4' => $hinh4,            
            'ten_khuyen_mai' => $request->input('ten_khuyen_mai'),
            'so_luong_mua' => '0',
            
        ]);

        return Redirect('/admin/giay');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // hiển thị
        $data = Giay::all();
        return View('admin.giay.giay', ['giays'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /// sửa
        $data = Giay::find($id);
        $loaigiays = LoaiGiay::all();
        $thuonghieus = ThuongHieu::all();
        $khuyenmais = KhuyenMai::all();

        return View('admin.giay.sua', ['giay'=>$data])
        ->with('loaigiays', $loaigiays)
        ->with('thuonghieus', $thuonghieus)
        ->with('khuyenmais', $khuyenmais)
        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // update
        $hinh1 = "";
        $hinh2 = "";
        $hinh3 = "";
        $hinh4 = "";

        // if($request->file('hinh_anh_1')){
        //     $hinh1 = $request->file('hinh_anh_1')->getClientOriginalName();
        //     $request->file('hinh_anh_1')->storeAs('public/images', $hinh1);
            
        // }
        // if($request->file('hinh_anh_2')){
        //     $hinh2 = $request->file('hinh_anh_2')->getClientOriginalName();
        //     $request->file('hinh_anh_2')->storeAs('public/images', $hinh2);
        // }
        // if($request->file('hinh_anh_3')){
        //     $hinh3 = $request->file('hinh_anh_3')->getClientOriginalName();
        //     $request->file('hinh_anh_3')->storeAs('public/images', $hinh3);
        // }
        // if($request->file('hinh_anh_4')){
        //     $hinh4 = $request->file('hinh_anh_4')->getClientOriginalName();
        //     $request->file('hinh_anh_4')->storeAs('public/images', $hinh4);
        // }

        if($request->file('hinh_anh_1')){
            // $hinh1 = $request->file('hinh_anh_1')->getClientOriginalName();
            // $request->file('hinh_anh_1')->storeAs('public/images', $hinh1);
            $filename1 = $request->file('hinh_anh_1');
            $hinh1 = $filename1->getClientOriginalName();
            $filename1 -> move(public_path('storage/images'), $hinh1);
        }
        if($request->file('hinh_anh_2')){
            // $hinh2 = $request->file('hinh_anh_2')->getClientOriginalName();
            // $request->file('hinh_anh_2')->storeAs('public/images', $hinh2);
            $filename2 = $request->file('hinh_anh_2');
            $hinh2 = $filename2->getClientOriginalName();
            $filename2 -> move(public_path('storage/images'), $hinh2);
        } else {
            $hinh2 = $hinh1;
        }
        if($request->file('hinh_anh_3')){
            // $hinh3 = $request->file('hinh_anh_3')->getClientOriginalName();
            // $request->file('hinh_anh_3')->storeAs('public/images', $hinh3);
            $filename3 = $request->file('hinh_anh_3');
            $hinh3 = $filename3->getClientOriginalName();
            $filename3 -> move(public_path('storage/images'), $hinh3);
        } else {
            $hinh3 = $hinh1;
        }
        if($request->file('hinh_anh_4')){
            // $hinh4 = $request->file('hinh_anh_4')->getClientOriginalName();
            // $request->file('hinh_anh_4')->storeAs('public/images', $hinh4);
            $filename4 = $request->file('hinh_anh_4');
            $hinh4 = $filename4->getClientOriginalName();
            $filename4 -> move(public_path('storage/images'), $hinh4);
        } else {
            $hinh4 = $hinh1;
        }

        $giay = Giay::find($request->id_giay);
        $giay['ten_giay'] = $request->ten_giay;
        $giay['ten_loai_giay'] = $request->ten_loai_giay;
        $giay['ten_thuong_hieu'] = $request->ten_thuong_hieu;
        $giay['mo_ta'] = $request->mo_ta;
        $giay['don_gia'] = $request->don_gia;
        $giay['so_luong'] = $request->so_luong;
        $giay['hinh_anh_1'] = $hinh1;
        $giay['hinh_anh_2'] = $hinh2;
        $giay['hinh_anh_3'] = $hinh3;
        $giay['hinh_anh_4'] = $hinh4;
        $giay['ten_khuyen_mai'] = $request->ten_khuyen_mai;

        $giay->save();
        return Redirect('/admin/giay');

        // return $request->file('hinh_anh_1')->storeAs('public/images', $hinh1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /// xóa
        $data = Giay::find($id);
        $data->delete();
        return Redirect('/admin/giay');
    }
}
