<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PVB SHOP | Đăng nhập</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ URL('images1/icon-logo.png') }}">
	

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
</head>

<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">

                            <div class="col-md-10 col-lg-7 col-xl-7 d-flex align-items-center order-1 order-lg-1">
                                <div class="text-center">
                                  <a href="/"><img src="{{ URL('images1/logo-black.png') }}"></a>
                                  <!-- <h4 >Restaurant Manager</h4> -->

                                  <img src="{{ URL('images1/login.png') }}" class="img-fluid" alt="Sample image">
                                  <p class="mt-1 mb-2 pb-1">Chúng tôi giúp bạn mua sắm đôi giày mình yêu thích.</p>
                              </div>    

                          </div>

                          <div class="col-md-10 col-lg-5 col-xl-5 order-2 order-lg-2">
                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng nhập</p>

                            <form class="mx-1 mx-md-4" method="POST" action="{{ route('app.dashboard') }}"> 
                                <p>Hãy đăng nhập vào tài khoản của bạn:</p>
                                @csrf
                                <br>
                                @if (Session::get('thatbai'))
                                    <p class="text-danger">{{ Session::get('thatbai') }}</p>
                                @endif
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <div class="form-outline flex-fill mb-0">
                                        <!-- <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus/>
                                        <label class="form-label" for="email">Email</label> -->

                                        <input class="form-control" id="auth" type="text" name="ten_dang_nhap" value="{{ old('ten_dang_nhap') }}" required autofocus/>
                                        <label class="form-label" for="auth">Tên đăng nhập hoặc email</label>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-4">
                                    <div class="form-outline flex-fill mb-0">
                                        <input class="form-control" id="password" type="password" name="password" required autocomplete="current-password"/>
                                        <label class="form-label" for="password">Mật khẩu</label>

                                    </div>
                                </div>

                                <div class="col d-flex">
                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="remember_me"/>
                                        <label class="form-check-label" for="remember_me"> 
                                            Ghi nhớ tài khoản
                                        </label>
                                    </div>
                                </div>

                                <div class="text-center pt-1 mb-5 pb-1">
                                    <button class="btn btn-primary btn-lg  btn-block fa-lg gradient-custom-2 mb-3" type="submit">Đăng nhập</button>
                                    <a class="text-muted" href="">Quên mật khẩu?</a>
                                </div>

                                <div class="d-flex align-items-center justify-content-center pb-4">
                                    <p class="mb-0 me-2">Chưa có tài khoản?</p>
                                    <a href="{{ route('auth.register') }}" type="button" class="btn btn-outline-danger">Đăng ký</a>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

</html>