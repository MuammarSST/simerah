<?php 

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
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
		// alihkan ke halaman dashboard admin
		//header("location:../admin/");
		echo("<script>
				alert('login sebagai admin');
				</script>");
		header("location:../view/admin-dashboard.php");

	// cek jika user login sebagai admin monev
	}elseif($data['level']=="admin-monev"){
		// buat session login dan username
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin-monev";
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard admin monev
		
		echo("<script>
		alert('login sebagai admin monev');
		</script>");

		header("location:../view/admin-monev-dashboard.php");

	}else{
		// alihkan ke halaman login kembali
		
		echo("<script>
		alert('anda belum login');
		</script>");
		header("location:../index.php");
	}
}else{
	
	echo("<script>
		alert('anda belum login');
		</script>");
	header("location:../index.php");
}
?>