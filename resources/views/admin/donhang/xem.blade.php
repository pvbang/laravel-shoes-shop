@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>XEM CHI TIẾT ĐƠN HÀNG</strong>&ensp;
            <i class="fas fa-cart-arrow-down"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <!-- table-hover -->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">Tên giày</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $donhangs = unserialize($donhang['hoa_don']);
                    @endphp

                    @foreach ($donhangs as $donhang)
                    <tr>
                        <td scope="row">{{$donhang['ten_giay']}} VNĐ</td>
                        <td>{{number_format($donhang['don_gia'])}}</td>
                        <td>{{$donhang['so_luong']}}</td>
                        <td>{{number_format($donhang['don_gia'] * $donhang['so_luong'])}} VNĐ</td>
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

        <a href="/admin/donhang" type="button" class="btn btn-info">Duyệt đơn hàng này</a>

    </div>
</div>


<br>
@endsection