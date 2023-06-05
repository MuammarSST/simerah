<!doctype html>
<html lang="en">
<head>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.all.min.js"></script>
</head>
</html>
<?php 

session_start();
include ('koneksi.php');

$id = $_POST['idSkpk'];
$kodeSkpk = $_POST['kodeSkpk'];
$namaSkpk = $_POST['namaSkpk'];
$alamat = $_POST['alamat'];
$keterangan = $_POST['keterangan'];

    $data = mysqli_query($koneksi,"UPDATE skpk SET kode_skpk='$kodeSkpk', nama_skpk='$namaSkpk', alamat='$alamat',  keterangan='$keterangan' WHERE id_skpk='$id'");

header("location:../data-skpk?pesan=data-berhasil-diupdate/");

?>