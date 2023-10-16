<?php
class manusia {
    protected $nama_saya;

    protected function panggil_nama($saya) {
        $this->nama_saya = $saya;
    }
}

class mahasiswa extends manusia {
    private $nama_mahasiswa;

    public function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa = $mahasiswa;
        $this->panggil_nama("Evan"); }

    public function getNamaSaya() {
        return $this->nama_saya;
    }
    
    public function getNamaMahasiswa() {
        return $this->nama_mahasiswa;
    }
    }

$mahasiswa1 = new mahasiswa();
$mahasiswa1->panggil_mahasiswa("Evan Arlen Handy");

echo "Nama depan saya adalah : " . $mahasiswa1->getNamaSaya() . "<br>";
echo "Nama lengkap saya adalah : " . $mahasiswa1->getNamaMahasiswa();