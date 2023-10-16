<?php
class mahasiswa {
    //property
    var $nama;
    var $nim;
    var $alamat;
    
    function tampil_nama(){
        return "Evan Arlen Handy";  
    }
    
    function tampil_alamat(){
        return "Jalan Progo"; 
    }
}

class dosen {
    public $nidn;
    public $nama;
    public $prodi;

    function tampil_nidn(){
        return "220302082";
    }
    function tampil_nama(){
        return"Evan Arlen Handy";
    }
    function tampil_prodi(){
        return"D3-Teknik Informatika";
    }
}
$dosen1=new dosen();
$mahasiswa1 = new mahasiswa();
echo "Nama : " . $mahasiswa1->tampil_nama() . "<br>";
echo "Alamat : " . $mahasiswa1->tampil_alamat(). "<br>". "<br>";
echo"Dosen"."<br>";
echo "Nama saya adalah ".$dosen1->tampil_nama()."<br>";
echo "NIDN : ".$dosen1->tampil_nidn()."<br>";
echo "Prodi : ".$dosen1->tampil_prodi()."<br>";

?>
