<?php
require '../../index.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Dosen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-4"> 
        <h3>Tambah Data Dosen</h3>
        <form action="prosestambahdosen" method="post">
            <div class="form-group">
                <label for="nim">NIDN</label>
                <input type="text" class="form-control col-sm-4" name="nidn" id="nidn">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control col-sm-4" name="nama" id="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control col-sm-4" name="alamat" id="alamat" rows="5"></textarea>
            </div>
            <a href="dosen" class="btn btn-secondary">Kembali</a>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
