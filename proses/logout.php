<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" integrity="sha256-aUL5sUzmON2yonFVjFCojGULVNIOaPxlH648oUtA/ng=" crossorigin="anonymous">
</head>
<body>
	
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js" integrity="sha256-9AtIfusxXi0j4zXdSxRiZFn0g22OBdlTO4Bdsc2z/tY=" crossorigin="anonymous"></script>
</html>

<?php 

session_start();
session_destroy();
echo("
	<script>
	Swal.fire({
		position: 'center',
		icon: 'success',
		title: 'logout berhasil',
		showConfirmButton: false,
		timer: 1500
	  }).then((result) => {
		window.location.href = '../index.php';
	  });
	</script>
	");

?>