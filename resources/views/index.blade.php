@extends('app.app.app')

@section('content')

    @switch($route)
        @case('trang-chu')
            @include('app.app.carousel')
            @include('app.app.body')
            @break
    
        @case('cua-hang')
            @include('app.cuahang.cuahang')
            @break
            
        @case('san-pham')

            @include('app.cuahang.sanpham')
            @break
        
        @case('thanh-toan')
            @include('app.thanhtoan.thanhtoan')
            @break

        @case('gio-hang')
            @include('app.giohang.giohang')
            @break

        @case('gioi-thieu')
            @include('app.app.carousel')
            @include('app.gioithieu.gioithieu')
            @break

        @case('tai-khoan')
            @include('app.taikhoan.taikhoan')
            @break

        @default
            @include('app.app.body')
            
    @endswitch
    


@endsection