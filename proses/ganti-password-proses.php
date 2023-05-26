<?php 

session_start();
include ('koneksi.php');

$id = $_POST['idUser'];
$password = md5($_POST['password']);

$data = mysqli_query($koneksi,"UPDATE users SET password='$password' WHERE id_user='$id'");

header("location:../index?pesan=password-berhasil-diganti/");

?>