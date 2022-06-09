<?php
    if(isset($_POST['Submit'])){
        $vnama = $_POST['nama'];
        $vjkel = $_POST['jkel'];
        $vnisn  = $_POST['nisn'];
        $vnik = $_POST['nik'];
        $vtempat_lahir  = $_POST['tempat_lahir'];
        $vtanggal_lahir  = $_POST['tanggal_lahir'];
        $vagama  = $_POST['agama'];
        $vkeb_khusus  = $_POST['keb_khusus'];
        $valamat_jalan  = $_POST['alamat_jalan'];
        $vrt  = $_POST['rt'];
        $vrw  = $_POST['rw'];
        $vdusun  = $_POST['dusun'];
        $vkelurahan  = $_POST['kelurahan'];
        $vkecamatan  = $_POST['kecamatan'];
        $vkode_pos  = $_POST['kode_pos'];
        $vtempat_tinggal  = $_POST['tempat_tinggal'];
        $vtransportasi  = $_POST['transportasi'];
        $vhp  = $_POST['hp'];
        $vtelp  = $_POST['telp'];
        $vemail  = $_POST['email'];
		
		// koneksi ke file database
		include_once("koneksi.php");
				
		// Masukkan data ke tabel database
		$sql = mysqli_query($conn, "INSERT INTO pendaftaran (nama, jkel, nisn, nik, tempat_lahir,
        tanggal_lahir, agama, keb_khusus, alamat_jalan, rt, rw, dusun, kelurahan, kecamatan, kode_pos, tempat_tinggal,
        transportasi, hp, telp, email) VALUES('$vnama', '$vjkel', '$vnisn', '$vnik', '$vtempat_lahir','$vtanggal_lahir', '$vagama', 
        '$vkeb_khusus', '$valamat_jalan','$vrt',  '$vrw',  '$vdusun', '$vkelurahan', '$vkecamatan',  '$vkode_pos', '$vtempat_tinggal',
        '$vtransportasi', '$vhp', '$vtelp', '$vemail')");

        if($sql){

            header("location:proses.php");
        }else{
            echo "Error";
        }
       
    }
?>