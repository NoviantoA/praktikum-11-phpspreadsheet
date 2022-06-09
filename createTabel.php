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
// membuat tabel siswa
$sql = "CREATE TABLE tb_siswa (
    id_siswa INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    kelas VARCHAR(100) NOT NULL,
    alamat VARCHAR(255) NOT NULL)";

    if(mysqli_query($conn, $sql)){
        echo "Tabel Berhasil Dibuat";
    }else{
        echo "Error Membuat Tabel" . $sql. "<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
mysqli_close($conn);
?>