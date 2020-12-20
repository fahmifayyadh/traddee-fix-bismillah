<!DOCTYPE html>
<html lang="en">

<head>
    <title>TRADDEE.COM | Super Admin</title>
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

        table.scroll th,
        td {
            width: 25%;
            padding: 8px;
        }

    </style>
</head>

<body>

    <!-- modal Detail Merchants -->
    @foreach($merch as $merc)
        <div class="modal fade" id="detailMerch{{ $merc->id }}">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form action="/action_page.php">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nama Toko"
                                    value="{{ $merc->merchant_name }}" name="merchant_name" id="namaToko" readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nama Pemilik" id="namaPemilik"
                                    value="{{ $merc->user->name }}" readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="ID toko" id="IdToko"
                                    value="{{ $merc->id }}" readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="ID Anggota" id="IdAnggota"
                                    value="{{ $merc->user->id }}" name="user_id">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Followers" id="Followers"
                                    value="{{ App\User::where('referal_id', $merc->user->id)->count() }}"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Kode Referal" id="Refereal"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Point" id="point">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Bonus" id="bonus">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nomer Rekening" id="Rekening"
                                value="{{$merc->debit}}"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nama Bank" id="namaBank" readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nomer Telepon"
                                value="{{ $merc->user->phone }}" id="Tlp" readonly>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endforeach

    <!-- / Modal Detail Merch -->



    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <img src="assets/images/admin.png" class="imgAdmin">
        <font color="white" size="4"> | Super Admin</font>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="nav pills ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <font color="red">Logout</font>
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>
            </ul>
        </div>
    </nav>
    </br>
    </br>
    </br>

    </br>

    <div class="container-fluid">

        <div class="row">
            <div class="col-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3>
                            <font color="white">Aktivitas Admin</font>
                        </h3>
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <center>
                                            <h1>{{ date('H:i', strtotime($now)) }}<h1>
                                                    <h5>{{ date('d-M-Y', strtotime($now)) }}
                                                    </h5>
                                                    <hr />
                                                    <h5><strong>Waktu saat ini</strong>
                                                        <h5>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <center>
                                            <h1>{{ date('H:i', strtotime($user->updated_at)) }}
                                                <h1>
                                                    <h5>{{ date('d-M-Y', strtotime($user->updated_at )) }}
                                                    </h5>
                                                    <hr />
                                                    <h5><strong>Update terakhir</strong>
                                                        <h5>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Jumlah pengajuan iklan ke Admin</h5>
                        <hr />
                        <h3>
                            <font size="150">{{ $reqAds->count() }}</font>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Jumlah iklan yang sudah di acc oleh admin</h5>
                        <hr />
                        <h3>
                            <font size="150">
                                {{ $reqAds->where('acc', '<>', null)->count() }}
                            </font>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </br>

        <hr />
        <div class="card">
            <div class="card-body">
                <center>
                    <h5>Daftar pengajuan iklan ke admin</h5>
                </center>
                </br>
                </br>
                <form class="form-inline" action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Cari">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
                </br>
                <table cellspacing="0" class="scroll">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Toko</th>
                            <th>Tanggal Pengjuan</th>
                            <th>Tanggal Acc</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reqAds as $index=>$req)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $req->ukm->merchant_name }}</td>
                                <td>{{ $req->created_at }}</td>
                                <td>{{ empty($req->acc)?'belum di acc': $req->acc }}
                                </td>
                                <td><strong>{{ empty($req->acc)?'tidak aktif': 'aktif' }}</strong>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        </br>
        <hr />
        <div class="card">
            <div class="card-body">
                <center>
                    <h5>Daftar Anggota/Merchants/Toko</h5>
                </center>
                </br>
                </br>
                <form class="form-inline" action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Cari">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
                </br>
                <table cellspacing="0" class="scroll">
                    <thead>
                        <tr>
                            <th>Nama Toko</th>
                            <th>ID Toko</th>
                            <th>ID Anggota</th>
                            <th>ID Referal</th>
                            <th>Aksi</th>
                            <th></th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach($merch as $merchant)
                            <tr>
                                <td>{{ $merchant->merchant_name }}</td>
                                <td>{{ $merchant->id }}</td>
                                <td>{{ $merchant->user->id }}</td>
                                <td>{{ $merchant->user->referal_id }}</td>
                                <td><button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#detailMerch{{ $merchant->id }}">Detail</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        </br>
        <hr />
        <div class="card">
            <div class="card-body">
                <center>
                    <h5>Daftar Pengajuan penarikan bonus</h5>
                </center>
                </br>
                </br>
                <form class="form-inline" action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Cari">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
                </br>
                <table cellspacing="0" class="scroll">
                    <thead>
                        <tr>
                            <th>Nama Toko</th>
                            <th>ID Anggota</th>
                            <th>Nama Bank</th>
                            <th>Nomer Rekening</th>
                            <th>Aksi</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Toko A</td>
                            <td>0000011</td>
                            <td>Bri</td>
                            <td>123232322332233443</td>
                            <td><button type="button" class="btn btn-success">approve</button></td>
                        </tr>
                        <tr>
                            <td>Toko A</td>
                            <td>0000011</td>
                            <td>Bri</td>
                            <td>123232322332233443</td>
                            <td><button type="button" class="btn btn-success">approve</button></td>
                        </tr>
                        <tr>
                            <td>Toko A</td>
                            <td>0000011</td>
                            <td>Bri</td>
                            <td>123232322332233443</td>
                            <td><button type="button" class="btn btn-success">approve</button></td>
                        </tr>
                        <tr>
                            <td>Toko A</td>
                            <td>0000011</td>
                            <td>Bri</td>
                            <td>123232322332233443</td>
                            <td><button type="button" class="btn btn-success">approve</button></td>
                        </tr>
                        <tr>
                            <td>Toko A</td>
                            <td>0000011</td>
                            <td>Bri</td>
                            <td>123232322332233443</td>
                            <td><button type="button" class="btn btn-success">approve</button></td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

        </br>
        <hr />
        <div class="card">
            <div class="card-body">
                <center>
                    <h5>Histrory Penarikan Bonus</h5>
                </center>
                </br>
                <form class="form-inline" action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Cari">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
                </br>
                <table cellspacing="0" class="scroll">
                    <thead>
                        <tr>
                            <th>Nama Toko</th>
                            <th>ID Anggota</th>
                            <th>tanggal pengajuan</th>
                            <th>Tanggal Approve</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Toko A</td>
                            <td>0000011</td>
                            <td>12/12/2020</td>
                            <td>12/12/2020</td>

                        </tr>
                        <tr>
                            <td>Toko A</td>
                            <td>0000011</td>
                            <td>12/12/2020</td>
                            <td>12/12/2020</td>
                        </tr>
                        <tr>
                            <td>Toko A</td>
                            <td>0000011</td>
                            <td>12/12/2020</td>
                            <td>12/12/2020</td>
                        </tr>
                        <tr>
                            <td>Toko A</td>
                            <td>0000011</td>
                            <td>12/12/2020</td>
                            <td>12/12/2020</td>
                        </tr>
                        <tr>
                            <td>Toko A</td>
                            <td>0000011</td>
                            <td>12/12/2020</td>
                            <td>12/12/2020</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </br>
    <center>
        <p>Kisah Kreatif | Copyright 2020 © All Rights Reserved</p>
    </center>
</body>

</html>
