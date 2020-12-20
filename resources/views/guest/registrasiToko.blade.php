<!DOCTYPE html>
<html lang="en">

<head>
    <title>REGISTER | Traddee.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/userStyle.css">
</head>

<body>
    <section>
        <!-- Header Text -->

        <div class="boxLanding">

            <div class="boxRegist">
                <div class="container-fluid"></br>
                    <center>
                        <h1 class="hdFmRg">Isi Form Pendaftaran</h1>
                    </center>
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
                    <hr />
                    <form action="{{ route('regist.form') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="text">Nama Pemilik : </label></br>
                                    <input type="text" class="form-control" id="namaToko"
                                        placeholder="Masukan Nama Lengkap" name="name"
                                        value="{{ old('name') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="text">NO Tlp/WA : </label></br>
                                    <input type="text" class="form-control" id="namaToko" placeholder="Masukan Nomer Hp"
                                        name="phone" value="{{ old('phone') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email"
                                        value="{{ old('email') }}" class="form-control"
                                        placeholder="masukkan email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password"
                                        value="{{ old('password') }}" class="form-control"
                                        placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="text">ID Pengajak : </label></br>
                                    <input type="text" class="form-control" id="namaToko"
                                        placeholder="Masukan ID PENGAJAK"
                                        value="{{ old('referal_id') }}" name="referal_id" required>
                                </div>

                            </div>
                            <div class="col-6">

                                <div class="form-group">
                                    <label for="merchant_name">Nama merchant</label>
                                    <input class="form-control" type="text" name="merchant_name" id="merchant_name"
                                        value="{{ old('merchant_name') }}" placeholder="Nama Merchant"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Alamat Toko : </label></br>
                                    <select name="provinsi" class="custom-select form-control" id="province" required>
                                        <option selected>Pilih provinsi</option>
                                    </select><br><br>
                                    <select name="city" class="custom-select form-control" id="city" required>
                                        <option>Pilih kabupaten /kota</option>
                                    </select><br><br>
                                    <select name="district" class="custom-select form-control" id="district" required>
                                        <option selected>Pilih kecamatan - Kelurahan</option>
                                    </select><br><br>
                                    <input type="text" class="form-control" id="namaToko" placeholder="masukkan kembali Kelurahan / Desa"
                                        name="village" value="{{ old('village') }}" required></br>
                                    <input type="text" class="form-control" id="namaToko" placeholder="Alamat"
                                        name="address" value="{{ old('address') }}" required>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <button type="submit" class="btn btn-primary btn-block">DAFTAR SEKARANG</button>
                    </form>
                </div>

            </div>
            </form>
        </div>
        </div>


        </div>

        <!-- tutup Header Text -->

        <script>
            $(document).ready(() => {
                $.ajax({
                    method: "get",
                    url: "https://kodepos-2d475.firebaseio.com/list_propinsi.json?print=pretty",
                    dataType: "Json",
                    success: function (data, textStatus, jqXHR) {

                        $.each(data, (item, dt) => {
                            var province = ['<option value="' + item + '">' + dt +
                                '</option>'
                            ];
                            $('#province').append(province);
                            // console.log(dt);
                        });


                        //data - response from server
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('error :' + textStatus);
                        console.log(errorThrown);

                    }
                });

                $('select#province').change(() => {
                    $('#city').empty();
                    $('#city').html('<option>Pilih kabupaten /kota</option>');
                    var prov = $("#province").val();

                    $.ajax({
                        method: "get",
                        url: "https://kodepos-2d475.firebaseio.com/list_kotakab/" + prov +
                            ".json?print=pretty",
                        dataType: "Json",
                        success: function (data, textStatus, jqXHR) {


                            $.each(data, (item, ct) => {
                                var city = ['<option value="' + item + '">' + ct +
                                    '</option>'
                                ];
                                $('#city').append(city);
                            });


                            //data - response from server
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            alert('error :' + textStatus);
                            console.log(errorThrown);

                        }
                    });

                });

                $('select#city').change(() => {
                    $('#district').empty();
                    $('#district').html('<option>Pilih Kecamatan</option>');
                    var citys = $("#city").val();
                    console.log(citys);

                    $.ajax({
                        method: "get",
                        url: "https://kodepos-2d475.firebaseio.com/kota_kab/"+ citys +".json?print=pretty",
                        dataType: "Json",
                        success: function (data, textStatus, jqXHR) {

                            $.each(data, (item, ct) => {
                                var district = ['<option value="' + item + '">' + ct.kecamatan + ' - ' + ct.kelurahan+
                                    '</option>'
                                ];
                                $('#district').append(district);
                                console.log(ct);
                            });


                            //data - response from server
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            alert('error :' + textStatus);
                            console.log(errorThrown);

                        }
                    });

                })
            })

        </script>
    </section>
    <footer>
        <center>
            <p>Kisah Kreatif | Copyright 2020 © All Rights Reserved</p>
        </center>
    </footer>

</body>

</html>
