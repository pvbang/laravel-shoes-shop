<!-- <div class="card mb-3 shadow-5" style="background-color: #EEEEEE">
    <div class="card-body" style="margin-top:40px">
        <center>
            <h3 class="card-title" style="text-transform: uppercase;">NỘI DUNG</h3>
        </center>
    </div>
    <br>
</div> -->

<div class="container">
    <br>

    <div class="card mb-3 shadow-1">
        <div class="card-body" style="margin-top:40px">
            <center>
                <h3 class="card-title" style="text-transform: uppercase;">THƯƠNG HIỆU</h3>
            </center>
        </div>
        <br>
    </div>
    <!-- Tabs navs -->
    <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="ex3-tab-1" data-mdb-toggle="tab" href="#ex3-tabs-1" role="tab"
                aria-controls="ex3-tabs-1" aria-selected="true">Adidas</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex3-tab-2" data-mdb-toggle="tab" href="#ex3-tabs-2" role="tab"
                aria-controls="ex3-tabs-2" aria-selected="false">Nike</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex3-tab-3" data-mdb-toggle="tab" href="#ex3-tabs-3" role="tab"
                aria-controls="ex3-tabs-3" aria-selected="false">Converse</a>
        </li>
    </ul>
    <!-- Tabs navs -->

    <!-- Tabs content -->
    <div class="tab-content" id="ex2-content">
        <div class="tab-pane fade show active" id="ex3-tabs-1" role="tabpanel" aria-labelledby="ex3-tab-1">
            <div class="row">
                @if($dem = 1)@endif
                @foreach($giays as $giay)
                @if(($dem < 5) && ($giay['ten_thuong_hieu']=='Adidas' )) <div class="col-md-3">
                    <div class="card" style="margin-bottom: 25px">
                        <a href="/cua-hang/san-pham={{$giay['id_giay']}}">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" >
                                <center><img src="/storage/images/{{$giay->hinh_anh_1}}" class="img-fluid" style="height:306px; width:306px"/></center>
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                            <div class="card-body">
                                <center>
                                    <h4 class="card-title">{{$giay['ten_giay']}}</h4>
                                    <p class="card-text text-success">
                                        @if($km = 0)@endif
                                        @foreach($khuyenmais as $khuyenmai)
                                        @if($khuyenmai['ten_khuyen_mai'] == $giay['ten_khuyen_mai'])
                                        @if($km = sprintf('%d', $giay['don_gia'] * 0.01 *
                                        $khuyenmai['gia_tri_khuyen_mai']))@endif
                                        @endif
                                        @endforeach

                                        <b>{{number_format($giay['don_gia'] - $km, 0, ',', ',')}} VNĐ</b>
                                        <del class="card-text text-danger">{{number_format($giay['don_gia'], 0, ',', ',')}}
                                            VNĐ </del>
                                    </p>
                                </center>
                            </div>
                        </a>
                    </div>
            </div>
            @if($dem = $dem + 1)@endif
            @endif
            @endforeach
        </div>
    </div>

    <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">
        <div class="row">
            @if($dem = 1)@endif
            @foreach($giays as $giay)
            @if(($dem < 5) && ($giay['ten_thuong_hieu']=='Nike' )) <div class="col-md-3">
                <div class="card" style="margin-bottom: 25px">
                    <a href="/cua-hang/san-pham={{$giay['id_giay']}}">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" >
                            <center><img src="/storage/images/{{$giay->hinh_anh_1}}" class="img-fluid" style="height:306px; width:306px"/></center>
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </div>
                        <div class="card-body">
                            <center>
                                <h4 class="card-title">{{$giay['ten_giay']}}</h4>
                                <p class="card-text text-success">
                                    @if($km = 0)@endif
                                    @foreach($khuyenmais as $khuyenmai)
                                    @if($khuyenmai['ten_khuyen_mai'] == $giay['ten_khuyen_mai'])
                                    @if($km = sprintf('%d', $giay['don_gia'] * 0.01 *
                                    $khuyenmai['gia_tri_khuyen_mai']))@endif
                                    @endif
                                    @endforeach

                                    <b>{{number_format($giay['don_gia'] - $km, 0, ',', ',')}} VNĐ</b>
                                    <del class="card-text text-danger">{{number_format($giay['don_gia'], 0, ',', ',')}}
                                        VNĐ </del>
                                </p>
                            </center>
                        </div>
                    </a>
                </div>
        </div>
        @if($dem = $dem + 1)@endif
        @endif
        @endforeach
    </div>
