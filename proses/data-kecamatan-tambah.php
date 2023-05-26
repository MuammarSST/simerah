<?php 

session_start();
include ('koneksi.php');

$kodeKecamatan = $_POST['kodeKecamatan'];
$namaKecamatan = $_POST['namaKecamatan'];
$keterangan = $_POST['keterangan'];

$data = mysqli_query($koneksi,"INSERT INTO kecamatan VALUES ('', '$kodeKecamatan', '$namaKecamatan', '$keterangan')");

header("location:../data-kecamatan?pesan=data-berhasil-ditambahkan/");

?>