<!doctype html>
<html lang="en">
<head>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.all.min.js"></script>
</head>
</html>
<?php 

session_start();
include ('koneksi.php');

$sumber_dana = $_POST['sumber_dana'];

$result = mysqli_query($koneksi,"INSERT INTO sumber_dana VALUES ('', '$sumber_dana')");


if($result){
    echo "<script>
    Swal.fire({
       position: 'center',
       icon: 'success',
       title: 'Data berhasil ditambah',
       showConfirmButton: false,
       timer: 1500
     }).then((result) => {
       window.location = '../view/sumber-dana.php';
     });
     
    </script>";
}
?>