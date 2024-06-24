<?php
require_once 'class/database.php';
require_once 'class/proses.php';

$tambah = new proses();

if(!isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $tambah->tambah_data($nim,$nama,$jurusan);
    header('location:index.php');
}
?>

