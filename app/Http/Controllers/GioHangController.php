<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use App\Models\User;
use App\Models\Giay;
use App\Models\LoaiGiay;
use App\Models\ThuongHieu;
use App\Models\KhuyenMai;
use App\Models\GioHang;
use App\Models\PhanQuyen;

class GioHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('id',session('DangNhap'))->first();
        $thuonghieus = ThuongHieu::all();
        $loaigiays = LoaiGiay::all();
        $giays = Giay::all();
        $users = User::all();
        $phanquyens = PhanQuyen::all();
        $khuyenmais = KhuyenMai::all();

        $giohangs = session()->get(key:'gio_hang');
        if(!$giohangs){
            $giohangs = array();
        }
        
        return view('index')->with('route', 'gio-hang')
        ->with('data', $data)
        ->with('thuonghieus', $thuonghieus)
        ->with('loaigiays', $loaigiays)
        ->with('giays', $giays)
        ->with('users', $users)
        ->with('phanquyens', $phanquyens)
        ->with('khuyenmais', $khuyenmais)
        ->with('giohangs', $giohangs)
        ;
    }

    public function themvaogiohang($id) {
        // session()->forget('gio_hang');

        $giay = Giay::find($id);
        $gio_hang = session()->get(key:'gio_hang');

        $khuyenmais = KhuyenMai::all();

        if(isset($gio_hang[$id])){
            $gio_hang[$id]['so_luong'] += 1;
        } else {

            $gio_hang[$id] = [
                'hinh_anh_1' => $giay['hinh_anh_1'],
                'ten_giay' => $giay['ten_giay'],
                'don_gia' => $giay['don_gia'],
                'so_luong' => '1',
            ];

            foreach($khuyenmais as $khuyenmai){
                if($khuyenmai['ten_khuyen_mai'] == $giay['ten_khuyen_mai']){
                    $gio_hang[$id]['khuyen_mai'] = $khuyenmai['gia_tri_khuyen_mai'];
                }
            }
        }        
        
        session()->put('gio_hang', $gio_hang);
        
        return Redirect('/cua-hang/san-pham='.$id);
        // return session()->get(key:'gio_hang');
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
        //

        
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
    public function update(Request $request)
    {
        //
        $giay = Giay::find($request->id);
        $gio_hang = session()->get(key:'gio_hang');

        
        $gio_hang[$request->id]['so_luong'] =  $request->so_luong;
        
        session()->put('gio_hang', $gio_hang);
        // return session()->get(key:'gio_hang');
        return Redirect('/gio-hang');
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
        $gio_hang = session()->get(key:'gio_hang');

        unset($gio_hang[$id]);
        session()->put('gio_hang', $gio_hang);
        return Redirect('/gio-hang');

    }
}
