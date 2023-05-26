<?php 

session_start();
include ('koneksi.php');

$namaLengkap = $_POST['namaLengkap'];
$email = $_POST['email'];
$nomorHp = $_POST['nomorHp'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];
$keterangan = $_POST['keterangan'];

$data = mysqli_query($koneksi,"INSERT INTO users VALUES ('', '$namaLengkap', '$email', '$nomorHp', '$username', '$password', '$level', '$keterangan')");

header("location:../data-user?pesan=data-berhasil-ditambahkan/");

?>