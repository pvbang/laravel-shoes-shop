@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>QUẢN LÝ KHUYẾN MÃI</strong>&ensp;
            <i class="fas fa-hand-holding-usd"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <!-- table-hover -->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên khuyến mãi</th>
                        <th scope="col">Giá trị khuyến mãi</th>
                        <th scope="col">Thay đổi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($khuyenmais as $khuyenmai)
                    <tr>
                        <th scope="row">{{$khuyenmai['id_khuyen_mai']}}</th>
                        <td>{{$khuyenmai['ten_khuyen_mai']}}</td>
                        <td>{{$khuyenmai['gia_tri_khuyen_mai']}} %</td>
                        <td>
                            <!-- <a href="" type="button" class="btn btn-success btn-rounded" target="_blank">Xem</a> -->
                            <a href="/admin/khuyenmai/sua/id={{$khuyenmai['id_khuyen_mai']}}" type="button" class="btn btn-warning btn-rounded">Sửa</a>
                            <a href="/admin/khuyenmai/xoa/id={{$khuyenmai['id_khuyen_mai']}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
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

        <a href="/admin/khuyenmai/them" type="button" class="btn btn-info">Thêm Khuyến mãi</a>

    </div>
</div>



<br>
@endsection