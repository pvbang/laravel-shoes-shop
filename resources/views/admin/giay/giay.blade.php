@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>QUẢN LÝ GIÀY</strong>&ensp;
            <i class="fas fa-list"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <!-- table-hover -->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên giày</th>
                        <th scope="col">Loại giày</th>
                        <th scope="col">Thương hiệu</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Hình ảnh 1</th>
                        <th scope="col">Đánh giá</th>
                        <th scope="col">Thay đổi</th>
                    </tr>
        
                </thead>
                <tbody>
                    @foreach ($giays as $giay)
                    <tr>
                        <th scope="row">{{$giay['id_giay']}}</th>
                        <td>{{$giay['ten_giay']}}</td>
                        <td>{{$giay['ten_loai_giay']}}</td>
                        <td>{{$giay['ten_thuong_hieu']}}</td>
                        <td>{{$giay['don_gia']}}</td>
                        <td>{{$giay['hinh_anh_1']}}</td>
                        <td>{{$giay['danh_gia']}} sao</td>
                        <td>
                            <!-- <a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a> -->
                            <a href="/admin/giay/sua/id={{$giay['id_giay']}}" type="button" class="btn btn-warning btn-rounded">Sửa</a>
                            <a href="/admin/giay/xoa/id={{$giay['id_giay']}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
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

        <a href="/admin/giay/them" type="button" class="btn btn-info">Thêm Giày</a>

    </div>
</div>



<br>
@endsection