</div>
<div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">
    <div class="row">
        @if($dem = 1)@endif
        @foreach($giays as $giay)
        @if(($dem < 5) && ($giay['ten_thuong_hieu']=='Converse' )) <div class="col-md-3">
            <div class="card" style="margin-bottom: 25px">
                <a href="/cua-hang/san-pham={{$giay['id_giay']}}">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <center><img src="/storage/images/{{$giay->hinh_anh_1}}" class="img-fluid" style="height:306px; width:306px"/></center>
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </div>
                    <div class="card-body">
                        <center>
                            <h4 class="card-title">{{$giay['ten_giay']}}</h4>
                            <p class="card-text text-success">
                                @if($km = 0)@endif
                                @foreach($khuyenmais as $khuyenmai)
                                @if($khuyenmai['ten_khuyen_mai'] == $giay['ten_khuyen_mai'])
                                @if($km = sprintf('%d', $giay['don_gia'] * 0.01 *
                                $khuyenmai['gia_tri_khuyen_mai']))@endif
                                @endif
                                @endforeach

                                <b>{{number_format($giay['don_gia'] - $km, 0, ',', ',')}} VNĐ</b>
                                <del class="card-text text-danger">{{number_format($giay['don_gia'], 0, ',', ',')}}
                                    VNĐ </del>
                            </p>
                        </center>
                    </div>
                </a>
            </div>
    </div>
    @if($dem = $dem + 1)@endif
    @endif
    @endforeach
</div>
</div>
</div>
<!-- Tabs content -->




<div class="card mb-3 shadow-1">
    <div class="card-body" style="margin-top:40px">
        <center>
            <h3 class="card-title" style="text-transform: uppercase;">GIÀY NỔI BẬT</h3>
        </center>
    </div>
    <br>
</div>

