@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>SỬA GIÀY</strong>&ensp;
            <i class="fas fa-list"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/admin/giay/sua" method="POST" enctype="multipart/form-data">
                @csrf
                <br>
                <input type="hidden" class="form-control" name="id_giay" value="{{$giay['id_giay']}}"/>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_giay" value="{{$giay['ten_giay']}}" required />
                    <label class="form-label">Tên giày</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_loai_giay" list="loai_giay" autocomplete="off" value="{{$giay['ten_loai_giay']}}" required />
                    <label class="form-label">Loại giày</label>
                    <datalist id="loai_giay">
                        @foreach ($loaigiays as $loaigiay)
                            <option value="{{$loaigiay['ten_loai_giay']}}">
                        @endforeach
                    </datalist>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_thuong_hieu" list="thuong_hieu" autocomplete="off" value="{{$giay['ten_thuong_hieu']}}" required />
                    <label class="form-label">Thương hiệu</label>
                    <datalist id="thuong_hieu">
                        @foreach ($thuonghieus as $thuonghieu)
                            <option value="{{$thuonghieu['ten_thuong_hieu']}}">
                        @endforeach
                    </datalist>
                </div>

                <label class="form-label" for="ckediter"><b>Mô tả:</b></label>
                <div class="form-outline mb-4">
                    <textarea type="input" class="form-control" id="ckediter" name="mo_ta" >{{$giay['mo_ta']}}</textarea>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="don_gia" value="{{$giay['don_gia']}}" required />
                    <label class="form-label">Đơn giá</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="so_luong" value="{{$giay['so_luong']}}" required />
                    <label class="form-label">Số lượng</label>
                </div>

                <label class="form-label"><b>Hình ảnh 1:</b></label>
                <div class="form-outline mb-4">
                    <input type="file" class="form-control" name="hinh_anh_1" value="{{$giay['hinh_anh_1']}}">
                </div>

                <label class="form-label"><b>Hình ảnh 2:</b></label>
                <div class="form-outline mb-4">
                    <input type="file" class="form-control" name="hinh_anh_2" value="{{$giay['hinh_anh_2']}}" />
                </div>

                <label class="form-label"><b>Hình ảnh 3:</b></label>
                <div class="form-outline mb-4">
                    <input type="file" class="form-control" name="hinh_anh_3" value="{{$giay['hinh_anh_3']}}" />
                </div>

                <label class="form-label"><b>Hình ảnh 4:</b></label>
                <div class="form-outline mb-4">
                    <input type="file" class="form-control" name="hinh_anh_4" value="{{$giay['hinh_anh_4']}}" />
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_khuyen_mai" list="khuyen_mai" autocomplete="off" value="{{$giay['ten_khuyen_mai']}}"  />
                    <label class="form-label">Khuyễn mãi</label>
                    <datalist id="khuyen_mai">
                        @foreach ($khuyenmais as $khuyenmai)
                            <option value="{{$khuyenmai['ten_khuyen_mai']}}">
                        @endforeach
                    </datalist>
                </div>

                <button type="submit" class="btn btn-primary">Sửa</button>
                <a href="/admin/giay" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>

@endsection