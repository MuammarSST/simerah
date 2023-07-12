<!doctype html>
<html lang="en">
<head>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.all.min.js"></script>
</head>
</html>
<?php 

session_start();
include ('koneksi.php');

$KODE_KEGIATAN = $_POST['KODE_KEGIATAN'];
$NAMA_KEGIATAN = $_POST['NAMA_KEGIATAN'];

$result = mysqli_query($koneksi,"INSERT INTO kegiatan VALUES ('', '$KODE_KEGIATAN','$NAMA_KEGIATAN')");


if($result){
    echo "<script>
    Swal.fire({
       position: 'center',
       icon: 'success',
       title: 'Data berhasil ditambah',
       showConfirmButton: false,
       timer: 1500
     }).then((result) => {
       window.location = '../view/kegiatan.php';
     });
     
    </script>";
}
?>