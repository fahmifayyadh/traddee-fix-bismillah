@extends('layouts.guest')
@section('title', 'SEARCH | Traddee.com')
@section('content')



<div class="boxHeaderProfileMerc2">


        <div class="container-fluid">
        </div>
</div>
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
                            

                            <label class="srtKT">Kota</label>
                                <select name="kota" class="custom-select">
                                    <option selected class="srtSKT">Kota Bekasi</option>
                                    <option class="srtSKT">Kab Bekasi</option>
                                    <option class="srtSKT">Kota Bandung</option>
                                </select>
                            

                            <label class="srtKT">Kecamatan - Kelurahan</label>
                                <select name="kecamatan" class="custom-select">
                                    <option selected class="srtSKT">Bekasi Timur</option>
                                    <option class="srtSKT">Mustika Jaya</option>
                                    <option class="srtSKT">Pekayon</option>
                                </select>


                            </br>
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
                            </br>
                            <button type="button" class="btn btn-success" >Sorting</button>                                
                            </form>

</div>

<div class="col-6">
            <h3 class="srtKTSU">Hasil Pencarian :  <button type="button" class="btn btn-outline-dark" disabled>Toko</button> <button type="button" class="btn btn-outline-dark" disabled>Toko Busana Aqila</button></h3>
            <h3 class="srtKTSU">Hasil Sorting : <button type="button" class="btn btn-outline-primary" disabled>Jakarta</button> <button type="button" class="btn btn-outline-primary" disabled>Jakarta Barat</button> <button type="button" class="btn btn-outline-primary" disabled>Kecamatan - Kelurahan</button> <button type="button" class="btn btn-outline-danger" disabled>A-H</button></h3>
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


@endsection