<div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                @if($dem = 1)@endif
                @foreach($giaynoibats as $giaynoibat)
                @if($dem < 5) <div class="col-md-3">
                    <div class="card" style="margin-bottom: 25px">
                        <a href="/cua-hang/san-pham={{$giaynoibat->id_giay}}">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" >
                                <center><img src="/storage/images/{{$giaynoibat->hinh_anh_1}}" class="img-fluid" style="height:306px; width:306px"/></center>
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                            <div class="card-body">
                                <center>
                                    <h4 class="card-title">{{$giaynoibat->ten_giay}}</h4>
                                    <p class="card-text text-success">
                                        @if($km = 0)@endif
                                        @foreach($khuyenmais as $khuyenmai)
                                        @if($khuyenmai['ten_khuyen_mai'] == $giaynoibat->ten_khuyen_mai)
                                        @if($km = sprintf('%d', $giaynoibat->don_gia * 0.01 *
                                        $khuyenmai['gia_tri_khuyen_mai']))@endif
                                        @endif
                                        @endforeach

                                        <b>{{number_format($giaynoibat->don_gia - $km, 0, ',', ',')}} VNĐ</b>
                                        <del class="card-text text-danger">{{number_format($giaynoibat->don_gia, 0, ',', ',')}}
                                            VNĐ </del>
                                    </p>
                                </center>
                            </div>
                        </a>
                    </div>
            </div>
            @if($dem = $dem + 1)@endif
            @endif
            @endforeach
        </div>
    </div>
    <div class="carousel-item">
        <div class="row">
            @if($dem = 1)@endif
            @foreach($giaynoibats as $giaynoibat)
            @if(($dem < 5) && ($giaynoibat->id_giay> 5))
                <div class="col-md-3">
                    <div class="card" style="margin-bottom: 25px">
                        <a href="/cua-hang/san-pham={{$giaynoibat->id_giay}}">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" >
                                <center><img src="/storage/images/{{$giaynoibat->hinh_anh_1}}" class="img-fluid" style="height:306px; width:306px"/></center>
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                            <div class="card-body">
                                <center>
                                    <h4 class="card-title">{{$giaynoibat->ten_giay}}</h4>
                                    <p class="card-text text-success">
                                        @if($km = 0)@endif
                                        @foreach($khuyenmais as $khuyenmai)
                                        @if($khuyenmai['ten_khuyen_mai'] == $giaynoibat->ten_khuyen_mai)
                                        @if($km = sprintf('%d', $giaynoibat->don_gia * 0.01 *
                                        $khuyenmai['gia_tri_khuyen_mai']))@endif
                                        @endif
                                        @endforeach

                                        <b>{{number_format($giaynoibat->don_gia - $km, 0, ',', ',')}} VNĐ</b>
                                        <del class="card-text text-danger">{{number_format($giaynoibat->don_gia, 0, ',', ',')}}
                                            VNĐ </del>
                                    </p>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
                @if($dem = $dem + 1)@endif
                @endif
                @endforeach

        </div>
    </div>
    <div class="carousel-item">
        <div class="row">
            @if($dem = 1)@endif
            @foreach($giaynoibats as $giaynoibat)
            @if(($dem < 5) && ($giaynoibat->id_giay> 9))
                <div class="col-md-3">
                    <div class="card" style="margin-bottom: 25px">
                        <a href="/cua-hang/san-pham={{$giaynoibat->id_giay}}">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" >
                                <center><img src="/storage/images/{{$giaynoibat->hinh_anh_1}}" class="img-fluid" style="height:306px; width:306px"/></center>
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                            <div class="card-body">
                                <center>
                                    <h4 class="card-title">{{$giaynoibat->ten_giay}}</h4>
                                    <p class="card-text text-success">
                                        @if($km = 0)@endif
                                        @foreach($khuyenmais as $khuyenmai)
                                        @if($khuyenmai['ten_khuyen_mai'] == $giaynoibat->ten_khuyen_mai)
                                        @if($km = sprintf('%d', $giaynoibat->don_gia * 0.01 *
                                        $khuyenmai['gia_tri_khuyen_mai']))@endif
                                        @endif
                                        @endforeach

                                        <b>{{number_format($giaynoibat->don_gia - $km, 0, ',', ',')}} VNĐ</b>
                                        <del class="card-text text-danger">{{number_format($giaynoibat->don_gia, 0, ',', ',')}}
                                            VNĐ </del>
                                    </p>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
                @if($dem = $dem + 1)@endif
                @endif
                @endforeach

        </div>
    </div>
</div>
<button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>

</div>



<div class="card mb-3 shadow-1">
    <div class="card-body" style="margin-top:40px">
        <center>
            <h3 class="card-title" style="text-transform: uppercase;">GIÀY MỚI NHẤT</h3>
        </center>
    </div>
    <br>
</div>

