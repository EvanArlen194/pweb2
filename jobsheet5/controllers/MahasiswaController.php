<?php 
include_once '../../models/Mahasiswa.php';

class MahasiswaController{
private $model;

public function __construct($db){
    $this->model = new mahasiswa($db);
}
public function getAllmahasiswa(){
    return $this->model->getAllmahasiswa();
}

public function createMahasiswa($nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat){
    return $this->model->createMahasiswa($nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
}

public function getMahasiswaById($id)
{
    return $this->model->getMahasiswaById($id);
}

public function updateMahasiswa($id, $nim, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat)
{
    return $this->model->updateMahasiswa($id, $nim, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat);
}

public function deleteMahasiswa($id)
{
    return $this->model->deleteMahasiswa($id);
}
}