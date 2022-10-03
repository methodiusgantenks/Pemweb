<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php 
    require_once "menu.php";
    include "koneksi.php";
    if (isset($_POST['nama'])AND isset($_POST['hp'])AND isset($_POST['tanggal'])AND isset($_POST['kewarganegaraan'])AND isset($_POST['jenis_kelamin'])AND isset($_POST['alamat'])AND isset($_POST['nik'])){
        $nama = $_POST['nama'];
        $hp = $_POST['hp'];
        $tanggal = $_POST['tanggal'];
        $kewarganegaraan = $_POST['kewarganegaraan'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $nik = $_POST['nik'];
        $querySQL ="INSERT INTO data_mahasiswa (nama, hp, tanggal, kewarganegaraan, jenis_kelamin, alamat, nik) VALUES ('$nama','$hp','$tanggal','$kewarganegaraan','$jenis_kelamin','$alamat',$nik)";   
        $execSQL = mysqli_query($koneksi,$querySQL); 
        
    }
?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-sm-12">
            <p>
                <?php
                if ($execSQL){
                    $lastId = mysqli_insert_id($koneksi);
                    echo "data berhasil diinput kedalam database";
                }
                else{
                    echo "data gagal diinput";
                }
                ?>
            </p>
        </div>
    </div>
</div>
</body>
</html>