<div id="carouselExampleControls2" class="carousel slide" data-mdb-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                @if($dem = 1)@endif
                @foreach($giaymoinhats as $giaymoinhat)
                @if($dem < 5) <div class="col-md-3">
                    <div class="card" style="margin-bottom: 25px">
                        <a href="/cua-hang/san-pham={{$giaymoinhat->id_giay}}">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" >
                                <center><img src="/storage/images/{{$giaymoinhat->hinh_anh_1}}" class="img-fluid" style="height:306px; width:306px"/></center>
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                            <div class="card-body">
                                <center>
                                    <h4 class="card-title">{{$giaymoinhat->ten_giay}}</h4>
                                    <p class="card-text text-success">
                                        @if($km = 0)@endif
                                        @foreach($khuyenmais as $khuyenmai)
                                        @if($khuyenmai['ten_khuyen_mai'] == $giaymoinhat->ten_khuyen_mai)
                                        @if($km = sprintf('%d', $giaymoinhat->don_gia * 0.01 *
                                        $khuyenmai['gia_tri_khuyen_mai']))@endif
                                        @endif
                                        @endforeach

                                        <b>{{number_format($giaymoinhat->don_gia - $km, 0, ',', ',')}} VNĐ</b>
                                        <del class="card-text text-danger">{{number_format($giaymoinhat->don_gia, 0, ',', ',')}}
                                            VNĐ </del>
                                    </p>
                                </center>
                            </div>
                        </a>
                    </div>
            </div>
            @if($dem = $dem + 1)@endif
            @endif
            @endforeach
        </div>
    </div>
    <div class="carousel-item">
        <div class="row">
            @if($dem = 1)@endif
            @foreach($giaymoinhats as $giaymoinhat)
            @if(($dem < 5) && ($giaymoinhat->id_giay> 5))
                <div class="col-md-3">
                    <div class="card" style="margin-bottom: 25px">
                        <a href="/cua-hang/san-pham={{$giaymoinhat->id_giay}}">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" >
                                <center><img src="/storage/images/{{$giaymoinhat->hinh_anh_1}}" class="img-fluid" style="height:306px; width:306px"/></center>
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                            <div class="card-body">
                                <center>
                                    <h4 class="card-title">{{$giaymoinhat->ten_giay}}</h4>
                                    <p class="card-text text-success">
                                        @if($km = 0)@endif
                                        @foreach($khuyenmais as $khuyenmai)
                                        @if($khuyenmai['ten_khuyen_mai'] == $giaymoinhat->ten_khuyen_mai)
                                        @if($km = sprintf('%d', $giaymoinhat->don_gia * 0.01 *
                                        $khuyenmai['gia_tri_khuyen_mai']))@endif
                                        @endif
                                        @endforeach

                                        <b>{{number_format($giaymoinhat->don_gia - $km, 0, ',', ',')}} VNĐ</b>
                                        <del class="card-text text-danger">{{number_format($giaymoinhat->don_gia, 0, ',', ',')}}
                                            VNĐ </del>
                                    </p>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
                @if($dem = $dem + 1)@endif
                @endif
                @endforeach

        </div>
    </div>
    <div class="carousel-item">
        <div class="row">
            @if($dem = 1)@endif
            @foreach($giaymoinhats as $giaymoinhat)
            @if(($dem < 5) && ($giaymoinhat->id_giay> 9))
                <div class="col-md-3">
                    <div class="card" style="margin-bottom: 25px">
                        <a href="/cua-hang/san-pham={{$giaymoinhat->id_giay}}">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <center><img src="/storage/images/{{$giaymoinhat->hinh_anh_1}}" class="img-fluid" style="height:306px; width:306px"/></center>
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                            <div class="card-body">
                                <center>
                                    <h4 class="card-title">{{$giaymoinhat->ten_giay}}</h4>
                                    <p class="card-text text-success">
                                        @if($km = 0)@endif
                                        @foreach($khuyenmais as $khuyenmai)
                                        @if($khuyenmai['ten_khuyen_mai'] == $giaymoinhat->ten_khuyen_mai)
                                        @if($km = sprintf('%d', $giaymoinhat->don_gia * 0.01 *
                                        $khuyenmai['gia_tri_khuyen_mai']))@endif
                                        @endif
                                        @endforeach

                                        <b>{{number_format($giaymoinhat->don_gia - $km, 0, ',', ',')}} VNĐ</b>
                                        <del class="card-text text-danger">{{number_format($giaymoinhat->don_gia, 0, ',', ',')}}
                                            VNĐ </del>
                                    </p>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
                @if($dem = $dem + 1)@endif
                @endif
                @endforeach

        </div>
    </div>
</div>
<button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls2" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls2" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>

</div>



<br>
<br>


</div>