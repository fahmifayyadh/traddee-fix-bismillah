<!DOCTYPE html>
<html lang="en">
<head>
    <title>TRADDEE.COM | Admin</title>
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
		}
		table.scroll thead {
			display:table;
			width:100%;
			background-color: grey;
		}
		table.scroll tbody {
			display:block;
			height:320px;
			overflow:auto;
			float:left;
			width:100%;
		}
		table.scroll tbody tr {
			display:table;
			width:100%;
		}
		table.scroll th, td {
			width:25%;
			padding:8px;
		}
	</style>
</head>
<body>

 <!-- modal Detail Merchants -->
 <div class="modal fade" id="detailMerch">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">

        <form action="/action_page.php">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama Toko" id="namaToko" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama Pemilik" id="namaPemilik" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="ID toko" id="IdToko" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="ID Anggota" id="IdAnggota" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Followers" id="Followers" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Kode Referal" id="Refereal" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Point" id="point" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Bonus" id="bonus" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nomer Rekening" id="Rekening" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama Bank" id="namaBank" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nomer Telepon" id="Tlp" readonly>
            </div>

        </form>
        </div>

      </div>
    </div>
  </div>
<!-- / Modal Detail Merch -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <img src="assets/images/admin.png" class="imgAdmin"> <font color="white" size="4"> | Admin</font>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="nav pills ml-auto">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#dashboard"><font color="white">Dashboard</font></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#toko"><font color="white">Toko</font></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#iklan"><font color="white">Iklan</font></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#PengajuanIklan"><font color="white">Pengajuan Iklan</font></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#pengaturan"><font color="white">Pengaturan Lainnya</font></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <font color="red">Logout</font>
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </div>
</nav>

