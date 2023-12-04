<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_POST['submit'])){
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $dosenController = new DosenController($db);
    $result = $dosenController->createDosen($nidn, $nama, $alamat);

    // Check if the creation was successful
    if ($result) {
        // Redirect to index.php if successful
        header("Location: dosen");
        exit();
    }
}

// Add the rest of your code here
?>
