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