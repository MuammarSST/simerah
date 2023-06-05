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

include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$id_tahun = $_POST['id_tahun'];
// var_dump($Username);
// exit;
$query_login = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($query_login);

if($cek > 0){
	$data = mysqli_fetch_assoc($query_login);
 
	// cek jika user login sebagai admin
	if($data['level']=="super-admin"){
		// buat session login dan username
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "super-admin";
		$_SESSION['status'] = "login";
		$_SESSION['id_tahun'] = $id_tahun;

		// alihkan ke halaman dashboard admin
		echo("
		<script>
		Swal.fire({
			position: 'center',
			icon: 'success',
			title: 'Anda login sebagai admin',
			showConfirmButton: false,
			timer: 1500
		  }).then((result) => {
			window.location.href = '../view/admin-dashboard.php';
		  });
		</script>
		");

		

	// cek jika user login sebagai admin monev
	}elseif($data['level']=="admin-monev"){
		// buat session login dan username
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin-monev";
		$_SESSION['status'] = "login";
		$_SESSION['id_tahun'] = $id_tahun;
		// alihkan ke halaman dashboard admin monev
		echo("
		<script>
		Swal.fire({
			position: 'center',
			icon: 'success',
			title: 'Anda login sebagai admin monev',
			showConfirmButton: false,
			timer: 1500
		  }).then((result) => {
			window.location.href = '../view/admin-monev-dashboard.php';
		  });
		</script>
		");


	}else{
		// alihkan ke halaman login kembali
		echo("
		<script>
		Swal.fire({
			position: 'center',
			icon: 'error',
			title: 'login gagal',
			showConfirmButton: false,
			timer: 1500
		  }).then((result) => {
			window.location.href = '../index.php';
		  });
		</script>
		");
		

	}
}else{
	echo("
	<script>
	Swal.fire({
		position: 'center',
		icon: 'error',
		title: 'login gagal',
		showConfirmButton: false,
		timer: 1500
	  }).then((result) => {
		window.location.href = '../index.php';
	  });
	</script>
	");


}
?>