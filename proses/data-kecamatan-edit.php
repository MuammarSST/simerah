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