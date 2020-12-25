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
            width: 100%;
            border: 1px #a9c6c9 solid;
            font-size: 15px;
        }

        table.scroll thead {
            display: table;
            width: 100%;
            background-color: grey;
        }

        table.scroll tbody {
            display: block;
            height: 150px;
            overflow: auto;
            float: left;
            width: 100%;
        }

        table.scroll tbody tr {
            display: table;
            width: 100%;

        }

        table.scroll th, td {
            width: 35%;
            padding: 8px;
        }

        .scrollIklan {
            display: block;
            border: 0px solid red;
            width: 300px;
            height: 320px;
            overflow: auto;
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


<!-- modal create product -->
<div class="modal fade" id="createProduct">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">

        <form action="/action_page.php">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama Product" id="namaProduct">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Harga" id="harga">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Kategori" id="kategori">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Sub Kategori" id="sub kategori">
            </div>
            <div class="form-group">
                <label for="comment">Deskripsi Product:</label>
                <textarea class="form-control" rows="5" id="Deskripsi"></textarea>
            </div>
            <div class="form-group">
                <label for="desc">Foto Product : </label>
                <input type="file" class="form-control-file border"></br>
                <input type="file" class="form-control-file border"></br>
                <input type="file" class="form-control-file border">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sumbit</button>
        </form>
        </div>
        
      </div>
    </div>
  </div>
<!-- / Modal create product -->


<!-- modal edit product -->
<div class="modal fade" id="editProduct">

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
                        <h3> HISTORI WITHDRAW
                            <h3>
                                <table cellspacing="0" class="scroll">
                                    <thead>
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
                        <p class="txtProfileMerch11">TOKO {{ $ukm->merchant_name}}</p>

                        <p class="txtProfileMerch22">ID : {{ $ukm->id }}
                            <strong>{{ !empty($ukm->user->email_ferivied_at) ?' |  Verified' : ''}}</strong></p>

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
                                <li>
                                    <a class="nav-link" data-toggle="pill" href="#Verif">Verifikasi Toko</a>
                                </li>
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
                                    <form id="logout-form" action="{{ route('logout') }}"
                                          method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- /nav -->
                    <!-- konten -->
                    <div class="tab-content">
                        <!-- konten daftar barang / jasa -->
                        <div id="daftar" class="tab-pane active"><br>
                            <a data-toggle="modal"
                               data-target="#createProduct" class="btn btn-success col-12">Buat Produk</a>
                            <br>
                            <div class="modal fade" id="createProduct">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <input type="text" class="form-control"
                                                           placeholder="Nama Product" name="name"></br>
                                                    <input type="text" class="form-control"
                                                           placeholder="deskripsi Product " name="description"></br>
                                                    <select name="category" id="ctgr" class="form-control" required>
                                                        <option>Pilih kategori</option>
                                                        @foreach($category as $cat)
                                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    </br>
                                                    <select name="subcategory" id="sub" class="form-control" required>
                                                        <option>Pilih sub-kategori</option>
                                                    </select>

                                                    <script !src="">
                                                        $(document).ready(()=>{
                                                            $('select#ctgr').change(() => {
                                                                $('#sub').empty();
                                                                $('#sub').html(' <option>Pilih sub-kategori</option>');
                                                                var id = $("#ctgr").val();
                                                                $.ajax({
                                                                    method: "get",
                                                                    url: "/data/category/"+id,
                                                                    dataType: "Json",
                                                                    success: function (data, textStatus, jqXHR) {
                                                                        var sub = data['sub'];
                                                                        $.each(sub, (item, dt) => {
                                                                            var sub = ['<option value="' + dt.id + '">' + dt.name +
                                                                            '</option>'
                                                                            ];
                                                                            $('#sub').append(sub);
                                                                        });
                                                                        //data - response from server
                                                                    },
                                                                    error: function (jqXHR, textStatus, errorThrown) {
                                                                        alert('error :' + textStatus);
                                                                        console.log(errorThrown);

                                                                    }
                                                                });
                                                            });

                                                        })
                                                    </script>
                                                    <br>
                                                    <input type="text" class="form-control"
                                                           placeholder="varian" name="variant"></br>
                                                    <input type="text" class="form-control"
                                                           placeholder="Harga" name="price"></br>

                                                    <hr/>

                                                    <p style="color:black;">Foto 1</p>
                                                    <input type="file" name="image[]" class="form-control-file border">
                                                    <p style="color:black;">Foto 2</p>
                                                    <input type="file" name="image[]" class="form-control-file border">
                                                    <p style="color:black;">Foto 3</p>
                                                    <input type="file" name="image[]" class="form-control-file border">
                                                    <hr/>

                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">
                                                    <a href="/Profilemerchants">
                                                        <center><font face="Tahoma" color="white">Buat</font>
                                                        </center>
                                                    </a>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
                                <tr>

                                    <td id="thProfileMerch">1</td>
                                    <td id="thProfileMerch">baju tidur</td>
                                    <td id="thProfileMerch"><img src="assets/images/iklanH3.jpg" width="20px" height="20px"> | <img src="assets/images/iklanH3.jpg" width="20px" height="20px"> | <img src="assets/images/iklanH3.jpg" width="20px" height="20px"></td>
                                    <td id="thProfileMerch">ukuran s,m dan xl Ready</td>
                                    <td id="thProfileMerch">Aktif</td>


                                    <td>
                                        <button type="button" class="btn" data-toggle="modal"
                                                data-target="#editProduct"
                                                id="thProfileMerch">Edit
                                        </button>
                                        |
                                        <button type="button" class="btn" id="thProfileMerch">Hapus</button>
                                    </td>
                                </tr>
                                @foreach($product as $index=>$prod)
                                    <tr>
                                        <td id="thProfileMerch">{{ $index+1 }}</td>
                                        <td id="thProfileMerch">{{ $prod->name }}</td>
                                        @if($photo = $prod->productImage->first())
                                        <td id="thProfileMerch">{{ asset(Storage::url($photo->image)) }}</td>
                                            @else
                                            <td id="thProfileMerch">tidak ada foto</td>
                                        @endif
                                        <td id="thProfileMerch">{{ $prod->description }}</td>
                                        <td id="thProfileMerch">Tampil</td>
                                        <td>
                                            @if($prod->available == 0)
                                                <button type="button" class="btn btn-success" id="thProfileMerch">
                                                    Aktif
                                                </button>
                                            @else
                                                <button type="button" class="btn btn-danger" id="thProfileMerch">
                                                    Nonaktif
                                                </button>
                                            @endif
                                            |
                                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#editProduct"
                                                    id="thProfileMerch">Edit
                                            </button>
                                            |
                                            <button type="button" class="btn" id="thProfileMerch">Hapus</button>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="editProduct">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;
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
                                                                    <img src='assets/images/iklan1.jpg' width="100%"
                                                                         height="150px" class="img-thumbnail">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src='assets/images/iklan2.jpg' width="100%"
                                                                         height="150px" class="img-thumbnail">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src='assets/images/iklan1.jpg' width="100%"
                                                                         height="150px" class="img-thumbnail">
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


                                                        <input type="text" class="form-control"
                                                               placeholder="Nama Product "></br>
                                                        <input type="text" class="form-control"
                                                               placeholder="Kategori"></br>
                                                        <input type="text" class="form-control"
                                                               placeholder="Sub Kategori "></br>
                                                        <input type="text" class="form-control"
                                                               placeholder="Harga "></br>
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
                                                            <center><font face="Tahoma" color="white">Edit</font>
                                                            </center>
                                                        </a>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- / konten barang / jasa -->

                        <!-- konten chat -->
                        <div id="chat" class="container tab-pane fade"><br>

                            <h3>List Chat</h3>
                            <div class="alert alert-primary">
                                <strong>Beta !</strong> Fitur ini akan segera hadir.
                            </div>

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
                            <p>Bonus:
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#WithDraw">Withdraw
                                </button>
                            </p>

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
                                

                                <div class="card">
                                    <div class="card-body">
                                        <div class="container-fluid">
                                            <h3>Iklan</h3>
                                            <p>iklan ini akan tampil di halaman Toko anda</p><hr/>
                                        </br>
                                        <div class="alert alert-success">
                                            <strong>Success !</strong> iklan sudah tampil di halaman toko !
                                        </div>

                                        <div class="control-group after-add-mores">
                                            <label>Masukan Gambar</label>
                                            <input type="file" name="gambar" class="form-control"></br>

                                            <button class="btn btn-success add-mores" type="button">
                                            <i class="glyphicon glyphicon-plus"></i> Add
                                            </button>

                                            <hr>

                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                            </form>

                                            <div class="copys invisible">
                                                <div class="control-group">
                                                    <label>Masukan Gambar</label>
                                                    <input type="file" name="gambar" class="form-control"></br>
                                                    <button class="btn btn-danger removes" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>

                                                    <hr>
                                                </div>
                                            </div>
                                        </form>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                            $(".add-mores").click(function(){ 
                                                var html = $(".copys").html();
                                                $(".after-add-mores").after(html);
                                            });
                                            $("body").on("click",".removes",function(){ 
                                                $(this).parents(".control-group").remove();
                                            });
                                            });
                                        </script>
                                    </div>
                                </div>
                                </div>

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
                                    <label for="email">Link IFrame : </label></br>
                                    <input type="text" class="form-control" id="iframe" placeholder="https://sadsdjisdasndasndjnjspdgoidsofnsodf"
                                           value="{{ $ukm->phone }}" name="phone">
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

                    <!-- konten Verifikasi-->
                  <div id="Verif" class="container tab-pane fade"><br>
                  <div class="alert alert-primary">
                        <strong>Success !</strong> akun anda berhasil di verifikasi !
                    </div>
                    <div class="alert alert-danger">
                        <strong>Failed !</strong> akun anda gagal di verifikasi, coba lagi !
                    </div>
                    <div class="alert alert-success">
                        <strong>on Proccess !</strong> akun anda sedang di tinjau, harap bersabar !
                    </div>
                    <form action="#">
                      <div class="form-group">
                        <label> Masukan Foto KTP : </label></br>  
                        <input type="file" class="form-control-file border mt-2" id="bannerProfile">
                      </div>
                      <button type="submit" class="btn btn-primary">Ajukan</button>
                    </form>

                  </div>
                  <!-- / konten Verifikasi-->
                                          <!-- konten pasang iklan-->
                                          <div id="iklan" class="container tab-pane fade"><br>
                    <div class="card">
                      <div class="card-body">
                        <h3>Iklan Terdaftar <strong>Berbayar</strong></h3>
                        <p>iklan ini akan tampil di halaman Home</p><hr/>

                        <div class="alert alert-success">
                            <strong>On Going !</strong> admin akan menghubungi anda via whatsapp !
                        </div>
                        <div class="alert alert-danger">
                            <strong>Failed!</strong> pengjauan iklan gagal, coba lagi !
                        </div>
                        <div class="alert alert-primary">
                            <strong>Success !</strong> iklan sudah tampil di halaman Home !
                        </div>
                      </div>
                    </div></br>
                    <form action="#">
                    <div class="control-group after-add-more">
                        <label>Masukan Gambar</label>
                        <input type="file" name="gambar" class="form-control"></br>

                        <button class="btn btn-success add-more" type="button">
                        <i class="glyphicon glyphicon-plus"></i> Add
                        </button>

                        <hr>

                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        </form>

                        <div class="copy invisible">
                            <div class="control-group">
                                <label>Masukan Gambar</label>
                                <input type="file" name="gambar" class="form-control"></br>
                                <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>

                                <hr>
                            </div>
                        </div>
                    </form>
                  <script type="text/javascript">
                        $(document).ready(function() {
                        $(".add-more").click(function(){ 
                            var html = $(".copy").html();
                            $(".after-add-more").after(html);
                        });
                        $("body").on("click",".remove",function(){ 
                            $(this).parents(".control-group").remove();
                        });
                        });
                    </script>
                </div>
                <!-- /konten -->


                        </div>
                        <!-- / konten Verifikasi-->
                        <!-- konten pasang iklan-->
                        <div id="iklan" class="container tab-pane fade"><br>
                            <div class="card">
                                <div class="card-body">
                                    <h3>Iklan Terdaftar</h3>
                                    <hr/>
                                    <p>tidak ada iklan terdaftar</p>
                                </div>
                            </div>
                            </br>
                            <form action="#">
                                <div class="form-group">
                                    <label>input Iklan : </label></br>
                                    <input type="file" class="form-control-file border mr-2" id="fotoProfile">
                                </div>
                                <div class="form-group">
                                    <label> Input Iklan : </label></br>
                                    <input type="file" class="form-control-file border mt-2" id="bannerProfile">
                                </div>
                                <button type="submit" class="btn btn-primary">Ajukan</button>
                            </form>

                        </div>
                        <!-- / konten pasang iklan-->
                    </div>
                    <!-- /konten -->


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
