<!-- Header -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PVB SHOP</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL('images1/icon-logo.png') }}">

    <!-- Link -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />

    <!-- Link -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <script src="{{ URL('js/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <!-- Custom CSS -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0"
        nonce="gCULMMol">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <!-- Custom CSS -->

    <style>
        #myBtn {
          display: none;
          position: fixed;
          bottom: 20px;
          right: 20px;
          z-index: 99;
          border: none;
          outline: none;
          cursor: pointer;
          border-radius: 100%;
          background-color: #FBFBFB;
          padding: 5px
        }
        
        #myBtn:hover {
          background-color: #16B5EA;
        }
    </style>
        

</head>

<body style="padding: 0; margin: 0;">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="{{ URL('images1/scroll-top.png') }}" height="40"></button>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand me-2" href="/"><img src="{{ URL('images1/logo.png') }}" height="35" alt="PVB SHOP"
                    loading="lazy"></a>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <form action="/tim-kiem" method="POST"
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    @csrf
                    <div class="input-group" style="width:170px;">
                        <input type="text" class="form-control bg-light border-0 small" name="tim_kiem"
                            placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <form action="/tim-kiem" method="POST" class="form-inline mr-auto w-100 navbar-search">
                            @csrf
                            <div class="input-group" style="width:170px; margin-top:7px">
                                <input type="text" class="form-control bg-light border-0 small" name="tim_kiem"
                                    placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </ul>

            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtons"
                aria-controls="navbarButtons" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarButtons">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

                <div class="d-flex align-items-center float-right">
                    <a href="/"><button type="button" class="btn btn-link px-3 me-2">TRANG CHỦ</button></a>
                    <a href="/cua-hang"><button type="button" class="btn btn-link px-3 me-2">CỬA HÀNG</button></a>
                    <a href="/gioi-thieu"><button type="button" class="btn btn-link px-3 me-2">GIỚI
                            THIỆU</button></a>
                    <a href="/thanh-toan"><button type="button" class="btn btn-link px-3 me-2">THANH
                            TOÁN</button></a>
                    <a href="/gio-hang" data-mdb-toggle="tooltip" data-mdb-placement="bottom"
                        title="Giỏ hàng của bạn"><i class="fas fa-shopping-cart"></i></a>&emsp;&nbsp;
                    {{-- @if (Route::has('login'))
						@auth
							<div class="dropdown">
								<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                                    @if (session()->get(key: 'check') == 1)
                                        Quản trị viên
									@else 
                                        Khách hàng 
                                    @endif
								</button>
								
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <li><a class="dropdown-item" href="/tai-khoan">Tài khoản</a></li>
                                        <li><a class="dropdown-item" href="/auth/logoff">Đăng xuất</a></li>
                                        @if (session()->get(key: 'check') == 1)
                                          <li><a class="dropdown-item" href="/admin">Trang Quản lý</a></li>
                                        @endif
                                    </form>
                                </ul>
                            </div>
                <!-- <a href="{{ url('/RestaurantManager/User/trangchu') }}" class="btn btn-primary btn-rounded">CỬA HÀNG CỦA BẠN</a> -->
                        @else
                            <a class="btn btn-outline-primary btn-rounded" href="{{ route('auth.login') }}">ĐĂNG NHẬP</a>
                            &ensp;
                            @if (Route::has('register'))
                                <a class="btn btn-primary btn-rounded" href="{{ route('auth.register') }}">ĐĂNG KÝ MIỄN PHÍ</a>
                            @endif
                        @endauth
                    @endif --}}

                    {{-- <a class="btn btn-outline-primary btn-rounded" href="{{ route('auth.login') }}">ĐĂNG NHẬP</a>
                    &ensp;
                <a class="btn btn-primary btn-rounded" href="{{ route('auth.register') }}">ĐĂNG KÝ MIỄN PHÍ</a> --}}

                    @if (Session::get('DangNhap'))
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-mdb-toggle="dropdown" aria-expanded="false">
                                @if (session()->get(key: 'check') == 1)
                                    Quản trị viên
                                @else
                                    Khách hàng
                                @endif
                            </button>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <li><a class="dropdown-item" href="/tai-khoan">Tài khoản</a></li>
                                    <li><a class="dropdown-item" href="/auth/logoff">Đăng xuất</a></li>
                                    @if (session()->get(key: 'check') == 1)
                                        <li><a class="dropdown-item" href="/admin">Trang Quản lý</a></li>
                                    @endif
                                </form>
                            </ul>
                        </div>
                        <!-- <a href="{{ url('/RestaurantManager/User/trangchu') }}" class="btn btn-primary btn-rounded">CỬA HÀNG CỦA BẠN</a> -->
                    @else
                        <a class="btn btn-outline-primary btn-rounded" href="{{ route('auth.login') }}">ĐĂNG
                            NHẬP</a>
                        &ensp;
                        <a class="btn btn-primary btn-rounded" href="{{ route('auth.register') }}">ĐĂNG KÝ MIỄN
                            PHÍ</a>
                    @endif

                </div>

            </div>
    </nav>
    <!-- Header -->


    <!-- Content -->

    @yield('content')

    <!-- Content -->


    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <section class="border-top">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4"> Liên hệ </h6>
                        <p><i class="fas fa-home me-3"></i> Thừa Thiên - Huế, Việt Nam</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            shoesshop2309@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +84 964196652</p>
                    </div>

                    <div class="col-md-3 col-lg-4 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Tài khoản</h6>

                        <p><a href="{{ route('auth.register') }}" class="text-reset"><i
                                    class="fas fa-angle-right"></i>&nbsp;Đăng ký</a></p>
                        <p><a href="{{ route('auth.login') }}" class="text-reset"><i
                                    class="fas fa-angle-right"></i>&nbsp;Đăng nhập</a></p>

                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Danh mục
                        </h6>

                        <p><a href="/cua-hang" class="text-reset"><i class="fas fa-angle-right"></i>&nbsp;Cửa
                                hàng</a>
                        </p>
                        <p><a href="/gioi-thieu" class="text-reset"><i class="fas fa-angle-right"></i>&nbsp;Giới
                                thiệu</a></p>
                        <p><a href="/thanh-toan" class="text-reset"><i class="fas fa-angle-right"></i>&nbsp;Thanh
                                toán</a></p>

                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Mạng xã hội
                        </h6>

                        <a href="https://www.facebook.com/IT0902/" class="me-4 text-reset">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.facebook.com/IT0902/" class="me-4 text-reset">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/IT0902/" class="me-4 text-reset">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="https://www.facebook.com/IT0902/" class="me-4 text-reset">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class=" justify-content-center justify-content-lg-between p-4 border-top"
            style="background-color: #757575;">
            <div class="text-center me-5 d-none d-lg-block">
                <span class="text-center text-white">© 2021 Bản quyền thuộc về:
                    <a class="text-white" href="/">&ensp;PVB SHOP - Phan Văn Bằng</a>
                </span>
            </div>
        </section>
    </footer>
    <!-- Footer -->


    <!-- Scripts -->
    <script>
        $(function() {

            $("#rateYo").rateYo({
                starWidth: "30px",
                rating: "4.5",
                multiColor: {
                    "startColor": "#b0e4f5", 
                    "endColor"  : "#16B5EA"  
                }
            }).on("rateyo.set", function (e, data) {
                $('#danh_gia').val(data.rating);
            });

        });


        var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
        var alertTrigger = document.getElementById('liveAlertBtn')

        function alert(message, type) {
        var wrapper = document.createElement('div')
        wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

        alertPlaceholder.append(wrapper)
        }

        if (alertTrigger) {
        alertTrigger.addEventListener('click', function () {
            alert('Nice, you triggered this alert message!', 'success')
        })
        }
    </script>

    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script src="{{ URL('js/bootstrap.bundle.min.js') }}"></script>
    <!-- Scripts -->
</body>

</html>
