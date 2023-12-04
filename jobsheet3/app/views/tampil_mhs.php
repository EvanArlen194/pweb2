<?php
include '../classes/database.php';
$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="px-4 py-3">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SIAKAD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_mhs.php">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_dosen.php">Dosen</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</div>
<div class="container">
    <h3>Data Mahasiswa</h3>
    <div class="my-3">
        <a href="input_mhs.php" class="btn btn-primary">Tambah Mahasiswa</a>
    </div>

    <?php
    if (isset($_GET['success'])) {
        $success = $_GET['success'];
        if ($success == 'tambah') {
            echo '<div id="auto-dismiss-alert" class="alert alert-success alert-dismissible fade show">';
            echo 'Data mahasiswa berhasil ditambahkan.';
            echo '</div>';
        } elseif ($success == 'edit') {
            echo '<div id="auto-dismiss-alert" class="alert alert-success alert-dismissible fade show">';
            echo 'Data mahasiswa berhasil diedit.';
            echo '</div>';
        } elseif ($success == 'hapus') {
            echo '<div id="auto-dismiss-alert" class="alert alert-success alert-dismissible fade show">';
            echo 'Data mahasiswa berhasil dihapus.';
            echo '</div>';
        }
    }
    ?>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach ($db->tampil_mahasiswa() as $x) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $x['nim'] . "</td>";
            echo "<td>" . $x['nama'] . "</td>";
            echo "<td>" . $x['alamat'] . "</td>";
            echo "<td>
                    <a href='edit_mhs.php?id=$x[id]' class='btn btn-warning btn-sm'>Edit</a> 
                    <a href='proses_mhs.php?id=$x[id]&aksi=hapus' class='btn btn-danger btn-sm'>Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<script>
    function showAutoDismissAlert() {
        var alert = document.getElementById('auto-dismiss-alert');
        alert.style.display = 'block';
        setTimeout(function () {
            alert.style.display = 'none';
        }, 5000); 
    }

    if (document.getElementById('auto-dismiss-alert')) {
        showAutoDismissAlert();
    }
</script>
</body>
</html>
