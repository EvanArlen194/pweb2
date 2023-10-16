<?php
class mahasiswa{
public $nama;
private $nim = "220302082";

public function tampilkan_nama(){
    return "Nama Saya Evan"."<br>";
}
function tampilkan_nim(){
    return "NIM saya ".$this->nim;
}
}
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();