<!doctype html>
<html lang="en">
<head>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.all.min.js"></script>
</head>
</html>
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

$result = mysqli_query($koneksi,"INSERT INTO users VALUES ('', '$namaLengkap', '$email', '$nomorHp', '$username', '$password', '$level', '$keterangan')");


if($result){
    echo "<script>
    Swal.fire({
       position: 'center',
       icon: 'success',
       title: 'Data berhasil ditambah',
       showConfirmButton: false,
       timer: 1500
     }).then((result) => {
       window.location = '../view/data-user.php';
     });
     
    </script>";
}
?>