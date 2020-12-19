<!DOCTYPE html>
<html lang="en">
<head>
    <title>TRADEE.COM | MERCHANTS | AQILA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/userStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
          <style type="text/css">
		table.scroll {
			width:100%;
			border:1px #a9c6c9 solid;
      font-size:15px;
		}
		table.scroll thead {
			display:table;
			width:100%;
			background-color: grey;
		}
		table.scroll tbody {
			display:block;
			height:150px;
			overflow:auto;
			float:left;
			width:100%;
		}
		table.scroll tbody tr {
			display:table;
			width:100%;
      
		}
		table.scroll th, td {
			width:35%;
			padding:8px;
		}
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

 <!-- modal Withdraw -->
 <div class="modal fade" id="WithDraw">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="col-6">
              <p> Nama Bank : </p>
              <p> Nomer Rekening : </p>
              <p> Point : </p>
              <p> Bonus : </p>
              <form action="/action_page.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Jumlah" id="Jumlah" readonly>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Withdraw</button>
              </form>
            </div>
            <div class="col-6">
            <h3> HISTORI WITHDRAW <h3>
            <table cellspacing="0" class="scroll">
                                <thead >
                                <tr>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>12/12/2020</td>
                                    <td>1.0000.000</td>
                                    <td><strong>Success</strong></td>
                                </tr>
                                <tr>
                                    <td>12/12/2020</td>
                                    <td>1.0000.000</td>
                                    <td><strong>Success</strong></td>
                                </tr>
                                <tr>
                                    <td>12/12/2020</td>
                                    <td>1.0000.000</td>
                                    <td><strong>Success</strong></td>
                                </tr>
                                <tr>
                                    <td>12/12/2020</td>
                                    <td>1.0000.000</td>
                                    <td><strong>Success</strong></td>
                                </tr>
                                
                                </tbody>
                            </table>
            </div>
          </div>
       
        </div>
        
      </div>
    </div>
  </div>
<!-- / Modal withdraw -->
<!-- modal edit product -->
<div class="modal fade" id="editProduct">
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
                                <img src='assets/images/iklan1.jpg' width="100%" height="150px" class="img-thumbnail">
                            </div>
                            <div class="carousel-item">
                                <img src='assets/images/iklan2.jpg' width="100%" height="150px" class="img-thumbnail">
                            </div>
                            <div class="carousel-item">
                                <img src='assets/images/iklan1.jpg' width="100%" height="150px" class="img-thumbnail">
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


                    <input type="text" class="form-control" placeholder="Nama Product "></br>
                    <input type="text" class="form-control" placeholder="Kategori"></br>
                    <input type="text" class="form-control" placeholder="Sub Kategori "></br>
                    <input type="text" class="form-control" placeholder="Harga "></br>
                    <hr/>

                    <p style="color:black;">Ganti Foto 1</p>
                    <input type="file" class="form-control-file border">
                    <p style="color:black;">Ganti Foto 2</p>
                    <input type="file" class="form-control-file border">
                    <p style="color:black;">Ganti Foto 3</p>
                    <input type="file" class="form-control-file border">
                    <hr/>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary">
                    <a href="/Profilemerchants">
                        <center><font face="Tahoma" color="white">Edit</font></center>
                    </a>
                </button>
            </div>

        </div>
    </div>
</div>
<!-- / Modal bedit product -->


