<?php
class HomeController
{
    public function home()
    {
        header("location:http://localhost/pweb2/jobsheet5/index.php");
    }
    public function mahasiswa()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/index.php");
    }
    public function dosen()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/index.php");
    }
    public function tambahmhs()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/tambah.php");
    }
    public function editmhs()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/edit.php");
    }
    public function prosestambahmhs()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/proses_tambah.php");
    }
    public function kembaliprosesmhs()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/index.php");
    }


    public function tambahdosen()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/tambah.php");
    }
    public function prosestambahdosen()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/proses_tambah.php");
    }
}