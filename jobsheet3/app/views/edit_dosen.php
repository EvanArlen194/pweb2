<?php
include '../classes/database.php';
$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Dosen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-4">
        <h2>Edit Data Dosen</h2>
        <form action="proses_dosen.php?aksi=update" method="post">
            <?php
            foreach ($db->edit_dosen($_GET['id']) as $d) {
            ?>
            <div class="form-group">
                <label for="nidn">NIDN</label>
                <input type="hidden" name="id" value="<?php echo $d['id']?>">
                <input type="text" class="form-control col-sm-4" name="nidn" value="<?php echo $d['nidn']?>" id="nidn">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control col-sm-4" name="nama" value="<?php echo $d['nama']?>" id="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control col-sm-4" name="alamat" id="alamat" rows="5"><?php echo $d['alamat']?></textarea>
            </div>
            <a href="tampil_dosen.php" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <?php
            }
            ?>
        </form>
    </div>
</body>
</html>
