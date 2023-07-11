<?php
session_start();
if($_SESSION['status']=="login" && $_SESSION['level']=="super-admin"){
        header("location:view/admin-dashboard.php");
}elseif ($_SESSION['status']=="login" && $_SESSION['level']=="admin-monev") {
        header("location:view/admin-monev-dashboard.php");
}else{
        header("location:view/login.php");
}
?>