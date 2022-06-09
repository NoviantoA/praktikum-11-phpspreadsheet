<?php
$servername = "localhost";
$username = "root";
$password = "";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password);

// check koneksi
if(!$conn){
    die("Koneksi Gagal : " . mysqli_connect_error());
}
// membuat database
$sql = "CREATE DATABASE IF NOT EXISTS db_siswa";
if(mysqli_query($conn, $sql)){
    echo "Database Berhasil Dibuat";
}else {
    echo "Error Membuat Database" . mysqli_connect_error($conn);
}
// membuat tabel siswa
$sql = "CREATE TABLE tb_siswa ('id_siswa' int(11) NOT NULL,
'nama' varchar(255) NOT NULL,
'kelas' varchar(100) NOT NULL,
'alamat' varchar(255) NOT NULL)";

// insert data ke tabel tb_siswa
$sql = "INSERT INTO tb_siswa ('id_siswa', 'nama', 'kelas', 'alamat') VALUES 
(1, 'Budi Susanto', '1MM3', 'Sedati Gede'),
(2, 'Dita Anggraini', '1MM2', 'Rungkut'),
(3, 'Riska Nur Anini', '3MM1', 'Wonocolo'),
";
mysqli_close($conn);
?>