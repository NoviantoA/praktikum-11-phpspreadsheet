<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_siswa";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check koneksi
if(!$conn){
    die("Koneksi Gagal : " . mysqli_connect_error());
}

// insert data ke tabel tb_siswa
$sql = "INSERT INTO tb_siswa (id_siswa, nama, kelas, alamat) VALUE
(1, 'Budi Susanto', 'IMM3', 'Sedati Gede'),
(2, 'Dita Anggraini', 'IMM2', 'Rungkut'),
(3, 'Riska Nur Aini', '3mm1', 'Wonocolo')";

    if(mysqli_query($conn, $sql)){
        echo "Proses Insert Data Berhasil";
    }else{
        echo "Error Insert Data" . $sql. "<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
mysqli_close($conn);
?>