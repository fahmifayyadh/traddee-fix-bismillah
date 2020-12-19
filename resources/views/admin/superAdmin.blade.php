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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
                <input type="text" class="form-control" placeholder="ID Anggota" id="IdAnggota">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Followers" id="Followers" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Kode Referal" id="Refereal" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Point" id="point">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Bonus" id="bonus">
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
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
        </div>
        
      </div>
    </div>
  </div>
<!-- / Modal Detail Merch -->


<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <img src="assets/images/admin.png" class="imgAdmin"> <font color="white" size="4"> | Super Admin</font>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="nav pills ml-auto">
    
            <li class="nav-item">
                <a class="nav-link" href="LandingPages"><font color="red">Logout</font></a>
            </li>
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
                    <h3><font color="white">Aktivitas Admin</font></h3>
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                    <center>
                                        <h1>20.00<h1>
                                        <h5>16-12-2020</h5>
                                        <hr/>
                                        <h5><strong>Login Terakhir</strong><h5>
                                    </center>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                    <center>
                                        <h1>20.45<h1>
                                        <h5>16-12-2020</h5>
                                        <hr/>
                                        <h5><strong>Logout Terakhir</strong><h5>
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
                    <h5>Jumlah pengajuan iklan ke Admin</h5><hr/>
                    <h3><font size="150">100</font></h3>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5>Jumlah iklan yang sudah di acc oleh admin</h5><hr/>
                    <h3><font size="150">100</font></h3>
                </div>
            </div>
        </div>
    </div>
    </br>
<hr/>
<div class="card">
    <div class="card-body">
        <center><h5>Daftar pengajuan iklan ke admin</h5></center>
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
			<tr>
				<td>1</td>
				<td>Toko A</td>
				<td>12/12/2020</td>
                <td>12/12/2020</td>
                <td><strong>Aktif</strong></td>
			</tr>
            <tr>
				<td>2</td>
				<td>Toko A</td>
				<td>12/12/2020</td>
                <td>12/12/2020</td>
                <td><strong>Aktif</strong></td>
			</tr>
            <tr>
				<td>3</td>
				<td>Toko A</td>
				<td>12/12/2020</td>
                <td>12/12/2020</td>
                <td><strong>Aktif</strong></td>
			</tr>
            <tr>
				<td>4</td>
				<td>Toko A</td>
				<td>12/12/2020</td>
                <td>12/12/2020</td>
                <td><strong>Aktif</strong></td>
			</tr>
            <tr>
				<td>5</td>
				<td>Toko A</td>
				<td>12/12/2020</td>
                <td>12/12/2020</td>
                <td><strong>Aktif</strong></td>
			</tr>
			
		</tbody>
	</table>

</div>
</div>
</br>
<hr/>
<div class="card">
    <div class="card-body">
        <center><h5>Daftar Anggota/Merchants/Toko</h5></center>
        </br>
        </br>
        <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Cari">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
        </br>
        <table cellspacing="0" class="scroll">
            <thead >
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
            <tr>
                <td>Toko A</td>
                <td>0000011</td>
                <td>0000011</td>
                <td>1223233</td>
                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#detailMerch" >Detail</button></td>
            </tr>
            <tr>
                <td>Toko A</td>
                <td>0000011</td>
                <td>0000011</td>
                <td>1223233</td>
                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#detailMerch">Detail</button></td>
            </tr>
            <tr>
                <td>Toko A</td>
                <td>0000011</td>
                <td>0000011</td>
                <td>1223233</td>
                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#detailMerch">Detail</button></td>
            </tr>
            <tr>
                <td>Toko A</td>
                <td>0000011</td>
                <td>0000011</td>
                <td>1223233</td>
                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#detailMerch">Detail</button></td>
            </tr>
            <tr>
                <td>Toko A</td>
                <td>0000011</td>
                <td>0000011</td>
                <td>1223233</td>
                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#detailMerch">Detail</button></td>
            </tr>

            
            </tbody>
        </table>
    </div>
</div>

</br>
<hr/>
<div class="card">
    <div class="card-body">
        <center><h5>Daftar Pengajuan penarikan bonus</h5></center>
        </br>
        </br>
        <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Cari">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
        </br>
        <table cellspacing="0" class="scroll">
            <thead >
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
                <td><button type="button" class="btn btn-success" >approve</button></td>
            </tr>
            <tr>
                <td>Toko A</td>
                <td>0000011</td>
                <td>Bri</td>
                <td>123232322332233443</td>
                <td><button type="button" class="btn btn-success" >approve</button></td>
            </tr>
            <tr>
                <td>Toko A</td>
                <td>0000011</td>
                <td>Bri</td>
                <td>123232322332233443</td>
                <td><button type="button" class="btn btn-success" >approve</button></td>
            </tr>
            <tr>
                <td>Toko A</td>
                <td>0000011</td>
                <td>Bri</td>
                <td>123232322332233443</td>
                <td><button type="button" class="btn btn-success" >approve</button></td>
            </tr>
            <tr>
                <td>Toko A</td>
                <td>0000011</td>
                <td>Bri</td>
                <td>123232322332233443</td>
                <td><button type="button" class="btn btn-success" >approve</button></td>
            </tr>

            
            </tbody>
        </table>
    </div>
</div>

</br>
<hr/>
<div class="card">
    <div class="card-body">
        <center><h5>Histrory Penarikan Bonus</h5></center>
        </br>
        <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Cari">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
        </br>
        <table cellspacing="0" class="scroll">
            <thead >
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
  <center><p>Kisah Kreatif | Copyright 2020 © All Rights Reserved</p></center>
</body>
</html>


