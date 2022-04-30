@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>THÊM TÀI KHOẢN</strong>&ensp;
            <i class="fas fa-user"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/admin/taikhoan/them" method="POST">
                @csrf
                <br>
                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_nguoi_dung" required/>
                    <label class="form-label" >Tên người dùng</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="email" class="form-control" name="email" required/>
                    <label class="form-label" >Email</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="sdt" required/>
                    <label class="form-label" >Số điện thoại</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="Ten_dang_nhap" required/>
                    <label class="form-label" >Tên đăng nhập</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" class="form-control" name="password" required/>
                    <label class="form-label" >Mật khẩu</label>
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
                <a href="/admin/taikhoan" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection