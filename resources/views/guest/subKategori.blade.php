@extends('layouts.guest')
@section('title', 'SUB KATEGORI | Barang | Traddee.com')
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
                    </form>

                    <form><label class="srtKT">Kota</label>
                        <select name="kota" class="custom-select">
                            <option selected class="srtSKT">Kota Bekasi</option>
                            <option class="srtSKT">Kab Bekasi</option>
                            <option class="srtSKT">Kota Bandung</option>
                        </select>
                    </form>

                    <form><label class="srtKT">Kecamatan - Kelurahan</label>
                        <select name="kecamatan" class="custom-select">
                            <option selected class="srtSKT">Bekasi Timur</option>
                            <option class="srtSKT">Mustika Jaya</option>
                            <option class="srtSKT">Pekayon</option>
                        </select>
                    </form>
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

                </div>

                <div class="col-6">
                    <h3 class="srtKTSU">Kategori :
                        <a href="{{ url('/'.$category->slug) }}">
                            <button type="button" class="btn btn-outline-dark">{{ $category->name }}</button>
                        </a>
                        <button type="button" class="btn btn-outline-dark" disabled>{{ $subcategory->name }}</button>
                    </h3>
                    @if(!empty($search))
                        <h3 class="srtKTSU">Hasil Sorting :
                            @if($prov = Session::get('province'))
                                <button type="button" class="btn btn-outline-primary" disabled>{{ $prov }}</button>
                            @endif
                            @if($cty = Session::get('city'))
                                <button type="button" class="btn btn-outline-primary" disabled>{{ $cty }}</button>
                            @endif
                            @if($dist = Session::get('district'))
                                <button type="button" class="btn btn-outline-primary" disabled>{{ $dist }}
                                </button>
                            @endif
                            @if($sort = Session::get('sortby'))
                                <button type="button" class="btn btn-outline-danger" disabled>{{ $sort }}</button>
                            @endif
                        </h3>
                    @endif
                    <hr/>
                    <div class="container-fluid">

                        <div class="row">
                            @foreach($product as $products)
                                <div class="col-4">
                                    <center>
                                        <img
                                            src="{{ empty($products->productImage->image) ? 'assets/images/iklan1.jpg': $products->productImage->image->first() }}"
                                            id="imgSKT"
                                            class="img-thumbnail btn btn-light"
                                            data-toggle="modal" data-target="#myModalbarang{{ $products->id }}"><br>
                                        <p class="txtSKT">{{ $products->name }}</p>
                                    </center>
                                </div>


                                <div class="modal fade" id="myModalbarang{{ $products->id }}">
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
                                                            @foreach($products->productImage as $index=>$length)
                                                                <li data-target="#demo" data-slide-to="{{ $index }}"
                                                                    class="{{ $loop->first?'active':'' }}"></li>
                                                            @endforeach
                                                        </ul>

                                                        <div class="carousel-inner">
                                                            @foreach($products->productImage as $image)
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
                                                            <h1 class="h1PopUser">{{ $products->name }}</h1>
                                                            <hr/>
                                                            <p class="PPopUser">Kategori
                                                                : {{ $products->category->name }}
                                                            </p>
                                                            <p class="PPopUser">
                                                                Sub Kategori
                                                                :
                                                                {{ $products->subCategory->name }}</p>
                                                            <p class="PPopUser">
                                                                Nama Toko :
                                                                {{ $products->ukm->merchant_name }}</p>
                                                            <p class="PPopUser">
                                                                Alamat Toko
                                                                :
                                                                {{ $products->ukm->address .' - '.$products->ukm->district.' - '. $products->ukm->city.' - '.$products->ukm->province }}
                                                            </p>
                                                            <p class="PPopUser">
                                                                Harga
                                                                : {{ $products->price }}</p>
                                                            <p class="PPopUser">
                                                                Deskripsi
                                                                Produk :
                                                                {{ $products->description }}</p>
                                                            <hr/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary">
                                                    <a href="{{ url('/merchant/'.$products->ukm->slug)}}">
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
                </div>

            </div>
        </div>



@endsection


