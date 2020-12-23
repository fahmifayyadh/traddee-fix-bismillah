<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sub Kategori Makanan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/userStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style type="text/css">
    .scrollIklan{
     display:block;
     border: 0px solid red;
     width:300px;
     height:320px;
     overflow:auto;
    }
	</style>

</head>
<body>
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
<div class="modal fade" id="myModalbarang">
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
</div>
<!-- / Modal barang -->


<!-- Header -->
<nav class="fixed-top">
    <div class="boxHeader">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-3">
                <a class="txtLogo" href="{{ url('/index') }}"><img src = 'assets/images/logo.png' class="imglogoHeader"> <font face="Tahoma" color="white" class="HdText" >Traddee.com</font> </a>
                </div>
                <div class="col-sm-8">
                    <form class="form" action="">
                        <div class="input-group mb-3" id="Src">
                            <input type="text" class="form-control" placeholder="Cari Toko di Traddee">
                            <div class="input-group-append">
                                <span class="btn bg-warning">Search</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- /header -->



<div class="boxKategoriMakanan">
      <div class="textKategori">
        Rumah Makan
      </div>
</div>  

</br>
</br>
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

                            <form><label class="srtKT">Kecamatan</label>
                                <select name="kecamatan" class="custom-select">
                                    <option selected class="srtSKT">Bekasi Timur</option>
                                    <option class="srtSKT">Mustika Jaya</option>
                                    <option class="srtSKT">Pekayon</option>
                                </select>
                            </form>
                            </br>
                            <form><label class="srtKT">Keluharan</label>
                                <select name="kecamatan" class="custom-select">
                                    <option selected class="srtSKT">mustikasari</option>
                                    <option class="srtSKT">narogong</option>
                                    <option class="srtSKT">jatimulya</option>
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

<div class="col-6">
<h3 class="TxtH">Rekomendasi Rumah Makan</h3>
          <hr/>
              <div class="container-fluid">

                <div class="row">
                    <div class="col-4">
                    <center>
                      <img src = 'assets/images/iklan1.jpg'  id="imgSKT" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang"  ></br>
                      <p class="txtSKT"> Toko A</p>
                    </center>
                    </div>
                </div>

               
                </div>
</div>

</div>
</div>
</br>
</br>

</br>
</br>
</br>
</br>





<center><p id="footer">Kisah Kreatif | Copyright 2020 © All Rights Reserved</p></center>


</body>
</html>


