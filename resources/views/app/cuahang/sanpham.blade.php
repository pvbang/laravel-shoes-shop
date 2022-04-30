@extends('app.app.app')

@section('content')

    <div class="card mb-3 shadow-5" style="background-color: #EEEEEE">
        <div class="card-body" style="margin-top:40px">
            <center>
                <h3 class="card-title" style="text-transform: uppercase;">SẢN PHẨM {{ $giay['ten_giay'] }}</h3>
            </center>
        </div>
        <br>
    </div>

    <div class="container">
        <br>
        <nav aria-label="breadcrumb">
            <div class="row">
                <div class="col-md-7">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/trang-chu">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="/cua-hang">Cửa hàng</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $giay['ten_giay'] }}</li>
                    </ol>
                    <br>
                </div>
                @foreach ($gio_hangs as $id => $giohang)
                    @if ($giohang['ten_giay'] == $giay['ten_giay'])
                        <div class="col-md-5">
                            <div class="alert alert-success" role="alert">
                                <i class="fas fa-check-circle"></i>&ensp;Sản phẩm này đã được thêm vào giỏ hàng của bạn!
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </nav>

        <div class="row">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/storage/images/{{ $giay['hinh_anh_1'] }}" alt="..." class="img-fluid rounded-start" />
                        {{-- style="height: 432px" --}}
                        <div class="row ">
                            @if ($giay['hinh_anh_2'])
                                <div class="col border ripple"><img src="/storage/images/{{ $giay['hinh_anh_2'] }}"
                                        alt="..." class="img-fluid rounded-start" /></div>
                            @else <div class="col border ripple"><img src="/storage/images/{{ $giay['hinh_anh_1'] }}"
                                        alt="..." class="img-fluid rounded-start" /></div>
                            @endif
                            @if ($giay['hinh_anh_3'])
                                <div class="col ripple"><img src="/storage/images/{{ $giay['hinh_anh_3'] }}" alt="..."
                                        class="img-fluid rounded-start" /></div>
                            @else <div class="col ripple"><img src="/storage/images/{{ $giay['hinh_anh_1'] }}"
                                        alt="..." class="img-fluid rounded-start" /></div>
                            @endif
                            @if ($giay['hinh_anh_4'])
                                <div class="col ripple"><img src="/storage/images/{{ $giay['hinh_anh_4'] }}" alt="..."
                                        class="img-fluid rounded-start" /></div>
                            @else <div class="col ripple"><img src="/storage/images/{{ $giay['hinh_anh_1'] }}"
                                        alt="..." class="img-fluid rounded-start" /></div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="float-end">
                                <script>
                                    $(function() {
                                        $("#RateDanhGia").rateYo({
                                            starWidth: "20px",
                                            ratedFill: "#16B5EA",
                                            rating: {{ $soluongdanhgia['danh_gia'] }},
                                            readOnly: true,
                                        });
                                    });
                                </script>

                                <small class="text-muted float-end">( {{ $soluongdanhgia['count_danh_gia'] }} Đánh giá
                                    )</small>
                                <div id="RateDanhGia" class="float-end text-info"></div>
                            </div>
                            <h3 class="card-title" style="text-transform: uppercase;">{{ $giay['ten_giay'] }}</h3>

                            <h4 class="card-text text-success">
                                @if ($km = 0)@endif
                                @foreach ($khuyenmais as $khuyenmai)
                                    @if ($khuyenmai['ten_khuyen_mai'] == $giay['ten_khuyen_mai'])
                                        @php $km = sprintf('%d', $giay['don_gia'] * 0.01 * $khuyenmai['gia_tri_khuyen_mai']) @endphp
                                        @if ($gtkm = $khuyenmai['gia_tri_khuyen_mai'])@endif
                                    @endif
                                @endforeach

                                <b>{{ number_format($giay['don_gia'] - $km, 0, ',', ',') }} VNĐ</b>
                                @if ($km != 0)<del class="card-text text-danger">{{ number_format($giay['don_gia'], 0, ',', ',') }} VNĐ</del>@endif
                            </h4>

                            <br>
                            <p class="card-text"><b>Mô tả:</b>{!! $giay['mo_ta'] !!}</p>
                            <p class="card-text"><b>Loại giày:</b> {{ $giay['ten_loai_giay'] }}&emsp;<i
                                    class="fab fa-squarespace"></i>&emsp; <b>Thương hiệu:</b>
                                {{ $giay['ten_thuong_hieu'] }}
                            </p>

                            <p class="card-text">
                                <small class="text-muted"></small>
                            </p>


                            <a href="/cua-hang/san-pham={{ $giay['id_giay'] }}/them" type="button" class="btn btn-info"
                                style="margin-top: 10px"
                                data-url="{{ route('them-vao-gio-hang', ['id' => $giay['id_giay']]) }}">
                                <i class="far fa-heart"></i>
                                &ensp;Thêm vào giỏ hàng
                            </a>
                            <a type="button" href="#ex2-tabs-1" class="btn btn-light">Chi tiết</a>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="card mb-3">
                <!-- Tabs navs -->
                <div class="container">
                    <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#ex2-tabs-1" role="tab"
                                aria-controls="ex2-tabs-1" aria-selected="true">Mô tả sản phẩm</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#ex2-tabs-2" role="tab"
                                aria-controls="ex2-tabs-2" aria-selected="false">Chi tiết sản phẩm</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#ex2-tabs-3" role="tab"
                                aria-controls="ex2-tabs-3" aria-selected="false">Đánh giá</a>
                        </li>
                    </ul>
                    <!-- Tabs navs -->

                    <!-- Tabs content -->

                    <div class="tab-content" id="ex2-content">
                        <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
                            <br>
                            {!! $giay['mo_ta'] !!}<br>
                            <p><b>Ngày ra mắt: </b>Ngày 11 tháng 11 năm 2021</p>
                            <p><b>Thiết kế: </b>Yeezy 350</p>
                            <p><b>Mã sản phẩm: </b>{{ $giay['id_giay'] }}</p>
                            <br>
                        </div>
                        <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
                            <br>
                            <p>✔️ <b>Mã giày: </b>{{ $giay['id_giay'] }}</p>
                            <p>✔️ <b>Tên giày: </b>{{ $giay['ten_giay'] }}</p>
                            <p>✔️ <b>Loại giày: </b>{{ $giay['ten_loai_giay'] }}</p>
                            <p>✔️ <b>Thương hiệu: </b>{{ $giay['ten_thuong_hieu'] }}</p>
                            <p>✔️ <b>Giá gốc: </b>{{ number_format($giay['don_gia']) }} VNĐ</p>
                            <p>✔️ <b>Số lượng còn lại: </b>{{ $giay['so_luong'] }}</p>
                            <p>✔️ <b>Khuyến mãi: </b>{{ $giay['ten_khuyen_mai'] }} (-{{ $gtkm }}%)</p>
                            <p>✔️ <b>Đánh giá: </b>{{ $giay['danh_gia'] }}</p>
                            <br>
                        </div>
                        <div class="tab-pane fade" id="ex2-tabs-3" role="tabpanel" aria-labelledby="ex2-tab-3">
                            @php
                                $checkk = 0;
                            @endphp


                            <div class="row">

                                <div class="col-md-6">
                                    <br>
                                    <h5 class="card-title" style="margin-bottom:20px">ĐÁNH GIÁ</h5>

                                    @foreach ($danhgias as $danhgia)
                                        @if ($danhgia->id_user > 4)
                                            @php
                                                $ok = rand(1, 4);
                                            @endphp
                                        @else
                                            @php
                                                $ok = $danhgia->id_user;
                                            @endphp
                                        @endif

                                        <div class="row">
                                            <div class="col-1">
                                                <img class="img-profile rounded-circle" height="40" width="40"
                                                    src="/images1/logo-user-{{ $ok-1 }}.png">
                                            </div>
                                            <div class="col-10">
                                                <small>{{ $danhgia->ten_danh_gia }}</small>
                                                <small class="float-end">{{ $danhgia->updated_at }}</small>
                                                <br>
                                                <p>{{ $danhgia->danh_gia_binh_luan }}</p>
                                            </div>
                                        </div>

                                    @endforeach

                                    <div class="pagination pagination-circle justify-content-end">
                                        <center>{{ $danhgias->links() }}</center>
                                    </div>

                                    {{-- <div id="fb-root"></div>
                                            <div class="fb-comments"
                                                data-href="https://dxdbloger.000webhostapp.com?act=detail&id=3"
                                                data-width="" data-numposts="5"></div> --}}
                                </div>
                                @foreach ($danh_gias as $id => $danh_gia)
                                    @if ($danh_gia['ten_giay'] == $giay['ten_giay'])
                                        @php $checkk = 1; @endphp
                                    @endif
                                @endforeach
                                {{-- <center> --}}
                                @if ($checkk == 1)
                                    <div class="col-md-6">
                                        <br>
                                        <h5 class="float-start">ĐÁNH GIÁ SẢN PHẨM NÀY</h5>

                                        <div id="rateYo" class=" float-end text-info"></div><br><br>
                                        <form action="/cua-hang/san-pham={{ $giay['id_giay'] }}/danh-gia" method="POST">
                                            @csrf
                                            <input type="hidden" class="form-control" name="danh_gia" id="danh_gia"
                                                value="4.5">
                                            <input type="hidden" class="form-control" name="id_user"
                                                value="{{ $data['id'] }}">
                                            <input type="hidden" class="form-control" name="id_giay"
                                                value="{{ $giay['id_giay'] }}">

                                            <div class="form-outline mb-4">
                                                <input type="input" class="form-control" name="ten_danh_gia" required
                                                    value="{{ $data['ten_nguoi_dung'] }}" />
                                                <label class="form-label">Tên</label>
                                            </div>
                                            <div class="form-outline">
                                                <textarea class="form-control" name="danh_gia_binh_luan"
                                                    rows="4"></textarea>
                                                <label class="form-label">Bình luận đánh giá</label>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-info float-end">Gửi đánh giá</button>
                                        </form>

                                    </div>
                                @endif
                                {{-- </center> --}}

                                @if ($checkk == 0)
                                    <div class="col-md-6">
                                        <br><br>
                                        <center>
                                            <p class="text-danger">Bạn cần mua sản phẩm này mới có thể đánh giá!</p>
                                        </center>
                                        <br>
                                    </div>
                                @endif

                            </div>
                            <br>



                        </div>
                    </div>
                    <!-- Tabs content -->
                </div>
            </div>
        </div>

        <br>
        <div class="card mb-3 shadow-1">
            <div class="card-body" style="margin-top:40px">
                <center>
                    <h3 class="card-title" style="text-transform: uppercase;">SẢN PHẨM TƯƠNG TỰ</h3>
                </center>
            </div>
            <br>
        </div>
        <br>
        <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        @if ($dem = 1)@endif
                        @foreach ($giaytuongtus as $giaytuongtu)
                            @if ($dem < 5)
                                <div class="col-md-3">
                                    <div class="card" style="margin-bottom: 25px">
                                        <a href="/cua-hang/san-pham={{ $giaytuongtu->id_giay }}">
                                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                                <center><img src="/storage/images/{{ $giaytuongtu->hinh_anh_1 }}"
                                                        class="img-fluid" style="height:306px; width:306px" /></center>
                                                <div class="mask"
                                                    style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                            </div>
                                            <div class="card-body">
                                                <center>
                                                    <h4 class="card-title">{{ $giaytuongtu->ten_giay }}</h4>
                                                    <p class="card-text text-success">
                                                        @if ($km = 0)@endif
                                                        @foreach ($khuyenmais as $khuyenmai)
                                                            @if ($khuyenmai['ten_khuyen_mai'] == $giaytuongtu->ten_khuyen_mai)
                                                                @if ($km = sprintf('%d', $giaytuongtu->don_gia * 0.01 * $khuyenmai['gia_tri_khuyen_mai']))@endif
                                                            @endif
                                                        @endforeach

                                                        <b>{{ number_format($giaytuongtu->don_gia - $km, 0, ',', ',') }}
                                                            VNĐ</b>
                                                        <del class="card-text text-danger">{{ number_format($giaytuongtu->don_gia, 0, ',', ',') }}
                                                            VNĐ </del>
                                                    </p>
                                                </center>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @if ($dem = $dem + 1)@endif
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        @if ($dem = 1)@endif
                        @foreach ($giaytuongtus as $giaytuongtu)
                            @if ($dem < 5 && $giaytuongtu->id_giay > 5)
                                <div class="col-md-3">
                                    <div class="card" style="margin-bottom: 25px">
                                        <a href="/cua-hang/san-pham={{ $giaytuongtu->id_giay }}">
                                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                                <center><img src="/storage/images/{{ $giaytuongtu->hinh_anh_1 }}"
                                                        class="img-fluid" style="height:306px; width:306px" />
                                                </center>
                                                <div class="mask"
                                                    style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                            </div>
                                            <div class="card-body">
                                                <center>
                                                    <h4 class="card-title">{{ $giaytuongtu->ten_giay }}</h4>
                                                    <p class="card-text text-success">
                                                        @if ($km = 0)@endif
                                                        @foreach ($khuyenmais as $khuyenmai)
                                                            @if ($khuyenmai['ten_khuyen_mai'] == $giaytuongtu->ten_khuyen_mai)
                                                                @if ($km = sprintf('%d', $giaytuongtu->don_gia * 0.01 * $khuyenmai['gia_tri_khuyen_mai']))@endif
                                                            @endif
                                                        @endforeach

                                                        <b>{{ number_format($giaytuongtu->don_gia - $km, 0, ',', ',') }}
                                                            VNĐ</b>
                                                        <del class="card-text text-danger">{{ number_format($giaytuongtu->don_gia, 0, ',', ',') }}
                                                            VNĐ </del>
                                                    </p>
                                                </center>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @if ($dem = $dem + 1)@endif
                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        @if ($dem = 1)@endif
                        @foreach ($giaytuongtus as $giaytuongtu)
                            @if ($dem < 5 && $giaytuongtu->id_giay > 9)
                                <div class="col-md-3">
                                    <div class="card" style="margin-bottom: 25px">
                                        <a href="/cua-hang/san-pham={{ $giaytuongtu->id_giay }}">
                                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                                <center><img src="/storage/images/{{ $giaytuongtu->hinh_anh_1 }}"
                                                        class="img-fluid" style="height:306px; width:306px" />
                                                </center>
                                                <div class="mask"
                                                    style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                            </div>
                                            <div class="card-body">
                                                <center>
                                                    <h4 class="card-title">{{ $giaytuongtu->ten_giay }}</h4>
                                                    <p class="card-text text-success">
                                                        @if ($km = 0)@endif
                                                        @foreach ($khuyenmais as $khuyenmai)
                                                            @if ($khuyenmai['ten_khuyen_mai'] == $giaytuongtu->ten_khuyen_mai)
                                                                @if ($km = sprintf('%d', $giaytuongtu->don_gia * 0.01 * $khuyenmai['gia_tri_khuyen_mai']))@endif
                                                            @endif
                                                        @endforeach

                                                        <b>{{ number_format($giaytuongtu->don_gia - $km) }} VNĐ</b>
                                                        <del class="card-text text-danger">{{ number_format($giaytuongtu->don_gia) }}
                                                            VNĐ </del>
                                                    </p>
                                                </center>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @if ($dem = $dem + 1)@endif
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
                data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
                data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>


    </div>

    <br>

@endsection
