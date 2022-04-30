<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Giay;
use App\Models\LoaiGiay;
use App\Models\ThuongHieu;
use App\Models\KhuyenMai;
use App\Models\PhanQuyen;
use App\Models\DonHang;
use App\Models\DanhGia;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class DanhGiaController extends Controller
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
    public function store($id, Request $request)
    {
        // return DB::table('danh_gia')->where('id_user', $request->input('id_user'))->get() ;
        $check = 0;
        $dgs = DanhGia::all();
        foreach($dgs as $dg) {
            if(($dg['id_user'] == $request->input('id_user')) && ($dg['id_giay'] == $request->input('id_giay'))){
                $check = 1;
            } else {
                $check = 0;
            }
        }

        if ($check == 1) {

            $dg = DB::table('danh_gia')->where('id_giay', $request->input('id_giay'))->first();

            $danhgia = DanhGia::find($dg->id_danh_gia);
            $danhgia['danh_gia'] = $request->input('danh_gia');
            $danhgia['ten_danh_gia'] = $request->input('ten_danh_gia');
            $danhgia['danh_gia_binh_luan'] = $request->input('danh_gia_binh_luan');
            $danhgia->save();
            
        } else {
            DanhGia::create([
            'danh_gia' => $request->input('danh_gia'),
            'id_user' => $request->input('id_user'),
            'ten_danh_gia' => $request->input('ten_danh_gia'),
            'danh_gia_binh_luan' => $request->input('danh_gia_binh_luan'),
            'id_giay' => $id,
            ]);
        }
        
        return Redirect('/cua-hang/san-pham='.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
