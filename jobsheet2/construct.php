<?php
class mahasiswa {
    //property
    var $nama;
    var $nim;
    var $alamat;
    
    function __construct(){
        echo"Saya Mahasiswa Teknik Informatika";
        echo"<br>";
    }
    function tampil_nama(){
        return "Evan Arlen Handy";  
    }
    
    function tampil_alamat(){
        return "Jalan Progo"; 
    }
    function tampil_mahasiswa(){
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah"."<br>";
    }
    function __destruct(){
        echo"Politeknik Negeri Cilacap";
    }
}

$mahasiswa1 = new mahasiswa();
echo "Nama : " . $mahasiswa1->tampil_nama() . "<br>";
echo "Alamat : " . $mahasiswa1->tampil_alamat()."<br>";
echo $mahasiswa1->tampil_mahasiswa();
?>
