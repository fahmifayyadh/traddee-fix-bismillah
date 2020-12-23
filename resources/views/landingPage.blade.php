<!DOCTYPE html>
<html lang="en">
<head>
    <title>Treddee.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/userStyle.css">
</head>
<body>


<!-- The Modal Main -->
<div class="modal fade" id="login">
    <div class="modal-dialog ">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h1>Login</h1>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            <a href="{{route('regist.toko')}}" class="txtLdNav">Buka Toko</a>

{{--                            @if (Route::has('password.request'))--}}
{{--                                <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                    {{ __('Forgot Your Password?') }}--}}
{{--                                </a>--}}
{{--                            @endif--}}
                        </div>
                    </div>
                </form>
            </div>



        </div>
    </div>
</div>

<section>
    <!-- Header Text -->
    <div class="boxLanding">

        <div class="textLanding1">
            <center><font face="Tahoma" color="white" >Selamat datang di</font></center>
        </div>
        <div class="textLanding2">
            <center><img src = 'assets/images/logo.png' class="imglogoLanding"> <font face="Tahoma" color="white" >Traddee.com</font></center>

        </div>
        <div class="container">

            <div class="start">
                <button type="button" class="btn btn-link">
                    <a href="{{ url('/index') }}">
                        <center><font face="Tahoma" color="#10375d" size="5px" class="ljt">Lanjutkan</font></center>
                    </a>
                </button>
            </div>
        </div>
    </div>
    <!-- tutup Header Text -->

    <!-- Card -->
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="txtNavLand">
                        <center><a href="#">
                                <img src = 'assets/icon/013-shop.png' class="imgNavLand btn btn-light" data-toggle="modal" data-target="#login" ></br>
                                <p class="txtLdNav">Login Merchants</p></a>

                        </center>
                    </div>
                </div>

                <div class="col-4">
                    <div class="txtNavLand">
                        <center>
                            <img src = 'assets/icon/023-online store.png' class="imgNavLand  btn btn-light"></br>
                            Download Apps
                        </center>
                    </div>
                </div>


                <div class="col-4">
                    <div class="txtNavLand">
                        <center>
                            <a href="{{route('guest.help')}}">
                                <img src = 'assets/icon/041-customer service.png' class="imgNavLand  btn btn-light"></br>
                                <p class="txtLdNav"> Tentang Kami</p></a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tutup Card -->

</section>
<footer>
    <center><p>Kisah Kreatif | Copyright 2020 © All Rights Reserved</p></center>
</footer>

</body>
</html>



