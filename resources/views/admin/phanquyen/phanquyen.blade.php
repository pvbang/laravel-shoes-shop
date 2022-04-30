@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>QUẢN LÝ PHÂN QUYỀN</strong>&ensp;
            <i class="fas fa-users"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <!-- table-hover -->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">Mã phân quyền</th>
                        <th scope="col">Tên phân quyền</th>
                        <th scope="col">Thay đổi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($phanquyens as $phanquyen)
                    <tr>
                        <th scope="row">{{$phanquyen['id_phan_quyen']}}</th>
                        <td>{{$phanquyen['ten_phan_quyen']}}</td>
                        <td>
                            <!-- <a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a> -->
                            <a href="/admin/phanquyen/sua/id={{$phanquyen['id_phan_quyen']}}" type="button" class="btn btn-warning btn-rounded">Sửa</a>
                            <a href="/admin/phanquyen/xoa/id={{$phanquyen['id_phan_quyen']}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
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

        <a href="/admin/phanquyen/them" type="button" class="btn btn-info">Thêm Phân quyền</a>

    </div>
</div>



<br>
@endsection