<?php 

session_start();
include('koneksi.php');

$id = $_GET['id'];
$data = mysqli_query($koneksi,"DELETE FROM skpk WHERE id_skpk='$id'");

header("location:../data-skpk?pesan=data-berhasil-dihapus/");

?>