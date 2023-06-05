<!doctype html>
<html lang="en">
<head>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.all.min.js"></script>
</head>
</html>
<?php 

session_start();
include ('koneksi.php');

$kodeSkpk = $_POST['kodeSkpk'];
$namaSkpk = $_POST['namaSkpk'];
$keterangan = $_POST['keterangan'];
$alamat = $_POST['alamat'];

$data = mysqli_query($koneksi,"INSERT INTO skpk VALUES ('', '$kodeSkpk', '$namaSkpk', '$alamat', '$keterangan')");

header("location:../data-skpk?pesan=data-berhasil-ditambahkan/");

?>