<div class="card mb-3 shadow-5" style="background-color: #EEEEEE">
    <div class="card-body" style="margin-top:40px">
        <center>
            <h3 class="card-title">THANH TOÁN</h3>
        </center>
    </div>
    <br>
</div>

<div class="container">
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/trang-chu">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
        </ol>
    </nav>
    <br>

    @php
        $tongtien = 0;
    @endphp

    @foreach ($giohangs as $giohang)
        @php
            $tongtien += $giohang['so_luong'] * $giohang['don_gia'] - $giohang['so_luong'] * $giohang['don_gia'] * $giohang['khuyen_mai'] * 0.01;
        @endphp
    @endforeach

    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-3">
                <form action="/thanh-toan/hoadon" method="POST">
                    @csrf
                    <div class="card-header">
                        <h5 class="card-title" style="margin-top: 10px">THÔNG TIN NHẬN HÀNG:</h5>
                    </div>
                    
                    <div class="card-body">
                        <div class="form-group">
                            <label for="bank_code">Hình thức thanh toán:</label>
                            <select name="hinh_thuc_thanh_toan" id="hinh_thuc_thanh_toan" class="form-control">
                                <option value="Sau khi nhận hàng">Thanh toán khi nhận hàng</option>
                                <option value="NCB"> Ngan hang NCB</option>
                                <option value="AGRIBANK"> Ngan hang Agribank</option>
                                <option value="SCB"> Ngan hang SCB</option>
                                <option value="SACOMBANK">Ngan hang SacomBank</option>
                                <option value="EXIMBANK"> Ngan hang EximBank</option>
                                <option value="MSBANK"> Ngan hang MSBANK</option>
                                <option value="NAMABANK"> Ngan hang NamABank</option>
                                <option value="VNMART"> Vi dien tu VnMart</option>
                                <option value="VIETINBANK">Ngan hang Vietinbank</option>
                                <option value="VIETCOMBANK"> Ngan hang VCB</option>
                                <option value="HDBANK">Ngan hang HDBank</option>
                                <option value="DONGABANK"> Ngan hang Dong A</option>
                                <option value="TPBANK"> Ngan hang TPBank</option>
                                <option value="OJB"> Ngan hang OceanBank</option>
                                <option value="BIDV"> Ngan hang BIDV</option>
                                <option value="TECHCOMBANK"> Ngan hang Techcombank</option>
                                <option value="VPBANK"> Ngan hang VPBank</option>
                                <option value="MBBANK"> Ngan hang MBBank</option>
                                <option value="ACB"> Ngan hang ACB</option>
                                <option value="OCB"> Ngan hang OCB</option>
                                <option value="IVB"> Ngan hang IVB</option>
                                <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                            </select>
                        </div>
                        <br>

                        <div class="form-outline">
                            <input type="text" class="form-control" name="ten_nguoi_nhan"
                                value="{{ $data['ten_nguoi_dung'] }}" required />
                            <label class="form-label">Tên người nhận</label>
                        </div>
                        <br>
                        <div class="form-outline">
                            <input type="text" class="form-control" name="sdt" value="{{ $data['sdt'] }}" required />
                            <label class="form-label">Số điện thoại</label>
                        </div>
                        <br>

                        <div class="form-outline">
                            <input type="text" class="form-control" name="dia_chi_nhan" required />
                            <label class="form-label">Địa chỉ nhận</label>
                        </div>
                        <br>

                        <div class="form-outline">
                            <textarea type="text" class="form-control" name="ghi_chu"></textarea>
                            <label class="form-label">Ghi chú</label>
                        </div>

                        <input type="hidden" class="form-control" name="tong_tien" value="{{ number_format($tongtien) }} VNĐ" />
                       
                        <input type="hidden" name="thanh_toans" value="{{ serialize($giohangs) }}" />

                        <br>
                        <button type="submit" class="btn btn-success btn-block">Thanh Toán</button>

                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title" style="margin-top: 10px">HÓA ĐƠN:</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($giohangs as $giohang)
                                <tr>
                                    <td scope="row">{{ $giohang['ten_giay'] }}</td>
                                    <td>{{ number_format($km = sprintf('%d', $giohang['so_luong'] * $giohang['don_gia'] - $giohang['so_luong'] * $giohang['don_gia'] * $giohang['khuyen_mai'] * 0.01)) }}
                                        VNĐ</td>
                                </tr>
                            @endforeach

                            <tr>
                                <th scope="row">Phí vận chuyển</th>
                                <th>32,000 VNĐ</th>
                            </tr>

                            <tr class="text-success  ">
                                <th scope="row">Tổng </th>
                                <th>{{ number_format($tongtien + 32000) }} VNĐ</th>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>



    <br>
    <br>
    <br>


</div>
