@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>QUẢN LÝ LOẠI GIÀY</strong>&ensp;
            <i class="fas fa-shoe-prints"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <!-- table-hover -->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên loại giày</th>
                        <th scope="col">Thay đổi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loaigiays as $loaigiay)
                    <tr>
                        <th scope="row">{{$loaigiay['id_loai_giay']}}</th>
                        <td>{{$loaigiay['ten_loai_giay']}}</td>
                        <td>
                            <!-- <a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a> -->
                            <a href="/admin/loaigiay/sua/id={{$loaigiay['id_loai_giay']}}" type="button" class="btn btn-warning btn-rounded">Sửa</a>
                            <a href="/admin/loaigiay/xoa/id={{$loaigiay['id_loai_giay']}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
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

        <a href="/admin/loaigiay/them" type="button" class="btn btn-info">Thêm Loại giày</a>

    </div>
</div>



<br>
@endsection