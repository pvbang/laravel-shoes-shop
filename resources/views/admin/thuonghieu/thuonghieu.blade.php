@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>QUẢN LÝ THƯƠNG HIỆU</strong>&ensp;
            <i class="fas fa-trademark"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <!-- table-hover -->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên thương hiệu</th>
                        <th scope="col">Thay đổi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($thuonghieus as $thuonghieu)
                    <tr>
                        <th scope="row">{{$thuonghieu['id_thuong_hieu']}}</th>
                        <td>{{$thuonghieu['ten_thuong_hieu']}}</td>
                        <td>
                            <!-- <a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a> -->
                            <a href="/admin/thuonghieu/sua/id={{$thuonghieu['id_thuong_hieu']}}" type="button" class="btn btn-warning btn-rounded">Sửa</a>
                            <a href="/admin/thuonghieu/xoa/id={{$thuonghieu['id_thuong_hieu']}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
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

        <a href="/admin/thuonghieu/them" type="button" class="btn btn-info">Thêm Thương hiệu</a>

    </div>
</div>



<br>
@endsection