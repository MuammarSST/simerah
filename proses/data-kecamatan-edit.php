<!doctype html>
<html lang="en">
<head>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.all.min.js"></script>
</head>
</html>
<?php 

session_start();
include ('koneksi.php');

$id = $_POST['idKecamatan'];
$kodeKecamatan = $_POST['kodeKecamatan'];
$namaKecamatan = $_POST['namaKecamatan'];
$keterangan = $_POST['keterangan'];

    $data = mysqli_query($koneksi,"UPDATE kecamatan SET kode_kecamatan='$kodeKecamatan', nama_kecamatan='$namaKecamatan',  keterangan='$keterangan' WHERE id_kecamatan='$id'");

header("location:../data-kecamatan?pesan=data-berhasil-diupdate/");

?>