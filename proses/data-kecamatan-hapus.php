<?php 

session_start();
include('koneksi.php');

$id = $_GET['id'];
$data = mysqli_query($koneksi,"DELETE FROM kecamatan WHERE id_kecamatan='$id'");

header("location:../data-kecamatan?pesan=data-berhasil-dihapus/");

?>