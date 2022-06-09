<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Formulir Peserta Didik</title>
    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- datetimepicker -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- font awensome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jquey -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>

</head>

<body>

    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <h2 class="alert alert-primary text-center mt-3">FORMULIR PESERTA DIDIK</h2>
                <div class="panel-body">
                    <form class="form-horizontal" action="insertData.php" method="post">
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Nama
                                Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="nis"
                                    placeholder="Nama Lengkap...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="jenisPendaftaran" class="col-sm-2 col-form-label" style="font-size: 18px;">Jenis
                                Kelamin</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jkel" id="inlineRadio1"
                                        value="Laki-laki">
                                    <label class="form-check-label" for="inlineRadio1"><i class="fa fa-male"
                                            aria-hidden="true"></i>
                                        Laki-laki </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jkel" id="inlineRadio2"
                                        value="Perempuan">
                                    <label class="form-check-label" for="inlineRadio2"><i class="fa fa-female"
                                            aria-hidden="true"></i>
                                        Perempuan</label>
                                </div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"> &nbsp;</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">NISN</label>
                            <div class="col-sm-10">
                                <input type="text" name="nisn" class="form-control" id="nis" placeholder="NISN...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" name="nik" class="form-control" id="nis" placeholder="NIK...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Tempat
                                Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" name="tempat_lahir" class="form-control" id="nis"
                                    placeholder="Tempat Lahir...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="row form-group">
                                <label for="jenisPendaftaran" class="col-sm-2 col-form-label"
                                    style="font-size: 18px;">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <div class="input-group date" id="datepicker2">
                                        <input type="text" class="form-control" name="tanggal_lahir">
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">Agama</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="agama">
                                    <option>Pilih...</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen/ Protestan">Kristen/ Protestan</option>
                                    <option value="Khatolik">Khatolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Khong Hu Chu">Khong Hu Chu</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Kebutuhan
                                Khusus</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="keb_khusus">
                                    <option>Pilih...</option>
                                    <option value="Tidak Ada">Tidak Ada</option>
                                    <option value="Netra">Netra</option>
                                    <option value="Rungu">Rungu</option>
                                    <option value="Grahita Ringan">Grahita Ringan</option>
                                    <option value="Grahita Sedang">Grahita Sedang</option>
                                    <option value="Daksa Ringan">Daksa Ringan</option>
                                    <option value="Daksa Sedang">Daksa Sedang</option>
                                    <option value="Laras">Laras</option>
                                    <option value="Wicara">Wicara</option>
                                    <option value="Tuna Ganda">Tuna Ganda</option>
                                    <option value="Hiper Aktif">Hiper Aktif</option>
                                    <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                                    <option value="Bakat Istimewa">Bakat Istimewa</option>
                                    <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                    <option value="Narkoba">Narkoba</option>
                                    <option value="Indigo">Indigo</option>
                                    <option value="Down Sindrome">Down Sindrome</option>
                                    <option value="Autis">Autis</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Alamat
                                Jalan</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat_jalan" class="form-control" id="nis"
                                    placeholder="Alamat Jalan...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">RT</label>
                            <div class="col-sm-2">
                                <input type="text" name="rt" class="form-control" id="nis" placeholder="RT...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">RW</label>
                            <div class="col-sm-2">
                                <input type="text" name="rw" class="form-control" id="nis" placeholder="RW...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Nama
                                Dusun</label>
                            <div class="col-sm-10">
                                <input type="text" name="dusun" class="form-control" id="nis"
                                    placeholder="Nama Dusun...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Nama
                                Kelurahan Desa</label>
                            <div class="col-sm-10">
                                <input type="text" name="kelurahan" class="form-control" id="nis"
                                    placeholder="Nama Kelurahan Desa...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">Kecamatan</label>
                            <div class="col-sm-10">
                                <input type="text" name="kecamatan" class="form-control" id="nis"
                                    placeholder="Kecamatan...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Kode
                                Pos</label>
                            <div class="col-sm-10">
                                <input type="text" name="kode_pos" class="form-control" id="nis"
                                    placeholder="Kode Pos...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Tempat
                                Tinggal</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="tempat_tinggal">
                                    <option>Pilih...</option>
                                    <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                                    <option value="Wali">Wali</option>
                                    <option value="Kos">Kos</option>
                                    <option value="Asrama">Asrama</option>
                                    <option value="Panti Asuhan">Panti Asuhan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Modal
                                Transportasi</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="transportasi">
                                    <option>Pilih...</option>
                                    <option value="Jalan Kaki">Jalan Kaki</option>
                                    <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                    <option value="Kendaraan Umum/ Angkot/ Pete-pete">Kendaraan Umum/ Angkot/ Pete-pete
                                    </option>
                                    <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                                    <option value="Kereta Api">Kereta Api</option>
                                    <option value="Ojek">Ojek</option>
                                    <option value="Andong/ Bendi/ Sado/ Dokar/ Delman/ Becak">Andong/ Bendi/ Sado/
                                        Dokar/ Delman/ Becak</option>
                                    <option value="Perahu Penyebrangan/ Rakit/ Getek">Perahu Penyebrangan/ Rakit/ Getek
                                    </option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Nomor
                                HP</label>
                            <div class="col-sm-10">
                                <input type="text" name="hp" class="form-control" id="nis" placeholder="Nomor HP...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Nomor
                                Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" name="telp" class="form-control" id="nis"
                                    placeholder="Nomor Telepon...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Email
                                Pribadi</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="nis" placeholder="Email...">
                            </div>
                        </div>
                        <br>
                        <button type="submit" name="Submit" class="btn btn-primary"
                            style="margin-left: 500px; width:200px"><a href="proses.php"></a>
                            Submit</a>
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>

                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
    $(function() {
        $('#datepicker2').datepicker();
    });
    </script>
</body>

</html>