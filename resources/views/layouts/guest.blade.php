<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/userStyle.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


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

<!-- Tmodal Chat -->
<div class="modal fade" id="modalChat">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <h3>Chat Disini</h3><hr/>
            </div>



        </div>
    </div>
</div>
<!-- / Modal chat -->
<!-- modal barang -->
{{-- <div class="modal fade" id="myModalbarang">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">

                    <!-- slideshow detail produk -->
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src = 'assets/images/iklan1.jpg'  class="img-thumbnail" id="ImgPopUser">
                            </div>
                            <div class="carousel-item">
                                <img src = 'assets/images/iklan2.jpg'  class="img-thumbnail" id="ImgPopUser">
                            </div>
                            <div class="carousel-item">
                                <img src = 'assets/images/iklan1.jpg'  class="img-thumbnail" id="ImgPopUser">
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                    <!-- /slideshow detail produk -->
                    </br>
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h1PopUser">Nama Produk</h1>
                            <hr/>
                            <p class="PPopUser">Kategori : </p>
                            <p class="PPopUser">Sub Kategori :</p>
                            <p class="PPopUser">Nama Toko : </p>
                            <p class="PPopUser">Alamat Toko :</p>
                            <p class="PPopUser">Harga :</p>
                            <p class="PPopUser">Deskripsi Produk : </p>
                            <hr/>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-primary">
                    <a href="ProfileMerchantsUser">
                        <center><font face="Tahoma" color="white" >Pergi ke Toko</font></center>
                    </a>
                </button>
            </div>

        </div>
    </div>
</div> --}}
<!-- / Modal barang -->


<!-- Header -->
<nav class="fixed-top">
    <div class="boxHeader">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-3">
                <a class="txtLogo" href="{{ url('/index') }}"><img src = "{{ asset('assets/images/logo.png') }}" class="imglogoHeader"> <font face="Tahoma" color="white" class="HdText" >Traddee.com</font> </a>
                </div>
                <div class="col-6">
                    <form class="form" action="">
                        <div class="input-group mb-3" id="Src">
                            <input type="text" class="form-control" placeholder="Cari Toko di Traddee">
                            <div class="input-group-append">
                                <span class="btn bg-warning">Search</span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-3">
                <a href=/bantuan class="btn btn-link">Bantuan</a> <a href="/bantuan" class="btn btn-link disabled">Download APK</a> <a data-toggle="modal" data-target="#login" class="btn btn-warning btn-end">Login</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- /header -->


@yield('content')

<center><p id="footer">Kisah Kreatif | Copyright 2020 © All Rights Reserved</p></center>


</body>
</html>


