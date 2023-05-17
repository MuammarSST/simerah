<?php 

session_start();
session_destroy();
echo("<script>
		alert('anda sudah logout');
		</script>");
header("location:../index.php");

?>