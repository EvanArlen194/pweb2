<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

$dosenController = new DosenController($db);
$dosen = $dosenController->getAllDosen();

?> 

<div class="container">
    <h3>Data Dosen</h3>
    <div class="my-3">
        <a href="tambahdosen" class="btn btn-primary">Tambah Dosen</a>
    </div>

    <?php
    if (isset($_GET['success'])) {
        $success = $_GET['success'];
        if ($success == 'tambah') {
            echo '<div id="auto-dismiss-alert" class="alert alert-success alert-dismissible fade show">';
            echo 'Data Dosen berhasil ditambahkan.';
            echo '</div>';
        } elseif ($success == 'edit') {
            echo '<div id="auto-dismiss-alert" class="alert alert-success alert-dismissible fade show">';
            echo 'Data Dosen berhasil diedit.';
            echo '</div>';
        } elseif ($success == 'hapus') {
            echo '<div id="auto-dismiss-alert" class="alert alert-success alert-dismissible fade show">';
            echo 'Data Dosen berhasil dihapus.';
            echo '</div>';
        }
    }
    ?>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach ($dosen as $x) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $x['nidn'] . "</td>";
            echo "<td>" . $x['nama'] . "</td>";
            echo "<td>" . $x['alamat'] . "</td>";
            echo "<td>
            <a class='btn btn-warning' href='editdosen$x[id]'>Edit</a>
            <a class='btn btn-danger' href='hapusdosen$x[id]'>Hapus</a>
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
            window.location.href = 'hapus.php?id=' + id;
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