<div class="boxHeaderProfileMerc2">

    <!-- iklan slide show -->
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src='assets/images/aqilabg.jpg' class="imgHeaderProfileMerc2">
            </div>
        </div>

        <!-- tutup iklan slide show -->

        <!-- txt Slide Show -->

        <div class="container-fluid">
            <div class="ProfileHeader2">
                <div class="row">
                    <div class="col-3">
                        <img src='assets/images/user.png' class="imgProfileMerc2">
                    </div>

                    <div class="col-9">
                        <p class="txtProfileMerch11">TOKO BUSANAN AQILA</p>
                        <p class="txtProfileMerch22">ID : 000011 | <strong>Verified</strong></p>

                    </div>
                </div>
            </div>

        </div>
        <!-- / txt Slide Show -->
    </div>

    <div class="boxMainProfileMercAlert">
        <div class="container-fluid">
            @if($success = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Sukses !</strong> {{ $success }}.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @elseif($error = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> {{ $error }}.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
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
                <div class="scrollIklan">
                    <div class="boxIklan">
                    iklan dari admin Khusus Anggota
                    </div>
                    </br>
                    <div class="boxIklan">
                    iklan dari admin Khusus Anggota
                    </div>
                    </br>
                    <div class="boxIklan">
                    iklan dari admin Khusus Anggota
                    </div>
                    </br>
                    <div class="boxIklan">
                    iklan dari admin Khusus Anggota
                    </div>
                    </br>
                    <div class="boxIklan">
                    iklan dari admin Khusus Anggota
                    </div>
                </div>
                </div>
                <!-- /iklan -->
                <!-- /iklan slide show -->
                </br>
                <!-- main -->
                <div class="container-fluid">
                    </br>
                    <h1 class="dsMerch">Dashboard Merchants</h1>


                    <!-- nav -->
                    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="nav " role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#daftar">Daftar Barang /
                                        Jasa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#chat">Chat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#informasi">Informasi Toko</a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="pill" href="#editprofile">Edit Profile</a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="pill" href="#editinformasi">Edit Informasi Toko</a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="pill" href="#iklan">Ajukan Pemasangan Iklan</a>
                                </li>
                                <li>
                                    <a class="nav-link mr-5" href="/HomePagesUser">Live View</a>
                                </li>
                                <li class="ml-auto">
                                    <a class="nav-link btn btn-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- /nav -->
                    <!-- konten -->
                    <div class="tab-content">
                        <!-- konten daftar barang / jasa -->
                        <div id="daftar" class="tab-pane active"><br>
                            <a href="" class="btn btn-success col-12">Buat Produk</a>
                            <br>
                            <br>
                            <table class="table table-bordered ">
                                <thead>
                                <tr>
                                    <th class="bg-primary" id="thProfileMerch" width="5%">No</th>
                                    <th class="bg-primary" id="thProfileMerch" width="8%">Nama</th>
                                    <th class="bg-primary" id="thProfileMerch" width="8%">Foto</th>
                                    <th class="bg-primary" id="thProfileMerch" width="20%">Deskripsi</th>
                                    <th class="bg-primary" id="thProfileMerch" width="5%">Status</th>
                                    <th class="bg-primary" id="thProfileMerch" width="20%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $index=>$prod)
                                    <tr>
                                        <td id="thProfileMerch">{{ $index+1 }}</td>
                                        <td id="thProfileMerch">{{ $prod->name }}</td>
                                        <td id="thProfileMerch">{{ asset(Storage::url($prod->productImage->first())) }}</td>
                                        <td id="thProfileMerch">{{ $prod->description }}</td>
                                        <td id="thProfileMerch">Tampil</td>
                                        <td>
                                            <button type="button" class="btn" data-toggle="modal"
                                                    data-target="#editProduct"
                                                    id="thProfileMerch">Edit
                                            </button>
                                            |
                                            <button type="button" class="btn" id="thProfileMerch">Hapus</button>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- / konten barang / jasa -->

                        <!-- konten chat -->
                        <div id="chat" class="container tab-pane fade"><br>

                            <h3>List Chat</h3>
                            <ul>
                                <li>
                                    <h5>User 1</a>
                                </li>
                                <li>
                                    <h5>User 2</a>
                                </li>
                                <li>
                                    <h5>User 3</a>
                                </li>
                                <li>
                                    <h5>User 4</a>
                                </li>
                            </ul>

                        </div>
                        <!-- / konten chat -->

                        <!-- konten informasi toko -->
                        <div id="informasi" class="container tab-pane fade"><br>

                            <p>Nama Toko : {{ $ukm->merchant_name }}</p>
                            <p>Id Toko : {{ $ukm->id }}</p>
                            <p>Id Anggota : 000011</p>
                              <p>Followers : </p>
                              <p>Kode Referal : 000011</p>
                              <p>Point: </p>
                              <p>Bonus: <button type="button" class="btn btn-success" data-toggle="modal" data-target="#WithDraw">Withdraw</button></p>
                            <p>Alamat Toko : {{ $ukm->address }}</p>
                            <p>Nama Pemilik Toko : {{ $ukm->user->name }}</p>
                            <p>No Tlp / WA: {{ empty($ukm->phone)? 'no.HP belum diinputkan' : $ukm->phone }}</p>
                            </br>
                            <h3>Lokasi</h3>
                            <div class="container-fluid">

                                <center>
                                    {!! empty($ukm->iframe)? 'maps lokasi belum diinputkan' : $ukm->iframe !!}
                                </center>
                            </div>
                        </div>
                        <!-- / konten informasi toko -->

                        <!-- konten Edit Profile -->
                        <div id="editprofile" class="container tab-pane fade"><br>

                            <form action="{{ route('ukm.editprofile') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Nama Toko : </label></br>
                                    <input type="text" class="form-control" id="namaToko"
                                           placeholder="TOKO BUSANA AQILA" name="name"
                                           value="{{ $ukm->merchant_name }}">
                                </div>
                                <div class="form-group">
                                    <label>Foto Profile : </label></br>
                                    @if(empty($ukm->image))
                                        <img src='assets/images/user.png' width="100px" height="100px">
                                    @else
                                        <img src='{{ asset(Storage::url($ukm->image)) }}' width="100px" height="100px"
                                             style="object-fit: cover">
                                    @endif
                                    <input type="file" class="form-control-file border mr-2" name="image"
                                           id="fotoProfile">
                                </div>
                                {{--                                <div class="form-group">--}}
                                {{--                                    <label for="pwd">Banner Profile : </label></br>--}}
                                {{--                                    <img src='assets/images/aqilabg.jpg' width="150px" height="100px"> <input--}}
                                {{--                                        type="file" class="form-control-file border mt-2" id="bannerProfile">--}}
                                {{--                                </div>--}}
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </form>

                        </div>
                        <!-- / konten edit profile -->

                        <!-- konten edit informasi toko -->
                        <div id="editinformasi" class="container tab-pane fade"><br>

                            <form action="{{ route('ukm.editinformasi') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="email">ID Toko : </label></br>
                                    <input type="text" class="form-control" id="namaToko" readonly
                                           value="{{ $ukm->id }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">ID Pemilik : </label></br>
                                    <input type="text" class="form-control" id="namaToko" readonly
                                           value="{{ $ukm->user->id }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">ID Pengajak : </label></br>
                                    <input type="text" class="form-control" id="namaToko" readonly
                                           value="{{ $ukm->user->reveral_id }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Jenis Usaha : </label></br>
                                    <input type="text" class="form-control" id="namaToko" placeholder="Barang">
                                </div>
                                <div class="form-group">
                                    <label for="email">Sub Jenis Usaha : </label></br>
                                    <input type="text" class="form-control" id="namaToko" placeholder="Pakaian">
                                </div>
                                <div class="form-group">
                                    <label for="email">Nama Pemilik : </label></br>
                                    <input type="text" class="form-control" id="namaToko" name="name_user"
                                           value="{{ $ukm->user->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Alamat Toko : </label></br>
                                    <input type="text" class="form-control" id="namaToko" placeholder="Provinsi"
                                           name="province" value="{{ $ukm->province }}"></br>
                                    <input type="text" class="form-control" id="namaToko"
                                           placeholder="Kabupaten / Kota" name="city" value="{{ $ukm->city }}"></br>
                                    <input type="text" class="form-control" id="namaToko" placeholder="Kecamatan"
                                           value="{{ $ukm->district }}" name="district"></br>
                                    <input type="text" class="form-control" id="namaToko"
                                           placeholder="Kelurahan / Desa" value="{{ $ukm->village }}"
                                           name="village"></br>
                                    <input type="text" class="form-control" id="namaToko" placeholder="Alamat"
                                           value="{{ $ukm->address }}" name="address">
                                </div>
                                <div class="form-group">
                                    <label for="email">NO Tlp/WA : </label></br>
                                    <input type="text" class="form-control" id="namaToko" placeholder="000000000000"
                                           value="{{ $ukm->phone }}" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="email">Nama Bank : </label></br>
                                    <input type="text" class="form-control" id="namaBank"
                                           placeholder="2323-2323-2323-222" value="" name="debit">
                                </div>
                                <div class="form-group">
                                    <label for="email">Nomer Rekening : </label></br>
                                    <input type="text" class="form-control" id="namaToko"
                                           placeholder="2323-2323-2323-222" value="{{ $ukm->debit }}" name="debit">
                                </div>

                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </form>

                        </div>
                        <!-- / konten edit informasi toko -->


                        <!-- konten pasang iklan-->
                        <div id="iklan" class="container tab-pane fade"><br>
                            <div class="card">
                                <div class="card-body">
                                    <h3>Iklan Terdaftar</h3>
                                    <hr/>
                                    <div class="row">
                                        @forelse($ukm->request as $request)

                                            <div class="col-3">
                                                <div class="container">
                                                    <div
                                                        class="p-2 card {{ empty($request->acc)? 'bg-warning' : 'bg-success' }}">
                                                        <img src="{{ asset(Storage::url($request->image)) }}" alt=""
                                                             height="100" width="100%" style="object-fit: cover">
                                                        <br>
                                                        <p class="text-center">{{ empty($request->acc)? 'Belum di acc' : 'sudah di acc' }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                        @empty
                                            <p>tidak ada iklan terdaftar</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                            </br>
                            <form action="{{ route('ukm.requestads') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>input Iklan : </label></br>
                                    <input type="file" class="form-control-file border mr-2" id="fotoProfile"
                                           name="image">
                                </div>
                                <button type="submit" class="btn btn-primary">Ajukan</button>
                            </form>

                        </div>
                        <!-- / konten pasang iklan-->
                    </div>
                    <!-- /konten -->
                    <!-- /main -->

                    </br>
                    </br>
                    <center><p id="footer">Kisah Kreatif | Copyright 2020 © All Rights Reserved</p></center>


</body>
</html>
