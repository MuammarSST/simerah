<!doctype html>
<html lang="en">
<head>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.all.min.js"></script>
</head>
</html>
<?php 

session_start();
include ('koneksi.php');

$id_tahun = $_POST['id_tahun'];
$tahun = $_POST['tahun'];


$result = mysqli_query($koneksi,"UPDATE tahun SET tahun='$tahun' WHERE id_tahun='$id_tahun'");


if($result){
    echo "<script>
    Swal.fire({
       position: 'center',
       icon: 'success',
       title: 'Data berhasil diedit',
       showConfirmButton: false,
       timer: 1500
     }).then((result) => {
       window.location = '../view/data-tahun.php';
     });
     
    </script>";
}
?>