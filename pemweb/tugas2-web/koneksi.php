<?php 
$namaserver = "localhost";
$username = "root";
$password = "";
$namadb = "tugasweb22";

//Buat koneksi
$koneksi = mysqli_connect($namaserver,$username,$password,$namadb);
//cek koneksi
if (!$koneksi) {
    die ("Gagal melakukan koneksi ke database. " . mysqli_connect_error());
}
?>