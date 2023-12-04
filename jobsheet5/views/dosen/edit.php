<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if ($dosenData) {
        if (isset($_POST['submit'])) {
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];

            $result = $dosenController->updateDosen($id, $nidn, $nama, $alamat);

            if ($result) {
                header("location: dosen");
            } else {
                header("location: edit.php");
            }
        }
    } else {
        echo "Dosen tidak ditemukan";
    }
}
?>
<h3>Edit Data Dosen</h3>
<?php
if ($dosenData) {
?>
    <form action="" method="post">
        <table border="0">
            <?php
            foreach ($dosenData as $d => $value) {
            ?>
                <tr>
                    <td width="100">
                        <?php
                        echo $d;
                        ?>
                    </td>
                    <td>
                        <input type="text" name="<?php echo $d ?>" value="<?php echo $value ?>">
                    </td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
<?php
}
?>
