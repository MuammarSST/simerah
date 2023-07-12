<!doctype html>
<html lang="en">
<head>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.all.min.js"></script>
</head>
</html>
<?php 

session_start();
include ('koneksi.php');

$KODE_SUB_KEGIATAN = $_POST['KODE_SUB_KEGIATAN'];
$NAMA_SUB_KEGIATAN = $_POST['NAMA_SUB_KEGIATAN'];

$result = mysqli_query($koneksi,"INSERT INTO sub_kegiatan VALUES ('', '$KODE_SUB_KEGIATAN','$NAMA_SUB_KEGIATAN')");


if($result){
    echo "<script>
    Swal.fire({
       position: 'center',
       icon: 'success',
       title: 'Data berhasil ditambah',
       showConfirmButton: false,
       timer: 1500
     }).then((result) => {
       window.location = '../view/sub_kegiatan.php';
     });
     
    </script>";
}
?>