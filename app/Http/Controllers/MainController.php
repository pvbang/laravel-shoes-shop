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

class MainController extends Controller
{
  
    public function index(){

        if(session()->get(key:'gio_hang') == null){
            $gio_hang = array();
            session()->put('gio_hang', $gio_hang);
        }
        
        $data = User::where('id',session('DangNhap'))->first();
        $thuonghieus = ThuongHieu::all();
        $loaigiays = LoaiGiay::all();
        $giays = Giay::all();
        $users = User::all();
        $phanquyens = PhanQuyen::all();
        $khuyenmais = KhuyenMai::all();

        // $soluongdanhgia = array();
        // $soluongdanhgia['danh_gia'] = DB::table('danh_gia')->avg('danh_gia');

        $giaymoinhats = DB::table('giay')->orderBy('updated_at', 'desc')->get();
        $giaynoibats = DB::table('giay')->orderBy('so_luong_mua', 'desc')->get();

        return view('index')->with('route', 'trang-chu')
        ->with('data', $data)
        ->with('thuonghieus', $thuonghieus)
        ->with('loaigiays', $loaigiays)
        ->with('giays', $giays)
        ->with('users', $users)
        ->with('phanquyens', $phanquyens)
        ->with('khuyenmais', $khuyenmais)
        ->with('giaymoinhats', $giaymoinhats)
        ->with('giaynoibats', $giaynoibats)
        // ->with('soluongdanhgia', $soluongdanhgia)
        ;
    }

    public function cuahang(){
        $data = User::where('id',session('DangNhap'))->first();
        $thuonghieus = ThuongHieu::all();
        $loaigiays = LoaiGiay::all();
        $giays = Giay::paginate(12);
        $users = User::all();
        $phanquyens = PhanQuyen::all();
        $khuyenmais = KhuyenMai::all();

        return view('index')->with('route', 'cua-hang')
        ->with('data', $data)
        ->with('thuonghieus', $thuonghieus)
        ->with('loaigiays', $loaigiays)
        ->with('giays', $giays)
        ->with('users', $users)
        ->with('phanquyens', $phanquyens)
        ->with('khuyenmais', $khuyenmais)
        ->with('timloaigiay', '')->with('timthuonghieu', '')
        ;
    }

    public function thanhtoan(){
        $data = User::where('id',session('DangNhap'))->first();
        $thuonghieus = ThuongHieu::all();
        $loaigiays = LoaiGiay::all();
        $giays = Giay::all();
        $users = User::all();
        $phanquyens = PhanQuyen::all();
        $khuyenmais = KhuyenMai::all();

        return view('index')->with('route', 'thanh-toan')
        ->with('data', $data)
        ->with('thuonghieus', $thuonghieus)
        ->with('loaigiays', $loaigiays)
        ->with('giays', $giays)
        ->with('users', $users)
        ->with('phanquyens', $phanquyens)
        ->with('khuyenmais', $khuyenmais)
        ;
    }

    public function timkiem(Request $request){
        $data = User::where('id',session('DangNhap'))->first();
        $thuonghieus = ThuongHieu::all();
        $loaigiays = LoaiGiay::all();
        $giays = DB::table('giay')->where('ten_giay', 'like', '%'.$request->tim_kiem.'%')
        ->orWhere('ten_loai_giay', 'like', '%'.$request->tim_kiem.'%')
        ->orWhere('ten_thuong_hieu', 'like', '%'.$request->tim_kiem.'%')
        ->orWhere('don_gia', 'like', '%'.$request->tim_kiem.'%')
        ->paginate(12);

        $users = User::all();
        $phanquyens = PhanQuyen::all();
        $khuyenmais = KhuyenMai::all();

        return view('index')->with('route', 'cua-hang')
        ->with('data', $data)
        ->with('thuonghieus', $thuonghieus)
        ->with('loaigiays', $loaigiays)
        ->with('giays', $giays)
        ->with('users', $users)
        ->with('phanquyens', $phanquyens)
        ->with('khuyenmais', $khuyenmais)
        ->with('timloaigiay', '')->with('timthuonghieu', '')
        ;
    }

