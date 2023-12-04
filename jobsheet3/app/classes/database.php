<?php

class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_mahasiswa()
    {
        $hasil = array();
        $data = mysqli_query($this->koneksi, "SELECT * FROM mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }

        return $hasil;
    }
    function tambah_mhs($nim,$nama,$alamat)
    {
        mysqli_query($this->koneksi, "INSERT INTO mahasiswa(nim, nama, alamat) VALUES('$nim', '$nama', '$alamat')");
    }
    function edit($id)
    {
    $data = mysqli_query($this->koneksi, "SELECT * FROM mahasiswa where id='$id'");
    while ($d = mysqli_fetch_array($data)){
    $hasil[] = $d;
    }
    return $hasil;
    }
function update($id, $nim, $nama, $alamat){
    mysqli_query($this->koneksi, "update mahasiswa set nim='$nim', nama='$nama', alamat='$alamat' where id='$id'");
}
function hapus($id){
    mysqli_query($this->koneksi, "delete from mahasiswa where id='$id'");
}

function tampil_dosen()
    {
        $hasil_dosen = array();
        $data = mysqli_query($this->koneksi, "SELECT * FROM dosen");
        while ($d = mysqli_fetch_array($data)) {
            $hasil_dosen[] = $d;
        }

        return $hasil_dosen;
    }
    function tambah_dosen($nidn,$nama,$alamat)
    {
        mysqli_query($this->koneksi, "INSERT INTO dosen(nidn, nama, alamat) VALUES('$nidn', '$nama', '$alamat')");
    }
    function edit_dosen($id)
    {
    $data = mysqli_query($this->koneksi, "SELECT * FROM dosen where id='$id'");
    while ($d = mysqli_fetch_array($data)){
    $hasil_dosen[] = $d;
    }
    return $hasil_dosen;
    }
function update_dosen($id, $nidn, $nama, $alamat){
    mysqli_query($this->koneksi, "update dosen set nidn='$nidn', nama='$nama', alamat='$alamat' where id='$id'");
}
function hapus_dosen($id){
    mysqli_query($this->koneksi, "delete from dosen where id='$id'");
}
}
?>
