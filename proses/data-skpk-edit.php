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