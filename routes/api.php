<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Giay;
use App\Models\LoaiGiay;
use App\Models\ThuongHieu;
use App\Models\KhuyenMai;
use App\Models\DanhGia;

use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function() {
    return User::all();
});

Route::get('/users/{id}', function($id) {
    return User::findOrFail($id);
});

Route::post('/users/create/{name}/{email}/{sdt}/{nameSign}/{pass}', function($name, $email, $sdt, $nameSign, $pass) {
    return User::create([
            'ten_nguoi_dung' => $name,
            'email' => $email,
            'sdt' => $sdt,
            'Ten_dang_nhap' => $nameSign,
            'password' => $pass,
            'id_phan_quyen' => '2',
        ]);
});

Route::patch('/users/{id}', function(Request $request, $id) {
    $user = User::findOrFail($id);
    $user->update($request->all());

    return $user;
});

Route::delete('/users/{id}', function($id) {
    return User::destroy($id);
});




        
        

Route::get('/cua-hang', function() {
    return Giay::all();
});

Route::get('/cua-hang/san-pham={id}', function($id) {
    return Giay::findOrFail($id);
});


Route::get('/cua-hang/noi-bat', function() {
    return DB::table('giay')->orderBy('so_luong_mua', 'desc')->get();
});

Route::get('/cua-hang/moi-nhat', function() {
    return DB::table('giay')->orderBy('updated_at', 'desc')->get();
});

Route::get('/cua-hang/thuong-hieu/{thuonghieu}', function($thuonghieu) {
    return DB::table('giay')->where('ten_thuong_hieu', $thuonghieu)->get();
});

Route::get('/cua-hang/dang-giam-gia', function() {
    return DB::table('giay')->where('ten_khuyen_mai', '!=', 'Không khuyến mãi')->get();
});


Route::get('/khuyen-mai', function() {
    return KhuyenMai::all();
});

Route::get('/khuyen-mai/{id}', function($id) {
    return KhuyenMai::findOrFail($id);
});




Route::get('/cua-hang/{id}/update/{num}', function($id, $num) {
    return DB::table('giay')->where('id_giay', $id)->update(['so_luot_xem' => $num]);
});






Route::get('/danh-gia', function() {
    return DanhGia::all();
});

Route::get('/danh-gia/{id}', function($id) {
    return DB::table('danh_gia')->where('id_giay', $id)->get();
});
