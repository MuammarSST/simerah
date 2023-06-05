<!doctype html>
<html lang="en">
<head>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.all.min.js"></script>
</head>
</html>
<?php 

session_start();
include('koneksi.php');

$id = $_GET['id'];
$data = mysqli_query($koneksi,"DELETE FROM skpk WHERE id_skpk='$id'");

header("location:../data-skpk?pesan=data-berhasil-dihapus/");

?>