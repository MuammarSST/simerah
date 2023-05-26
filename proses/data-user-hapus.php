<?php 

session_start();
include('koneksi.php');

$id = $_GET['id'];
$data = mysqli_query($koneksi,"DELETE FROM users WHERE id_user='$id'");

header("location:../data-user?pesan=data-berhasil-dihapus/");

?>