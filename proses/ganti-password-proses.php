<!doctype html>
<html lang="en">
<head>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.all.min.js"></script>
</head>
</html>
<?php 

session_start();
include ('koneksi.php');

$id = $_POST['idUser'];
$password = md5($_POST['password']);

$data = mysqli_query($koneksi,"UPDATE users SET password='$password' WHERE id_user='$id'");

header("location:../index?pesan=password-berhasil-diganti/");

?>