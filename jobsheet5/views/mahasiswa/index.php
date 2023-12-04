<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();

?> 

<div class="container">
    <h3>Data Mahasiswa</h3>
    <div class="my-3">
        <a href="tambahmhs" class="btn btn-primary">Tambah Mahasiswa</a>
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
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach ($mahasiswa as $x) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $x['nim'] . "</td>";
            echo "<td>" . $x['nama'] . "</td>";
            echo "<td>" . $x['tempat_lahir'] . "</td>";
            echo "<td>" . $x['tanggal_lahir'] . "</td>";
            echo "<td>" . $x['jenis_kelamin'] . "</td>";
            echo "<td>" . $x['agama'] . "</td>";
            echo "<td>" . $x['alamat'] . "</td>";
            echo "<td>
            <a class='btn btn-warning' href='editmhs$x[id]'>Edit</a>
            <a class='btn btn-danger' href='hapusmhs$x[id]'>Hapus</a>
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
<script>
    function confirmDelete(id) {
        var result = confirm("Apakah Anda yakin ingin menghapus data?");
        if (result) {
            window.location.href = 'index.php?id=' + id;
        }
    }

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