    public function sanpham($slug){
        $data = User::where('id',session('DangNhap'))->first();
        $thuonghieus = ThuongHieu::all();
        $loaigiays = LoaiGiay::all();
        $giay = Giay::find($slug);
        // $ok = Giay::where('ten_thuong_hieu', $giay['ten_thuong_hieu'])->get();

        if(DB::table('giay')->where('ten_thuong_hieu', $giay['ten_thuong_hieu'])->orWhere('ten_loai_giay', $giay['ten_loai_giay'])->count() < 4) {
            $giaytuongtus = DB::table('giay')
            ->where('ten_thuong_hieu', $giay['ten_thuong_hieu'])
            ->orWhere('don_gia', '>', $giay['don_gia']-100000)->where('don_gia', '<', $giay['don_gia']+100000)
            ->orWhere('ten_loai_giay', $giay['ten_loai_giay'])->get();
        } else if (DB::table('giay')->where('ten_thuong_hieu', $giay['ten_thuong_hieu'])->count() < 4) {
            $giaytuongtus = DB::table('giay')->where('ten_thuong_hieu', $giay['ten_thuong_hieu'])->orWhere('ten_loai_giay', $giay['ten_loai_giay'])->get();
        } else {
            $giaytuongtus = DB::table('giay')->where('ten_thuong_hieu', $giay['ten_thuong_hieu'])->get();
        }

        $danhgias = DB::table('danh_gia')->where('id_giay', $giay['id_giay'])->paginate(3);
        
        $danh_gias = session()->get(key:'danh_gias');
        if(!$danh_gias){
            $danh_gias = array();
        }

        $soluongdanhgia = array();
        $soluongdanhgia['count_danh_gia'] = DB::table('danh_gia')->where('id_giay', $giay['id_giay'])->count();
        $soluongdanhgia['danh_gia'] = DB::table('danh_gia')->where('id_giay', $giay['id_giay'])->avg('danh_gia');

        $users = User::all();
        $phanquyens = PhanQuyen::all();
        $khuyenmais = KhuyenMai::all();

        // dd($danh_gias);
        
        // DB::table('mon_an')->where('ID_nha_hang', $request->ID_nha_hang);

        // return $giaytuongtus;

        $gio_hangs = session()->get(key:'gio_hang');
        if(!$gio_hangs){$gio_hangs = array();}


        return view('index')->with('route', 'san-pham')
        ->with('data', $data)
        ->with('thuonghieus', $thuonghieus)
        ->with('loaigiays', $loaigiays)
        ->with('giay', $giay)
        ->with('giaytuongtus', $giaytuongtus)
        ->with('users', $users)
        ->with('phanquyens', $phanquyens)
        ->with('khuyenmais', $khuyenmais)
        ->with('danh_gias', $danh_gias)
        ->with('danhgias', $danhgias)
        ->with('soluongdanhgia', $soluongdanhgia)
        ->with('gio_hangs', $gio_hangs)
        ;
    }

    //

    public function timloaigiay($loaigiay){
        $data = User::where('id',session('DangNhap'))->first();
        $thuonghieus = ThuongHieu::all();
        $loaigiays = LoaiGiay::all();
        $users = User::all();
        $phanquyens = PhanQuyen::all();
        $khuyenmais = KhuyenMai::all();

        $giays = DB::table('giay')->where('ten_loai_giay', $loaigiay)->paginate(9);

        return view('index')->with('route', 'cua-hang')
        ->with('data', $data)
        ->with('thuonghieus', $thuonghieus)
        ->with('loaigiays', $loaigiays)
        ->with('giays', $giays)
        ->with('users', $users)
        ->with('phanquyens', $phanquyens)
        ->with('khuyenmais', $khuyenmais)
        ->with('timloaigiay', $loaigiay)
        ->with('timthuonghieu', '')

        ;
    }

    public function timthuonghieu($thuonghieu){
        $data = User::where('id',session('DangNhap'))->first();
        $thuonghieus = ThuongHieu::all();
        $loaigiays = LoaiGiay::all();
        $giays = DB::table('giay')->where('ten_thuong_hieu', $thuonghieu)->paginate(9);
        $users = User::all();
        $phanquyens = PhanQuyen::all();
        $khuyenmais = KhuyenMai::all();

        return view('index')->with('route', 'cua-hang')
        ->with('data', $data)
        ->with('thuonghieus', $thuonghieus)
        ->with('loaigiays', $loaigiays)
        ->with('giays', $giays)
        ->with('users', $users)
        ->with('phanquyens', $phanquyens)
        ->with('khuyenmais', $khuyenmais)
        ->with('timthuonghieu', $thuonghieu)
        ->with('timloaigiay', '')
        ;
    }

