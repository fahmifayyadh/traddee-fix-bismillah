@extends('layouts.guest')
@section('title', 'MERCHANTS | '.$ukm->merchant_name.' | Traddee.com')
@section('content')

<div class="boxHeaderProfileMerc">

        <!-- iklan slide show -->
        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- The slideshow -->
          <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src = '{{ asset('assets/images/aqilabg.jpg') }}' class="imgHeaderProfileMerc">
                </div>
          </div>

        <!-- tutup iklan slide show -->

      <!-- txt Slide Show -->

      <div class="container-fluid">
       <div class="ProfileHeader">
         <div class="row">
           <div class="col-3">
              <img src ="{{ asset('assets/images/user.png') }}" class="imgProfileMerc">
           </div>

           <div class="col-9">
              <p class="txtProfileMerch1">TOKO {{$ukm->merchant_name}}</p>
              <p class="txtProfileMerch2">ID : {{ $ukm->id}}</p>
           </div>
         </div>
       </div>

      </div>
      <!-- / txt Slide Show -->
</div>

<div class="boxMainProfileMerc">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
          <div class="boxIklanToko">
          Iklan dari Toko
          </div>
      </div>

      <div class="col-6">
          <div class="boxIklanToko">
          Iklan dari Toko
          </div>
      </div>

    </div>
</br>
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#profil">Profil Toko</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#chat">Chat</a>
                    </li>
                  </ul>

                  <div class="tab-content">
                    <div id="profil" class="container tab-pane active"><br>
                    <p>Nama Toko : {{ $ukm->merchant_name }}</p>
                    <p>Id Toko : {{ $ukm->id }}</p>
                    <p>Alamat Toko : {{ $ukm->address.' - '.$ukm->district.' - '.$ukm->city.' - '.$ukm->province }}</p>
                    <p>Nama Pemilik Toko : {{ $ukm->user->name }}</p>
                    <p>Link Iframe : </p>
                        <h3 class="txtLokMerch">Lokasi</h3>
                          <div class="container-fluid">
                            <center>
                                {!! $ukm->iframe !!}
                            </center>
                          </div>
                    </div>

                    <div id="produk" class="container tab-pane fade"><br>

                    <form class="form" action="/action_page.php">
                        <div class="input-group mb-3" id="Src">
                            <input type="text" class="form-control" placeholder="Cari di toko ini">
                            <div class="input-group-append">
                                <span class="btn bg-warning">Search</span>
                            </div>
                        </div>
                    </form>

                        <div class="row">

                            @foreach($ukm->product as $product)
                        <div class="col-3">
                        <center>
                          <img src = '{{ empty($product->image) }}' id="imgTokoMerch" class="img-thumbnail btn btn-light" data-toggle="modal" data-target="#myModalbarang"  ></br>
                          <p class="txtTokoMerc"> {{ $product->name }}</p>
                        </center>
                        </div>
                    </div>
                    <div id="chat" class="container tab-pane fade"><br>

                          <div class="row">
                            <div class="col-6">
                                  <h1 class="txtChatMerch">Chat Via Wahtsapp</h1>
                                  <button type="button" class="btn btn-success">Chat</button>
                            </div>
                            <div class="col-6">
                                <h1  class="txtChatMerch">Chat disini</h1>
                                <form action="#">
                                  <div class="form-group">
                                  <input type="text" class="form-control" id="namaUser" placeholder="Nama">
                                  </div>
                                  <div class="form-group">
                                  <input type="text" class="form-control" id="noUser" placeholder="No Tlp">
                                  </div>
                                  <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#modalChat">Chat</button>
                                </form>
                            </div>
                          </div>

                  </div>


    </div>
  </div>
</div>


@endsection
