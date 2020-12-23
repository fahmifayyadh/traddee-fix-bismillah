<!DOCTYPE html>
<html lang="en">
<head>
  <title>Treddee.com | Bantuan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/userStyle.css">
</head>
<body>
<!-- Header -->
<nav class="fixed-top">
<div class="boxHeader">
<div class="container-fluid">

        <div class="row">
            <div class="col-sm-3">

                <a class="txtLogo" href="{{ url('/') }}"><img src = 'assets/images/logo.png' class="imglogoHeader"> <font face="Tahoma" color="white" class="HdText" >Traddee.com</font> </a>
            </div>
        </div>
    </div>
</div>
</nav>
</br>
</br>
<!-- /header -->
<div class="boxBannerBantuan">
    <div class="container">
    <center><h1 class="hBtn"><font color="white">Hai, Silhakan hubungi kontak yang tertera untuk meminta bantuan.</font></h1></center></br>

    </div>
</div>

<div class="container">
  <br>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="pill" href="#bantuan">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#faq">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#kontak">Hubungi Kami</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="tab-content">
    <div id="bantuan" class="container tab-pane active"><br>
        <div class="card">
            <div class="card-body">
                Isi Tentang Kami
            </div>
        </div>
    </div>

    <div id="faq" class="container tab-pane fade"><br>
        <div class="card">
            <div class="card-body">

            </div>
        </div>
    </div>

    <div id="kontak" class="container tab-pane fade"><br>
        <div class="card">
            <div class="card-body">
                Isi Kontak
            </div>
        </div>
    </div>

  </div>
</div>





</br>
</br>
<footer>
  <center><p>Kisah Kreatif | Copyright 2020 © All Rights Reserved</p></center>
</footer>

</body>
</html>



