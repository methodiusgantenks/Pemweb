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
?>

<div class="container-fluid mt-3">
  <h3>Pendaftaran</h3>
  <p>Jalur Pendaftaran Anda: Tahun Akademik 2023/2024 - PMB Reguler Rapor Gelombang 1 - PMB - Reguler Rapor Gelombang 1 (Reguler).</p>

  <div class="container mt-3">
  <h5>Input Data Diri Calon Mahasiswa</h5>
    <table class="table table-hover">
      <tbody>
        <tr>
            <div class ="col-md-3">Nama Lengkap</div>
            <div class ="col-md-9">
                <form action="simpan-insert.php"method="post">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="nama" placeholder="input nama" name="nama">
                        <label for="nama">Isi Nama Anda</label>
                    </div>
            </div>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="container mt-3">
    <table class="table table-hover">
      <tbody>
        <tr>
            <div class ="col-md-3">No. HP</div>
            <div class ="col-md-9">
                <form action="simpan-insert.php"method="post">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="hp" placeholder="input hp" name="hp">
                        <label for="hp">Isi No HP Anda</label>
                    </div>  
              </div>
        </tr>
      </tbody>
    </table>
  </div>


  <div class="container mt-3">
    <table class="table table-hover">
      <tbody>
        <tr>
            <div class ="col-md-3">Tanggal Lahir</div>
            <tr>
              <td><input type="date" name="tanggal"></td>
              </tr>
            <!-- <div class ="col-md-9">
                <form action="simpan-insert.php"method="post">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="tahun" placeholder="input tanggal" name="tanggal">
                        <label for="tanggal">Isi Tanggal lahir anda</label>
                    </div>
            </div> -->
        </tr>
      </tbody>
    </table>
  </div>

  <div class="container mt-3">
    <table class="table table-hover">
      <tbody>
        <tr>
            <div class ="col-md-3">Kewarganegaraan</div>
            <div class ="col-md-9">
                <form action="simpan-insert.php"method="post">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="kewarganegaraan" placeholder="input kewarganegaraan" name="kewarganegaraan">
                        <label for="tahun">Isi Kewarganegaraan anda</label>
                    </div>
              </div>
        </tr>
      </tbody>
    </table>
  </div>


  <div class="container mt-3">
    <table class="table table-hover">
      <tbody>
        <tr>
            <div class ="col-md-3">Jenis Kelamin</div>
                          <div class="form-check mb-3 mt-3">
                          <input type="radio" class="form-check-input fw-bold" id="jenis_kelamin" name="jenis_kelamin" value="laki-laki" checked>Laki-laki
                          <label class="form-check-label" for="jenis_kelamin"></label>
                      </div>
                      <div class="form-check mb-3 mt-3">
                          <input type="radio" class="form-check-input" id="jenis_kelamin" name="jenis_kelamin" value="wanita">Perempuan
                          <label class="form-check-label" for="jenis_kelamin"></label>
                      </div>

        </tr>
      </tbody>
    </table>
  </div>

  <div class="container mt-3">
    <table class="table table-hover">
      <tbody>
        <tr>
            <div class ="col-md-3">Alamat Email</div>
            <div class ="col-md-9">
                <form action="simpan-insert.php"method="post">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="alamat" placeholder="input alamat" name="alamat">
                        <label for="tahun">Isi Email Anda</label>
                    </div>  
              </div>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="container mt-3">
    <table class="table table-hover">
      <tbody>
        <tr>
            <div class ="col-md-3">No.KTP/NIK</div>
            <div class ="col-md-9">
                <form action="simpan-insert.php"method="post">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="nik" placeholder="input nik" name="nik">
                        <label for="tahun">Isi No.KTP/NIK Anda</label>
                    </div>  
              </div>
        </tr>
      </tbody>
    </table>
  </div>
<div class="container mt-3">
<button type="submit" class="btn btn-primary">Simpan</button>  
</div>

</body>
</html>


