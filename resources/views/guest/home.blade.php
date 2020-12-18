@extends('layouts.guest')
@section('title', 'HOME | Traddee.com')
@section('content')


    <div class="boxHeaderHome">
        <!-- iklan slide show -->
        <div id="demo" class="carousel slide" data-ride="carousel">


            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src = 'assets/images/bgheader1.jpg' class="imgSlide">

                </div>
                <div class="carousel-item">
                    <img src = 'assets/images/bgheader2.jpg' class="imgSlide">
                </div>
                <div class="carousel-item">
                    <img src = 'assets/images/bgheader3.jpg' class="imgSlide">
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


                            <div class="col-3">
                                <center>
                                    <a href="Makanan" >
                                        <img src = 'assets/icon/013-shop.png' class="imgKT"></br>
                                        <div class="txtKT">Makanan</div>
                                    </a>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <a href="Produsen" >
                                        <img src = 'assets/icon/013-shop.png' class="imgKT"></br>
                                        <div class="txtKT">Produsen</div>
                                    </a>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <a href="Store" >
                                        <img src = 'assets/icon/013-shop.png' class="imgKT"></br>
                                        <div class="txtKT">Store</div>
                                    </a>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <a href="Wisata" >
                                        <img src = 'assets/icon/013-shop.png' class="imgKT"></br>
                                        <div class="txtKT">Wisata dan Inap</div>
                                    </a>
                                </center>
                            </div>

                            </br>
                            </br>

                            <div class="col-3">
                                <center>
                                    <a href="Barang" >
                                        <img src = 'assets/icon/013-shop.png' class="imgKT"></br>
                                        <div class="txtKT">Barang</div>
                                    </a>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <a href="Jasa" >
                                        <img src = 'assets/icon/013-shop.png' class="imgKT"></br>
                                        <div class="txtKT">Jasa</div>
                                    </a>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <a href="Properti" >
                                        <img src = 'assets/icon/013-shop.png' class="imgKT"></br>
                                        <div class="txtKT">Properti</div>
                                    </a>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <a href="Hasilbumi" >
                                        <img src = 'assets/icon/013-shop.png' class="imgKT"></br>
                                        <div class="txtKT">Hasil Bumi</div>
                                    </a>
                                </center>
                            </div>


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
                            <div class="carousel-item active">
                                <img src="assets/images/iklanH1.jpg" class="ImgSlideUser">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/iklanH2.jpg" class="ImgSlideUser">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/iklanH3.jpg" class="ImgSlideUser">
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#demo" data-slide="prev"></a>
                        <a class="carousel-control-next" href="#demo" data-slide="next"></a>

                    </div>
                </div>
                <!-- iklan -->
                <div class="col-3">
                    <div class="boxIklan">
                        <label>Iklan dari Admin berdasarkan toko yang bayar iklan</label>
                    </div>
                    </br>
                    <div class="boxIklan">
                        <label>Iklan dari Admin berdasarkan toko yang bayar iklan</label>
                    </div>
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
                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg'  id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang"  ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg' id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang" ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg'  id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang" ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg'  id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang" ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg'  id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang" ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg'  id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang" ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg'  id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang" ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg'  id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang" ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- /rekomendasi -->


                    </br>
                    <!-- Toko -->
                    <h3 class="TxtH">Toko</h3>
                    <hr/>

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg' id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang" ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg'  id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang" ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg' id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang" ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg'  id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang" ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg' id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang" ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg' id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang" ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg'  id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang" ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>

                            <div class="col-3">
                                <center>
                                    <img src = 'assets/images/iklan1.jpg'  id="imgTokoMain" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang" ></br>
                                    <p class="txtTokoMain"> Toko A</p>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- /Toko -->

                </div>

            </div>



            </br>

@endsection
