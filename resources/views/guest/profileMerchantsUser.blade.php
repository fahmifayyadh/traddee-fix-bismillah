@extends('layouts.guest')
@section('title', 'MERCHANTS | '.$ukm->merchant_name.' | Traddee.com')
@section('content')

    <div class="boxHeaderProfileMerc">

        <!-- iklan slide show -->
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src='{{ asset('assets/images/aqilabg.jpg') }}' class="imgHeaderProfileMerc">
                </div>
            </div>

            <!-- tutup iklan slide show -->

            <!-- txt Slide Show -->

            <div class="container-fluid">
                <div class="ProfileHeader">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ asset('assets/images/user.png') }}" class="imgProfileMerc">
                        </div>

                        <div class="col-9">
                            <p class="txtProfileMerch1">TOKO {{$ukm->merchant_name}} {{ !empty($ukm->user->email_ferified_at)? ' | Verified' : '' }}</p>
                            <p class="txtProfileMerch2">ID : {{ $ukm->id}}</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- / txt Slide Show -->
        </div>

        <div class="boxMainProfileMerc">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="boxIklanToko">
                            Iklan dari Toko
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="boxIklanToko">
                            Iklan dari Toko
                        </div>
                    </div>

                </div>
                </br>
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="nav " role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#profil">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#produk">Produk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#chat">Chat</a>
                                </li>
                            </ul>
                        </div>
                </nav>


                <div class="tab-content">
                    <div id="profil" class="container tab-pane active"><br>
                        <p>Nama Toko : {{ $ukm->merchant_name }}</p>
                        <p>Id Toko : {{ $ukm->id }}</p>
                        <p>Alamat Toko
                            : {{ $ukm->address.' - '.$ukm->district.' - '.$ukm->city.' - '.$ukm->province }}</p>
                        <p>Nama Pemilik Toko : {{ $ukm->user->name }}</p>
                        <p>Link Iframe : </p>
                        <h3 class="txtLokMerch">Lokasi</h3>
                        <div class="container-fluid">
                            <center>
                                {!! $ukm->iframe !!}
                            </center>
                        </div>
                    </div>

                    <div id="produk" class="container tab-pane fade"><br>
                        <div class="row">

                            @foreach($ukm->product as $product)
                                <div class="col-3">
                                    <center>
                                        <img
                                            src='{{ empty($product->image)? asset('assets/images/iklan1.jpg') : asset(Storage::url($product->productImage->image->first())) }}'
                                            id="imgTokoMerch"
                                            class="img-thumbnail btn btn-light" data-toggle="modal"
                                            data-target="#myModalbarang{{ $product->id }}">
                                        <br>
                                        <p class="txtTokoMerc"> {{ $product->name }}</p>
                                    </center>
                                </div>

                                <div class="modal fade" id="myModalbarang{{ $product->id }}">
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
                                                            @foreach($product->productImage as $index=>$length)
                                                                <li data-target="#demo" data-slide-to="{{ $index }}"
                                                                    class="{{ $loop->first?'active':'' }}"></li>
                                                            @endforeach
                                                        </ul>


                                                        <div class="carousel-inner">
                                                            @foreach($product->productImage as $image)
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
                                                            <h1 class="h1PopUser">{{ $product->name }}</h1>
                                                            <hr/>
                                                            <p class="PPopUser">Kategori
                                                                : {{ $product->category->name }}
                                                            </p>
                                                            <p class="PPopUser">
                                                                Sub Kategori
                                                                :
                                                                {{ $product->subCategory->name }}</p>
                                                            <p class="PPopUser">
                                                                Nama Toko :
                                                                {{ $product->ukm->merchant_name }}</p>
                                                            <p class="PPopUser">
                                                                Alamat Toko
                                                                :
                                                                {{ $product->ukm->address .' - '.$product->ukm->district.' - '. $product->ukm->city.' - '.$product->ukm->province }}
                                                            </p>
                                                            <p class="PPopUser">
                                                                Harga
                                                                : {{ $product->price }}</p>
                                                            <p class="PPopUser">
                                                                Deskripsi
                                                                Produk :
                                                                {{ $product->description }}</p>
                                                            <hr/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success">
                                                    <a target="_blank"
                                                       href="{{ url('https://wa.me/'.$product->ukm->user->phone.'?text=Saya%20tertarik%20dengan%20product%20anda%20'.$product->name)}}">
                                                        <center>
                                                            <font face="Tahoma" color="white">Chat melalui
                                                                Whatsapp</font>
                                                        </center>
                                                    </a>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{--                        <div id="chat" class="container tab-pane fade"><br>--}}

                        {{--                            <div class="row">--}}
                        {{--                                <div class="col-6">--}}
                        {{--                                    <h1 class="txtChatMerch">Chat Via Wahtsapp</h1>--}}
                        {{--                                    <button type="button" class="btn btn-success">Chat</button>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="col-6">--}}
                        {{--                                    <h1 class="txtChatMerch">Chat disini</h1>--}}
                        {{--                                    <form action="#">--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <input type="text" class="form-control" id="namaUser" placeholder="Nama">--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <input type="text" class="form-control" id="noUser" placeholder="No Tlp">--}}
                        {{--                                        </div>--}}
                        {{--                                        <button type="submit" class="btn btn-success" data-toggle="modal"--}}
                        {{--                                                data-target="#modalChat">Chat--}}
                        {{--                                        </button>--}}
                        {{--                                    </form>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                        </div>--}}



                </div>
            </div>
        </div>

@endsection
