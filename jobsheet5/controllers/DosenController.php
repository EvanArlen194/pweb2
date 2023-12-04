<?php 
include_once '../../models/Dosen.php';

class DosenController{
private $model;

public function __construct($db){
    $this->model = new dosen($db);
}
public function getAlldosen(){
    return $this->model->getAlldosen();
}

public function createDosen($nidn, $nama, $alamat){
    return $this->model->createDosen($nidn, $nama, $alamat);
}

public function getDosenById($id)
{
    return $this->model->getDosenById($id);
}

public function updateDosen($id, $nidn, $nama, $alamat)
{
    return $this->model->updateDosen($id, $nidn, $nama, $alamat);
}

public function deleteDosen($id)
{
    return $this->model->deleteDosen($id);
}
}