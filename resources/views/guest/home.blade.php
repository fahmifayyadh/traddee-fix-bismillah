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
                            @foreach ($ads->where('category','slideshow user') as $index=> $slide)
                                @if ($loop->first)
                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                @else
                                    <li data-target="#demo" data-slide-to="{{$index+1}}"></li>
                                @endif
                            @endforeach
                        </ul>

                        <div class="carousel-inner">

                            @foreach ($ads->where('category','slideshow user') as $slide)
                                <div class="carousel-item active">
                                    @if(empty($slide->image))
                                        <img src="{{ asset('assets/images/empty.jpg') }}"
                                             class="ImgSlideUser">
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
                <!-- iklan slide show -->
                <!-- iklan -->
                <div class="col-3">
                    <div class="scrollIklan">
                        @foreach ($ads->where('category', 'ads home user') as $usr)
                            <div class="boxIklan">
                                @if(empty($usr->image))
                                    <img src="{{ asset('assets/images/empty.jpg') }}" alt=""
                                         style="width: 100%; height: 100%; object-fit: cover">
                                @else
                                    <img src="{{ asset(Storage::url($usr->image)) }}" alt=""
                                         style="width: 100%; height: 100%; object-fit: cover">
                                @endif
                                {{-- <label>Iklan dari Admin berdasarkan toko yang bayar iklan</label> --}}
                            </div>
                            <br>
                        @endforeach
                    </div>
                </div>
            {{--                @foreach ($ads->where('category', 'ads home user') as $usr)--}}
            {{--                    <div class="boxIklan">--}}
            {{--                        @if(empty($usr->image))--}}
            {{--                            <img src="{{ asset('assets/images/empty.jpg') }}" alt=""--}}
            {{--                                 style="width: 100%; height: 100%; object-fit: cover">--}}
            {{--                        @else--}}
            {{--                            <img src="{{ asset(Storage::url($usr->image)) }}" alt=""--}}
            {{--                                 style="width: 100%; height: 100%; object-fit: cover">--}}
            {{--                        @endif--}}
            {{--                        --}}{{-- <label>Iklan dari Admin berdasarkan toko yang bayar iklan</label> --}}
            {{--                    </div>--}}
            {{--                    <br>--}}
            {{--            @endforeach--}}
            <!-- /iklan -->


                </br>
                </br>
                <!-- rekomendasi -->
                <div class="container-fluid"></br>
                    <h3 class="TxtH">Rekomendasi</h3>
                    <hr/>
                    <div class="container-fluid">

                        <div class="row">
                            @foreach($rekom as $productrekom)
                                <div class="col-3">
                                    <center>
                                        @if(empty($productrekom->productImage->image))
                                            <img src='assets/images/iklan1.jpg' id="imgTokoMain"
                                                 class="img-thumbnail btn btn-light" data-toggle="modal"
                                                 data-target="#myModalbarang{{ $productrekom->id }}">
                                        @else
                                            <img
                                                src='{{ asset(Storage::url($productrekom->productImage->image->first())) }}'
                                                id="imgTokoMain"
                                                class="img-thumbnail btn btn-light" data-toggle="modal"
                                                data-target="#myModalbarang{{ $productrekom->id }}">
                                            @endif

                                            </br>
                                            <p class="txtTokoMain"> {{ $productrekom->name }}</p>
                                    </center>
                                </div>

                                {{--                                modal--}}
                            @endforeach
                            @foreach($rekom as $prdct)
                                <div class="modal fade" id="myModalbarang{{ $prdct->id }}">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">
                                                    &times;
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="container-fluid">

                                                    <!-- slideshow detail produk -->
                                                    <div id="demo" class="carousel slide" data-ride="carousel">
                                                        <ul class="carousel-indicators">
                                                            @foreach($prdct->productImage as $index=>$length)
                                                                <li data-target="#demo" data-slide-to="{{ $index }}"
                                                                    class="{{ $loop->first?'active':'' }}"></li>
                                                            @endforeach
                                                        </ul>

                                                        <div class="carousel-inner">
                                                            @foreach($prdct->productImage as $image)
                                                                <div
                                                                    class="carousel-item {{ $loop->first? 'active':'' }}">
                                                                    <img src='{{ asset(Storage::url($image->image)) }}'
                                                                         class="img-thumbnail"
                                                                         id="ImgPopUser">
                                                                </div>
                                                            @endforeach
                                                        </div>

                                                        <a class="carousel-control-prev" href="#demo"
                                                           data-slide="prev">
                                                            <span class="carousel-control-prev-icon"></span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#demo"
                                                           data-slide="next">
                                                            <span class="carousel-control-next-icon"></span>
                                                        </a>
                                                    </div>
                                                    <!-- /slideshow detail produk -->
                                                    </br>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h1 class="h1PopUser">{{ $prdct->name }}</h1>
                                                            <hr/>
                                                            <p class="PPopUser">Kategori
                                                                : {{ $prdct->category->name }}
                                                            </p>
                                                            <p class="PPopUser">
                                                                Sub Kategori
                                                                :
                                                                {{ $prdct->subCategory->name }}</p>
                                                            <p class="PPopUser">
                                                                Nama Toko :
                                                                {{ $prdct->ukm->merchant_name }}</p>
                                                            <p class="PPopUser">
                                                                Alamat Toko
                                                                :
                                                                {{ $prdct->ukm->address .' - '.$prdct->ukm->district.' - '. $prdct->ukm->city.' - '.$prdct->ukm->province }}
                                                            </p>
                                                            <p class="PPopUser">
                                                                Harga
                                                                : {{ $prdct->price }}</p>
                                                            <p class="PPopUser">
                                                                Deskripsi
                                                                Produk :
                                                                {{ $prdct->description }}</p>
                                                            <hr/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary">
                                                    <a href="{{ url('/merchant/'.$prdct->ukm->slug)}}">
                                                        <center>
                                                            <font face="Tahoma" color="white">Pergi ke
                                                                Toko</font>
                                                        </center>
                                                    </a>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
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
                            @foreach($store as $tokos)
                                <div class="col-3">
                                    <center>
                                        @if(empty($tokos->image))
                                            <a href="{{ url('merchant/'.$tokos->slug) }}">
                                                <img src='assets/images/iklan1.jpg' id="imgTokoMain"
                                                     class="img-thumbnail btn btn-light">
                                            </a>
                                        @else
                                            <a href="{{ url('merchant/'.$tokos->slug) }}">
                                                <img src='assets/images/iklan1.jpg' id="imgTokoMain"
                                                     class="img-thumbnail btn btn-light">
                                            </a>
                                            @endif

                                            </br>
                                            <p class="txtTokoMain"> {{ $tokos->merchant_name }}</p>
                                    </center>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /Toko -->

                </div>

            </div>


            </br>


    {{--        </div>--}}
    {{--    </div>--}}
@endsection
