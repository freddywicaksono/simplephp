<?php
include_once('MahasiswaModel.php');

class MahasiswaController
{
    private $model;

    public function __construct()
    {
        $this->model = new MahasiswaModel();
    }

    public function addMahasiswa($nim, $nama, $jk, $prodi)
    {
        return $this->model->addMahasiswa($nim, $nama, $jk, $prodi);
    }

    public function getMahasiswa($id)
    {
        return $this->model->getMahasiswa($id);
    }

    public function updateMahasiswa($id, $nim, $nama, $jk, $prodi)
    {
        return $this->model->updateMahasiswa($id, $nim, $nama, $jk, $prodi);
    }

    public function deleteMahasiswa($id)
    {
        return $this->model->deleteMahasiswa($id);
    }

    public function getMahasiswaList()
    {
        return $this->model->getMahasiswaList();
    }
}
