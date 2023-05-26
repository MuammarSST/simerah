<?php 

session_start();
include ('koneksi.php');

$id = $_POST['idUser'];
$namaLengkap = $_POST['namaLengkap'];
$email = $_POST['email'];
$nomorHp = $_POST['nomorHp'];
$username = $_POST['username'];
// $password = md5($_POST['password']);
$level = $_POST['level'];
$keterangan = $_POST['keterangan'];

    $data = mysqli_query($koneksi,"UPDATE users SET nama_lengkap='$namaLengkap', email='$email', nomor_hp='$nomorHp', username='$username', level='$level', keterangan='$keterangan' WHERE id_user='$id'");

header("location:../data-user?pesan=data-berhasil-diupdate/");

?>