@extends('layouts.guest')
@section('title', 'SEARCH | Traddee.com')
@section('content')



    <div class="boxHeaderProfileMerc2">


        <div class="container-fluid">
        </div>
</div>
<div class="boxmainkt">
<div class="container-fluid"></br>

<div class="row">
<div class="col-3">


                            <h3 class="srtKTU"><strong>Sorting</strong></h3>
                            <hr/>
                            <div class="srtKTSU"><strong>Lokasi</strong></div>
                            <form><label class="srtKT">Provinsi</label>
                                <select name="provinsi" class="custom-select">
                                    <option selected class="srtSKT"> Jawa Barat</option>
                                    <option class="srtSKT">Jawa Tengah</option>
                                    <option class="srtSKT">Jawa Timur</option>
                                </select>
                            

                            <label class="srtKT">Kota</label>
                                <select name="kota" class="custom-select">
                                    <option selected class="srtSKT">Kota Bekasi</option>
                                    <option class="srtSKT">Kab Bekasi</option>
                                    <option class="srtSKT">Kota Bandung</option>
                                </select>
                            

                            <label class="srtKT">Kecamatan - Kelurahan</label>
                                <select name="kecamatan" class="custom-select">
                                    <option selected class="srtSKT">Bekasi Timur</option>
                                    <option class="srtSKT">Mustika Jaya</option>
                                    <option class="srtSKT">Pekayon</option>
                                </select>


                            </br>
                            </br>

                            <div class="srtKT"><strong>Berdasarkan Huruf</strong></div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" value="">A-H
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" value="">I-Z
                                </label>
                            </div>
                            </br>
                            <button type="button" class="btn btn-success" >Sorting</button>                                
                            </form>

</div>

<div class="col-6">
            <h3 class="srtKTSU">Hasil Pencarian :  <button type="button" class="btn btn-outline-dark" disabled>Toko</button> <button type="button" class="btn btn-outline-dark" disabled>Toko Busana Aqila</button></h3>
            <h3 class="srtKTSU">Hasil Sorting : <button type="button" class="btn btn-outline-primary" disabled>Jakarta</button> <button type="button" class="btn btn-outline-primary" disabled>Jakarta Barat</button> <button type="button" class="btn btn-outline-primary" disabled>Kecamatan - Kelurahan</button> <button type="button" class="btn btn-outline-danger" disabled>A-H</button></h3>
          <hr/>
              <div class="container-fluid">

                <div class="row">
                    <div class="col-4">
                    <center>
                      <img src = 'assets/images/iklan1.jpg'  id="imgSKT" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang"  ></br>
                      <p class="txtSKT"> Toko A</p>
                    </center>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" value="">I-Z
                        </label>
                    </div>

                </div>

                <div class="col-6">
                    <h3 class="srtKTSU">Hasil Pencarian :
                        @if(!empty($keyword))
                            <button type="button" class="btn btn-outline-dark" disabled>{{ $keyword }}</button>
                        @endif
                        @if(!empty($search))
                            <button type="button" class="btn btn-outline-dark" disabled>{{ $search }}</button>
                        @endif
                    </h3>
                    <h3 class="srtKTSU">Hasil Sorting :
                        <button type="button" class="btn btn-outline-primary" disabled>Jakarta</button>
                        <button type="button" class="btn btn-outline-primary" disabled>Jakarta Barat</button>
                        <button type="button" class="btn btn-outline-primary" disabled>Kecamatan - Kelurahan</button>
                        <button type="button" class="btn btn-outline-danger" disabled>A-H</button>
                    </h3>
                    <hr/>
                    <div class="container-fluid">

                        <div class="row">
                            @if(!empty($product))
                                @foreach($product as $prod)
                                    <div class="col-4">
                                        <center>
                                            @if(!empty($prod->productImage->image))
                                                <img
                                                    src="{{ asset(Storage::url($prod->productImage->image->first())) }}"
                                                    id="imgSKT"
                                                    class="img-thumbnail btn btn-light"
                                                    data-toggle="modal" data-target="#myModalbarang{{ $prod->id }}">
                                            @else
                                                <img src="{{ asset('assets/images/iklan1.jpg') }}" id="imgSKT"
                                                     class="img-thumbnail btn btn-light"
                                                     data-toggle="modal" data-target="#myModalbarang{{ $prod->id }}">
                                            @endif
                                            <br>
                                            <p class="txtSKT">{{ $prod->name }}</p>
                                        </center>
                                    </div>

                                    <div class="modal fade" id="myModalbarang{{ $prod->id }}">
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
                                                                <li data-target="#demo" data-slide-to="0"
                                                                    class="active"></li>
                                                                <li data-target="#demo" data-slide-to="1"></li>
                                                                <li data-target="#demo" data-slide-to="2"></li>
                                                            </ul>

                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img src='assets/images/iklan1.jpg'
                                                                         class="img-thumbnail"
                                                                         id="ImgPopUser">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src='assets/images/iklan2.jpg'
                                                                         class="img-thumbnail"
                                                                         id="ImgPopUser">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src='assets/images/iklan1.jpg'
                                                                         class="img-thumbnail"
                                                                         id="ImgPopUser">
                                                                </div>
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
                                                                <h1 class="h1PopUser">{{ $prod->name }}</h1>
                                                                <hr/>
                                                                <p class="PPopUser">Kategori
                                                                    : {{ $prod->category->name }}
                                                                </p>
                                                                <p class="PPopUser">
                                                                    Sub Kategori
                                                                    :
                                                                    {{ $prod->subCategory->name }}</p>
                                                                <p class="PPopUser">
                                                                    Nama Toko :
                                                                    {{ $prod->ukm->merchant_name }}</p>
                                                                <p class="PPopUser">
                                                                    Alamat Toko
                                                                    :
                                                                    {{ $prod->ukm->address .' - '.$prod->ukm->district.' - '. $prod->ukm->city.' - '.$prod->ukm->province }}
                                                                </p>
                                                                <p class="PPopUser">
                                                                    Harga
                                                                    : {{ $prod->price }}</p>
                                                                <p class="PPopUser">
                                                                    Deskripsi
                                                                    Produk :
                                                                    {{ $prod->description }}</p>
                                                                <hr/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary">
                                                        <a href="{{ url('/merchant/'.$prod->ukm->slug)}}">
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
                            @endif

                            @if(!empty($merchant))
                                @foreach($merchant as $merchants)
                                    <div class="col-4">
                                        <a href="{{ url('/merchant/'.$merchants->slug) }}">
                                            <center>
                                                @if(!empty($merchants->image))
                                                    <img
                                                        src="{{ asset(Storage::url($merchants->image->first())) }}"
                                                        id="imgSKT"
                                                        class="img-thumbnail btn btn-light"
                                                        data-toggle="modal" data-target="#myModalbarang">
                                                @else
                                                    <img src="{{ asset('assets/images/iklan1.jpg') }}" id="imgSKT"
                                                         class="img-thumbnail btn btn-light"
                                                         data-toggle="modal" data-target="#myModalbarang">
                                                @endif
                                                <br>
                                                <p class="txtSKT">{{ $merchants->merchant_name }}</p>
                                            </center>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </br>
        </br>


@endsection
