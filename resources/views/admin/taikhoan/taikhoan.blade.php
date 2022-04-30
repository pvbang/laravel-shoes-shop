@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>QUẢN LÝ TÀI KHOẢN</strong>&ensp;
            <i class="fas fa-user"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <!-- table-hover -->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên người dùng</th>
                        <th scope="col">Email</th>
                        <th scope="col">SĐT</th>
                        <th scope="col">Tên đăng nhập</th>
                        <th scope="col">Mã phân quyền</th>
                        <th scope="col">Thay đổi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$user['id']}}</th>
                        <td>{{$user['ten_nguoi_dung']}}</td>
                        <td>{{$user['email']}}</td>
                        <td>{{$user['sdt']}}</td>
                        <td>{{$user['Ten_dang_nhap']}}</td>
                        <td>{{$user['id_phan_quyen']}}</td>
                        <td>
                            <!-- <a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a> -->
                            <a href="/admin/taikhoan/sua/id={{$user['id']}}" type="button" class="btn btn-warning btn-rounded">Sửa</a>
                            <a href="/admin/taikhoan/xoa/id={{$user['id']}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
                                class="btn btn-danger btn-rounded">Xóa</a>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>

            <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
            </script>
        </div>
    </div>

</div>


<div class="card shadow">
    <div class="card-header">
        <h5 class="card-title" style="margin-top: 10px">Tùy chỉnh:</h5>
    </div>
    <div class="card-body">

        <a href="/admin/taikhoan/them" type="button" class="btn btn-info">Thêm Tài khoản</a>

    </div>
</div>



<br>
@endsection