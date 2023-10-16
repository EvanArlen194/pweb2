<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <form method="POST">
        <label for="shape">Pilih Bentuk:</label>
        <select name="shape" id="shape" onchange="checkShape()">
            <option value="persegi">Persegi</option>
            <option value="persegi_panjang">Persegi Panjang</option>
            <option value="lingkaran">Lingkaran</option>
        </select>
        <br>
        <label for="input1">Masukkan Nilai 1:</label>
        <input type="text" name="input1" id="input1">
        <br>
        <label for="input2">Masukkan Nilai 2:</label>
        <input type="text" name="input2" id="input2" disabled>
        <br>
        <input type="submit" value="Hitung Luas">
    </form>
    
    <script>
        function checkShape() {
            const shapeSelect = document.getElementById("shape");
            const input2 = document.getElementById("input2");
            
            // Selalu nonaktifkan input2
            input2.disabled = true;

            // Cek apakah pilihan adalah "Persegi Panjang" dan aktifkan input2 jika iya
            if (shapeSelect.value === "persegi_panjang") {
                input2.disabled = false;
            }
        }
        
        // Panggil fungsi checkShape saat halaman dimuat (untuk mengatur keadaan awal)
        checkShape();
    </script>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $shape = $_POST["shape"];
        $input1 = $_POST["input1"];
        $input2 = isset($_POST["input2"]) ? $_POST["input2"] : null; // Periksa apakah input2 ada
    
        function LuasPersegi($sisi)
        {
            return $sisi * $sisi;
        }
    
        function LuasPersegiPanjang($panjang, $lebar)
        {
            return $panjang * $lebar;
        }
    
        function LuasLingkaran($r)
        {
            return 3.14 * $r * $r;
        }
    
        $luas = 0;
        $error = "";
    
        if (!is_numeric($input1) || (!is_numeric($input2) && $shape === "persegi_panjang")) {
            $error = "Masukkan angka.";
        } else {
            if ($shape === "persegi") {
                $luas = LuasPersegi($input1);
            } elseif ($shape === "persegi_panjang") {
                $luas = LuasPersegiPanjang($input1, $input2);
            } elseif ($shape === "lingkaran") {
                $luas = LuasLingkaran($input1);
            }
        }
    
        if (!empty($error)) {
            echo "Error: " . $error;
        } else {
            echo "Luas adalah: " . $luas;
        }
    }
    ?>
</body>
</html>