<div class="tab-content">

    <!-- panel dashboard -->
    <div id="dashboard" class="tab-pane container-fluid mt-5 active">
        </br>
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

        <h1> Dashboard</h1>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        </br>
                        <p class="text-center">{{ $merch->count() }}</p>
                        </br>
                        <center>Jumlah Toko</center>
                    </div>
                    <div class="col-4">
                        </br>
                        <p class="text-center">{{ $reqAds->count() }}</p>
                        </br>
                        <center>Pengajuan Iklan Berbayar</center>
                    </div>
                    <div class="col-4">
                        </br>
                        <p class="text-center">{{ $ads->where('image', '<>', '')->count() }}</p>
                        </br>
                        <center>Iklan berbayar yang aktif</center>
                    </div>
                </div>
            </div>
        </div>
        </br>
        <div class="card">
            <div class="container-fluid"><br/>
                <h3>Iklan Slideshow di User</h3>
                <hr/>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($ads->where('category', 'slideshow user') as $index=>$usr)
                        <div class="col-4">
                            @if(empty($usr->image))
                                <img src="{{ asset('assets/images/empty.jpg') }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @else
                                <img src="{{ asset(Storage::url($usr->image)) }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @endif
                            <center><p>Iklan {{ $index+1 }}</p></center>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </br>
        <div class="card">
            <div class="container-fluid"><br/>
                <h3>Iklan Slideshow di Merchant</h3>
                <hr/>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($ads->where('category', 'slideshow merchant') as $index=>$usrb)
                        <div class="col-4">
                            @if(empty($usrb->image))
                                <img src="{{ asset('assets/images/empty.jpg') }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @else
                                <img src="{{ asset(Storage::url($usrb->image)) }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @endif
                            <center><p>Iklan {{ $index+1 }}</p></center>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </br>
        <div class="card">
            <div class="container-fluid"><br/>
                <h3>Iklan Khusus Anggota</h3>
                <hr/>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($ads->where('category', 'ads member') as $index=>$usrc)
                        <div class="col-4">
                            @if(empty($usrc->image))
                                <img src="{{ asset('assets/images/empty.jpg') }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @else
                                <img src="{{ asset(Storage::url($usrc->image)) }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @endif
                            <center><p>Iklan {{ $index+1 }}</p></center>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </br>
        <div class="card">
            <div class="container-fluid"><br/>
                <h3>Iklan untuk User</h3>
                <hr/>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($ads->where('category', 'ads home user') as $index=>$usrd)
                        <div class="col-4">
                            @if(empty($usrd->image))
                                <img src="{{ asset('assets/images/empty.jpg') }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @else
                                <img src="{{ asset(Storage::url($usrd->image)) }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @endif
                            <center><p>Iklan {{ $index+1 }}</p></center>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <!-- /panel dashboard -->

    <!-- panel toko -->
    <div id="toko" class="tab-pane container-fluid fade mt-5">
        </br>
        <h1>List Toko</h1>
        <hr/>

        <form class="form-inline" action="" method="get">
            {{--            @csrf--}}
            <p><input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Cari Toko">
            <button class="btn btn-success" type="submit">Search</button> <a href="{{route('regist.toko')}}"><button type="button" class="btn btn-primary" >Tambah Toko</button></a></p>
        </form>
        </br>
        <table class="table table-dark">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Toko</th>
                <th>ID Toko</th>
                <th>ID Anggota</th>
                <th>ID Referal</th>
                <th>Nama Pemilik Toko</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($merch as $index=>$ukm)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $ukm->merchant_name }}</td>
                    <td>{{ $ukm->id }}</td>
                    <th>ID Anggota</th>
                    <th>ID Referal</th>
                    <td>{{ $ukm->user->name }}</td>
                    <td>{!!  $ukm->active==1?'<span class="badge-success">Aktif</span>':'<span class="badge-danger">tidak aktif</span>' !!}</td>
                    <td><a href="{{ url('/merchant/'.$ukm->slug) }}" class="btn btn-success"> Detail</a> |

                        @if($ukm->active==1)
                            <a href="{{ route('admin.merchant.inactive', $ukm->id) }}" class="btn btn-danger">Nonaktifkan</a>
                        @else
                            <a href="{{ route('admin.merchant.active', $ukm->id) }}" class="btn btn-danger">aktifkan</a>
                        @endif
                    </td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <!-- /panel toko -->

    <!-- panel iklan -->
    <div id="iklan" class="tab-pane container-fluid fade mt-5">
        </br>
        <h1>Iklan</h1>
        <hr/>
        <div class="card">
            <div class="container-fluid"><br/>
                <h3>Edit Iklan Slideshow untuk User</h3>
                <hr/>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($ads->where('category', 'slideshow user') as $usr)
                        <div class="col-4">
                            @if(empty($usr->image))
                                <img src="{{ asset('assets/images/empty.jpg') }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @else
                                <img src="{{ asset(Storage::url($usr->image)) }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @endif
                            <center>
                                <form action="{{ route('ads.update', $usr->id) }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <button type="submit" class="btn bg-primary btn-block "><font
                                            color="white">Ganti</font>
                                    </button>
                                    <a onclick="del{{ $usr->id }}()" class="btn bg-danger btn-block "><font
                                            color="white">Delete</font>
                                    </a>
                                </form>
                                <script !src="">
                                    function del{{ $usr->id }}() {
                                        $("#del{{ $usr->id }}").click();
                                    }
                                </script>
                                <form action="{{ route('ads.destroy', $usr->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" id="del{{ $usr->id }}" style="display: none"></button>
                                </form>
                            </center>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </br>

        <div class="card">
            <div class="container-fluid"><br/>
                <h3>Edit Iklan Slideshow untuk Merchant</h3>
                <hr/>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($ads->where('category', 'slideshow merchant') as $usrb)
                        <div class="col-4">
                            @if(empty($usrb->image))
                                <img src="{{ asset('assets/images/empty.jpg') }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @else
                                <img src="{{ asset(Storage::url($usrb->image)) }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @endif
                            <center>
                                <form action="{{ route('ads.update', $usrb->id) }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control" id="ssUser1">
                                    </div>
                                    <button type="submit" class="btn bg-primary btn-block "><font
                                            color="white">Ganti</font>
                                    </button>
                                    <a onclick="del{{ $usrb->id }}()" class="btn bg-danger btn-block "><font
                                            color="white">Delete</font>
                                    </a>
                                </form>
                                <script !src="">
                                    function del{{ $usrb->id }}() {
                                        $("#del{{ $usrb->id }}").click();
                                    }
                                </script>
                                <form action="{{ route('ads.destroy', $usrb->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" id="del{{ $usrb->id }}" style="display: none"></button>
                                </form>
                            </center>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </br>

        <div class="card">
            <div class="container-fluid"><br/>
                <h3>Edit Iklan Untuk Anggota</h3>
                <hr/>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($ads->where('category', 'ads member') as $usrc)
                        <div class="col-4">
                            @if(empty($usrc->image))
                                <img src="{{ asset('assets/images/empty.jpg') }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @else
                                <img src="{{ asset(Storage::url($usrc->image)) }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @endif
                            <center>
                                <form action="{{ route('ads.update', $usrc->id) }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control" id="ssUser1">
                                    </div>
                                    <button type="submit" class="btn bg-primary btn-block "><font
                                            color="white">Ganti</font>
                                    </button>
                                    <a onclick="del{{ $usrc->id }}()" class="btn bg-danger btn-block "><font
                                            color="white">Delete</font>
                                    </a>
                                </form>
                                <script !src="">
                                    function del{{ $usrc->id }}() {
                                        $("#del{{ $usrc->id }}").click();
                                    }
                                </script>
                                <form action="{{ route('ads.destroy', $usrc->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" id="del{{ $usrc->id }}" style="display: none"></button>
                                </form>
                            </center>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </br>
        <div class="card">
            <div class="container-fluid"><br/>
                <h3>Edit Iklan Home User</h3>
                <hr/>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($ads->where('category', 'ads home user') as $usrd)
                        <div class="col-4">
                            @if(empty($usrd->image))
                                <img src="{{ asset('assets/images/empty.jpg') }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @else
                                <img src="{{ asset(Storage::url($usrd->image)) }}" width="100%" height="200px"
                                     style="object-fit: cover">
                            @endif
                            <center>
                                <form action="{{ route('ads.update', $usrd->id) }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control" id="ssUser1">
                                    </div>
                                    <button type="submit" class="btn bg-primary btn-block "><font
                                            color="white">Ganti</font>
                                    </button>
                                    <a onclick="del{{ $usrd->id }}()" class="btn bg-danger btn-block "><font
                                            color="white">Delete</font>
                                    </a>
                                </form>
                                <script !src="">
                                    function del{{ $usrd->id }}() {
                                        $("#del{{ $usrd->id }}").click();
                                    }
                                </script>
                                <form action="{{ route('ads.destroy', $usrd->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" id="del{{ $usrd->id }}" style="display: none"></button>
                                </form>
                            </center>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </br>
    </div>
    <!-- /panel iklan -->

    <!-- panel iklan -->
    <div id="PengajuanIklan" class="tab-pane container-fluid fade mt-5">
        <div class="card">
            <div class="card-body">
                <center><h5>Daftar pengajuan iklan</h5></center>
                </br>
                <table class="table table-bordered">
                    <thead class="table-dark">
                    <tr>
                        <th>
                            <center>No</center>
                        </th>
                        <th>
                            <center>Nama Toko</center>
                        </th>
                        <th>
                            <center>Tanggal Pengajuan</center>
                        </th>
                        <th>
                            <center>Tanggal Acc</center>
                        </th>
                        <th>
                            <center>Iklan</center>
                        </th>
                        <th>
                            <center>Status</center>
                        </th>
                        <th>
                            <center>Aksi</center>
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reqAds as $index=>$req)
                        <tr>
                            <td>
                                <center> {{ $index+1 }}</center>
                            </td>
                            <td>
                                <center> {{ $req->ukm->merchant_name }}</center>
                            </td>
                            <td>
                                <center>{{ $req->created_at }}</center>
                            </td>
                            <td>
                                <center>{{ empty($req->acc)? 'Belum di ACC' : date('d-M-Y H:i', strtotime($req->acc) ) }}</center>
                            </td>
                            <td>
                                <center><img src='{{ asset(Storage::url($req->image)) }}' width="50px" height="50px">
                                </center>
                            </td>
                            <td>
                                <center><strong>{{ empty($req->acc)? 'Non-aktif' : 'aktif' }}</strong></center>
                            </td>
                            <td>
                                <center>
                                    <a href="{{ url('/admins/req/'.$req->id.'/download') }}">
                                        <button type="button" class="btn btn-success">Download</button>
                                    </a>
                                    |
                                    @if(empty($req->acc))
                                        <a href="{{ url('/admins/req/'.$req->id.'/acc') }}">
                                            <button type="button" class="btn btn-primary">ACC</button>
                                        </a>
                                    @endif
                                </center>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /panel iklan -->

    <!-- panel pengaturan -->
    <div id="pengaturan" class="tab-pane container-fluid fade mt-5">
        </br>
        <h1>Pengaturan Lainnya</h1>
        <hr/>

        <div class="card">
            <div class="container-fluid"><br/>
                <h3> Buat Banner User</h3>
                <hr/>
            </div>
            <div class="card-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="proses.php" method="POST">
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
                    </div>
                </div>
            </div>
        </div>

        </br>

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

        <div class="card">
            <div class="container-fluid"><br/>
            <h3> Buat Banner kategori</h3>
            <hr/>
            <div class="card-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="#" method="POST">
                        <div class="control-group after-add-mores">

                            <label>Masukan Nama</label>
                            <input type="text" name="Nama" class="form-control">

                            <label>Masukan Gambar</label>
                            <input type="file" name="gambar" class="form-control"></br>

                            <button class="btn btn-success add-mores" type="button">
                            <i class="glyphicon glyphicon-plus"></i> Add
                            </button>

                            <hr>

                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        </form>

                        <div class="copyk invisible">
                            <div class="control-group">
                                <label>Masukan Nama</label>
                                <input type="text" name="Nama" class="form-control">

                                <label>Masukan Gambar</label>
                                <input type="file" name="gambar" class="form-control"></br>
                                <button class="btn btn-danger removes" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>

                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </br>

        <script type="text/javascript">
            $(document).ready(function() {
            $(".add-mores").click(function(){
                var html = $(".copyk").html();
                $(".after-add-mores").after(html);
            });
            $("body").on("click",".removes",function(){
                $(this).parents(".control-group").remove();
            });
            });
        </script>

        <div class="card">
            <div class="container-fluid"><br/>
                <h3> Edit Profile Admin</h3>
                <hr/>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <form action="#">
                        <div class="form-group">
                            <label>Foto Profile : </label></br>
                            @if(empty($user->image))
                                <img src='assets/images/admin.png' width="100px" height="100px">
                            @else
                                <img src='{{ asset(Storage::url($user->image)) }}' width="100px" height="100px"
                                     style="object-fit: cover">
                            @endif
                            <input type="file"
                                   class="form-control-file border mr-2"
                                   id="fotoProfile">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" id="email"
                                   value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" id="pwd">
                        </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </br>
                </form>

            </div>
        </div>
    </div>
    </br>

</div>
<!-- /panel pengaturan -->
</div>


</br>


<center><p>Kisah Kreatif | Copyright 2020 © All Rights Reserved</p></center>
</body>
</html>


