@extends('layouts.guest')
@section('title', 'KATEGORI | Barang | Traddee.com')
@section('content')


    <div class="boxKategoriBarang">
        <div class="textKategori">
            {{ $ctgr->name }}
        </div>
    </div>

    </br>
    </br>
    <div class="boxmainkt">
        </br>
        </br>

        <!-- kategori lainnya -->
        <div class="container-fluid">
            <h3>Kategori Lainnya</h3>
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
        <!-- / ketogori lainnya -->
        </br>
        </br>
        <!-- sub katergori -->

        <!-- Nav sub kategori -->
        <div class="container-fluid">
            <h2>Sub Kategori</h2>

            <br>


            <ul class="nav nav-pills">
                @foreach($sub as $index=>$suba)
                    @if($index ==0)
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#{{ $suba->id }}">
                                <div class="txtSKT">{{ $suba->name }}</div>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#{{ $suba->id }}">
                                <div class="txtSKT">{{ $suba->name }}</div>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
            <hr/>
            <!-- panel sub kategori -->
            <div class="tab-content">
                <!-- olahraga-->
                @foreach($sub as $index=>$subs)
                <div id="{{ $subs->id }}" class="container-fluid tab-pane {{ $index==0?'active':'' }}"><br>
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

                            <form><label class="srtKT">Kecamatan</label>
                                <select name="kecamatan" class="custom-select">
                                    <option selected class="srtSKT">Bekasi Timur</option>
                                    <option class="srtSKT">Mustika Jaya</option>
                                    <option class="srtSKT">Pekayon</option>
                                </select>
                            </form>
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
                        <div class="col-9">

                            <div class="row">
                                <div class="col-3">
                                    <center>
                                        <img src='assets/images/iklan1.jpg' id="imgTokoKT" class="btn btn-light"
                                             data-toggle="modal" data-target="#myModalbarang"></br>
                                        <p class="txtTokoKT"> Toko A</p>
                                    </center>
                                </div>

                                <div class="col-3">
                                    <center>
                                        <img src='assets/images/iklan1.jpg' id="imgTokoKT" class="btn btn-light"
                                             data-toggle="modal" data-target="#myModalbarang"></br>
                                        <p class="txtTokoKT"> Toko A</p>
                                    </center>
                                </div>

                                <div class="col-3">
                                    <center>
                                        <img src='assets/images/iklan1.jpg' id="imgTokoKT" class="btn btn-light"
                                             data-toggle="modal" data-target="#myModalbarang"></br>
                                        <p class="txtTokoKT"> Toko A</p>
                                    </center>
                                </div>

                                <div class="col-3">
                                    <center>
                                        <img src='assets/images/iklan1.jpg' id="imgTokoKT" class="btn btn-light"
                                             data-toggle="modal" data-target="#myModalbarang"></br>
                                        <p class="txtTokoKT"> Toko A</p>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- /olahraga-->

            </div>
            <!-- panel sub kategori -->
        </div>
        <!-- / nav sub kategori -->
        <!-- / sub kategori -->
        </br>
        </br>
    </div>
    </br>
    </br>
    </br>
    </br>



@endsection