    public function timgia($gia1, $gia2){
        $data = User::where('id',session('DangNhap'))->first();
        $thuonghieus = ThuongHieu::all();
        $loaigiays = LoaiGiay::all();

        if($gia1 == '0'){
            $giays = DB::table('giay')->where('don_gia', '<', $gia2)->paginate(9);
        } else {
            $giays = DB::table('giay')->where('don_gia', '>', $gia1)->where('don_gia', '<', $gia2)->paginate(9);
        }

        $users = User::all();
        $phanquyens = PhanQuyen::all();
        $khuyenmais = KhuyenMai::all();

        return view('index')->with('route', 'cua-hang')
        ->with('data', $data)
        ->with('thuonghieus', $thuonghieus)
        ->with('loaigiays', $loaigiays)
        ->with('giays', $giays)
        ->with('users', $users)
        ->with('phanquyens', $phanquyens)
        ->with('khuyenmais', $khuyenmais)
        ->with('timthuonghieu', '')
        ->with('timloaigiay', '')
        ;
    }

    public function aboutUs(){
        return view('index')->with('route', 'gioi-thieu');
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    // Register;
    public function storeReg(Request $request){
        // $request->validate([
        //     'ten_nguoi_dung' => 'required',
        //     'email' => 'required | email | unique:users',
        //     'sdt' => 'required',
        //     'Ten_dang_nhap' => 'required | unique:users',
        //     'password' => 'required | min:5 | confirmed',
        //     'id_phan_quyen' => 'required',
        // ],[
        //     'email.unique' => '* Email đã tồn tại.',
        //     'Ten_dang_nhap.unique' => '* Tên đăng nhập đã tồn tại.',
        //     'password.min' => '* Mật khẩu phải chứa ít nhất 5 kí tự.',
        //     'password.confirmed' => '* Mật khẩu xác nhận nhập không đúng.',
        // ]);

        User::create([
            'ten_nguoi_dung' => $request->input('ten_nguoi_dung'),
            'email' => $request->input('email'),
            'sdt' => $request->input('sdt'),
            'Ten_dang_nhap' => $request->input('Ten_dang_nhap'),
            'password' => Hash::make($request->input('password')),
            'id_phan_quyen' => '2',
        ]);

        return redirect()->route('auth.login');
    }

    // Login Check;
    public function loginCheck(Request $request){
        $request->validate([
            'ten_dang_nhap' => 'required',
            'password' => 'required | min:5',
        ]);

        $userinfoEmail = User::where('email', $request->ten_dang_nhap)->first();
        $userinfoUser = User::where('Ten_dang_nhap', $request->ten_dang_nhap)->first();

        if (!$userinfoEmail){
            
            if (!$userinfoUser){
                return back()->with('thatbai','* Tên đăng nhập hoặc Email không tồn tại!');
            } else {
                if (Hash::check($request->password, $userinfoUser->password)){
                    $request->session()->put('DangNhap', $userinfoUser->id);

                    $data = User::where('id',session('DangNhap'))->first();
                    $thuonghieus = ThuongHieu::all();
                    $loaigiays = LoaiGiay::all();
                    $giays = Giay::all();
                    $users = User::all();
                    $khuyenmais = KhuyenMai::all();
                    $donhangs = DonHang::all();
                    $giaymoinhats = DB::table('giay')->orderBy('created_at', 'desc')->get();
                    $giaynoibats = DB::table('giay')->orderBy('so_luong_mua', 'desc')->get();

                    if($userinfoUser->id_phan_quyen == '1'){
                        session()->put('check', '1');
                        return view('admin.trangchu.trangchu')
                        ->with('data', $data)
                        ->with('thuonghieus', $thuonghieus)
                        ->with('loaigiays', $loaigiays)
                        ->with('giays', $giays)
                        ->with('users', $users)
                        ->with('khuyenmais', $khuyenmais)
                        ->with('donhangs', $donhangs)
                        ->with('giaymoinhats', $giaymoinhats)
                        ->with('giaynoibats', $giaynoibats)
                        ;
                    }else{
                        session()->put('check', '2');
                        return view('index')->with('data', User::where('id',session('DangNhap'))->first())->with('route', 'trang-chu')
                        ->with('thuonghieus', $thuonghieus)
                        ->with('loaigiays', $loaigiays)
                        ->with('giays', $giays)
                        ->with('users', $users)
                        ->with('khuyenmais', $khuyenmais)
                        ->with('donhangs', $donhangs)
                        ->with('giaymoinhats', $giaymoinhats)
                        ->with('giaynoibats', $giaynoibats)
                        ;
                    }
                } else {
                    session()->put('check', '0');
                    return back()->with('thatbai','* Mật khẩu nhập không đúng, vui lòng nhập lại');
                }
            }
        } else {
            if (Hash::check($request->password, $userinfoEmail->password)){
                $request->session()->put('DangNhap', $userinfoEmail->id);

                $data = User::where('id',session('DangNhap'))->first();
                $thuonghieus = ThuongHieu::all();
                $loaigiays = LoaiGiay::all();
                $giays = Giay::all();
                $users = User::all();
                $khuyenmais = KhuyenMai::all();
                $donhangs = DonHang::all();
                $giaymoinhats = DB::table('giay')->orderBy('created_at', 'desc')->get();
                $giaynoibats = DB::table('giay')->orderBy('so_luong_mua', 'desc')->get();

                if($userinfoEmail->id_phan_quyen == '1'){
                    
                    session()->put('check', '1');
                    return view('admin.trangchu.trangchu')
                    ->with('data', $data)
                    ->with('thuonghieus', $thuonghieus)
                    ->with('loaigiays', $loaigiays)
                    ->with('giays', $giays)
                    ->with('users', $users)
                    ->with('khuyenmais', $khuyenmais)
                    ->with('donhangs', $donhangs)
                    ->with('giaymoinhats', $giaymoinhats)
                    ->with('giaynoibats', $giaynoibats)
                    ;
                }else{

                    session()->put('check', '2');
                    return view('index')->with('data', User::where('id',session('DangNhap'))->first())->with('route', 'trang-chu')
                    ->with('data', $data)
                    ->with('thuonghieus', $thuonghieus)
                    ->with('loaigiays', $loaigiays)
                    ->with('giays', $giays)
                    ->with('users', $users)
                    ->with('khuyenmais', $khuyenmais)
                    ->with('donhangs', $donhangs)
                    ->with('giaymoinhats', $giaymoinhats)
                    ->with('giaynoibats', $giaynoibats)
                    ;
                }
            } else {
                session()->put('check', '0');
                return back()->with('thatbai','* Mật khẩu nhập không đúng, vui lòng nhập lại');
            }
        }

        // $userinfoUser = User::where('Ten_dang_nhap', $request->ten_dang_nhap)->first();
        // if (!$userinfoUser){
        //     return back()->with('thatbai','* Tên đăng nhập hoặc Email không tồn tại!');
        // } else {
        //     if (Hash::check($request->password, $userinfoUser->password)){
        //         $request->session()->put('DangNhap', $userinfoUser->id);

        //         return view('admin.trangchu.trangchu')->with('data', User::where('id',session('DangNhap'))->first());
        //     } else {
        //         return back()->with('thatbai','* Mật khẩu nhập không đúng, vui lòng nhập lại');
        //     }
        // }

    }

    function dangXuat(){
        if (session()->has('DangNhap')){
            session()->pull('DangNhap');
            session()->put('check', '0');
            return redirect('/');
            // return session()->get(key:'check');
        }
        session()->put('check', '0');
        return redirect('/');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        User::create([
            'ten_nguoi_dung' => $request->input('ten_nguoi_dung'),
            'email' => $request->input('email'),
            'sdt' => $request->input('sdt'),
            'Ten_dang_nhap' => $request->input('Ten_dang_nhap'),
            'password' => Hash::make($request->input('password')),
            'id_phan_quyen' => '2',
        ]);

        return Redirect('/admin/taikhoan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /// hiển thị
        $data = User::all();
        return View('admin.taikhoan.taikhoan', ['taikhoans'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // sửa
        $data = User::find($id);
        return View('admin.taikhoan.sua', ['data'=>$data]);
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
        $data = User::find($request->id);
        $data['ten_nguoi_dung'] = $request->ten_nguoi_dung;
        $data['email'] = $request->email;
        $data['sdt'] = $request->sdt;
        $data['Ten_dang_nhap'] = $request->Ten_dang_nhap;
        // $data['password'] = $request->password;
        $data['password'] = Hash::make($request->password);

        $data->save();
        return Redirect('/admin/taikhoan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // xóa
        $data = User::find($id);
        $data->delete();
        return Redirect('/admin/taikhoan');
    }


    
}
