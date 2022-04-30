<div class="card mb-3 shadow-5" style="background-color: #EEEEEE">
    <div class="card-body" style="margin-top:40px">
        <center>
            <h3 class="card-title">TÀI KHOẢN</h3>
        </center>
    </div>
    <br>
</div>

<div class="container">
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/trang-chu">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tài khoản</li>
        </ol>
    </nav>
    <br>


    <div class="row">
        <div class="col-lg-6">
            <!-- <img src="{{ URL('images1/register.png') }}" class="img-fluid" alt="Sample image"> -->
            <img src="/images1/register.png"" class="img-fluid" alt="Sample image">
        </div>

        <div class="col-lg-6">
            <div class="card mb-3">
                <div class="container">
                    <div class="card-header">
                        <h5 class="card-title" style="margin-top: 10px">TÀI KHOẢN CỦA TÔI:</h5>
                    </div>
                    <div class="card-body">
                        <form action="/tai-khoan/sua" method="POST">
                            @csrf
                            <br>
                            <input type="hidden" class="form-control" name="id" value="{{$data['id']}}" />

                            <div class="form-outline mb-4">
                                <input type="input" class="form-control" name="ten_nguoi_dung"
                                    value="{{$data['ten_nguoi_dung']}}" required />
                                <label class="form-label">Tên người dùng</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="email" class="form-control" name="email" value="{{$data['email']}}"
                                    required />
                                <label class="form-label">Email</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="input" class="form-control" name="sdt" value="{{$data['sdt']}}" required />
                                <label class="form-label">Số điện thoại</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="input" class="form-control" name="Ten_dang_nhap"
                                    value="{{$data['Ten_dang_nhap']}}" required />
                                <label class="form-label">Tên đăng nhập</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" class="form-control" name="password"
                                    value="{{$data['password']}}" required />
                                <label class="form-label">Mật khẩu</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Sửa</button>
                            <a href="/trang-chu" type="button" class="btn btn-info">Quay lại</a>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>





    <br>
    <br>
    <br>


</div>