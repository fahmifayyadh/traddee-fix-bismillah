@extends('layouts.guest')
@section('title', 'HOME | Traddee.com')
@section('content')


    <div class="boxHeaderHome">
        <!-- iklan slide show -->
        <div id="demo" class="carousel slide" data-ride="carousel">


            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src='assets/images/bgheader1.jpg' class="imgSlide">

                </div>
                <div class="carousel-item">
                    <img src='assets/images/bgheader2.jpg' class="imgSlide">
                </div>
                <div class="carousel-item">
                    <img src='assets/images/bgheader3.jpg' class="imgSlide">
                </div>
            </div>


            <a class="carousel-control-prev" href="#demo" data-slide="prev">

            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">

            </a>
        </div>

        <!-- tutup iklan slide show -->

        <!-- txt Slide Show -->

        <div class="container-fluid">
            <div class="textSlider">
                <p class="txtSlide1">Traddee.com</p>
                <p class="txtSlide2">Cari Toko Offline di Online</p>
            </div>

        </div>
        <!-- / txt Slide Show -->
    </div>



    </br>
    </br>
    <div class="boxmainhome">

        <!-- Katergori  -->
        <div class="container-fluid">
            <h3 class="TxtH">Kategori</h3>
            <div class="card">
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach($category as $ctgr)
                            <div class="col-3">
                                <center>
                                    <a href="{{ url('/'.$ctgr->slug) }}">
                                        <img src='assets/icon/013-shop.png' class="imgKT"></br>
                                        <div class="txtKT">{{ $ctgr->name }}</div>
                                    </a>
                                </center>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tutup kategori -->
        </br>
        </br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-9">

                    <!-- iklan Slide Show -->
                    <div id="demo" class="carousel slide" data-ride="carousel">


                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <div class="carousel-inner">
                            @foreach($ads->where('category', 'slideshow user') as $slide)
                                <div class="carousel-item active">
                                    @if(empty($slide->image))
                                        <img src="{{ asset('assets/images/empty.jpg') }}" class="ImgSlideUser">
                                    @else
                                        <img src="{{ asset(Storage::url($slide->image)) }}" class="ImgSlideUser">
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        <a class="carousel-control-prev" href="#demo" data-slide="prev"></a>
                        <a class="carousel-control-next" href="#demo" data-slide="next"></a>

                    </div>
                </div>
                <!-- iklan -->
                <div class="col-3">
                    @foreach($ads->where('category', 'ads home user') as $usr)
                        <div class="boxIklan">
                            @if(empty($usr->image))
                                <img src="{{ asset('assets/images/empty.jpg') }}" alt=""
                                     style="width: 100%; height: 100%; object-fit: cover">
                            @else
                                <img src="{{ asset(Storage::url($usr->image)) }}" alt=""
                                     style="width: 100%; height: 100%; object-fit: cover">
                            @endif
                            {{--                        <label>Iklan dari Admin berdasarkan toko yang bayar iklan</label>--}}
                        </div>
                        <br>
                    @endforeach

                </div>
                <!-- /iklan -->
                <!-- /iklan slide show -->
                </br>
                <!-- rekomendasi -->
                <div class="container-fluid"></br>
                    <h3 class="TxtH">Rekomendasi</h3>
                    <hr/>
                    <div class="container-fluid">

                        <div class="row">
                            @foreach($rekom as $toko)
                                <div class="col-3">
                                    <center>
                                        @if(empty($toko->image))
                                            <img src='assets/images/iklan1.jpg' id="imgTokoMain"
                                                 class="img-thumbnail btn btn-light" data-toggle="modal"
                                                 data-target="#myModalbarang">
                                        @else
                                            <img src='assets/images/iklan1.jpg' id="imgTokoMain"
                                                 class="img-thumbnail btn btn-light" data-toggle="modal"
                                                 data-target="#myModalbarang">
                                        @endif

                                        {{--                                            </br>--}}
                                        <p class="txtTokoMain"> {{ $toko->merchant_name }}</p>
                                    </center>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /rekomendasi -->


                    </br>
                    <!-- Toko -->
                    <h3 class="TxtH">Toko</h3>
                    <hr/>

                    <div class="container-fluid">

                        <div class="row">
                            @foreach($store as $toko)
                                <div class="col-3">
                                    <center>
                                        @if(empty($toko->image))
                                            <img src='assets/images/iklan1.jpg' id="imgTokoMain"
                                                 class="img-thumbnail btn btn-light" data-toggle="modal"
                                                 data-target="#myModalbarang">
                                        @else
                                            <img src='assets/images/iklan1.jpg' id="imgTokoMain"
                                                 class="img-thumbnail btn btn-light" data-toggle="modal"
                                                 data-target="#myModalbarang">
                                            @endif

{{--                                            </br>--}}
                                            <p class="txtTokoMain"> {{ $toko->merchant_name }}</p>
                                    </center>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /Toko -->

                </div>

            </div>


            </br>

@endsection
