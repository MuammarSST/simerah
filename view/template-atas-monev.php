
<!DOCTYPE html>
<html lang="en">

<?php
session_start();
require_once('../view/header.php');

?>

<body class="">
  <div class="wrapper ">
  <div class="sidebar" data-color="danger" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
 
    <div class="logo"><a href="#" class="simple-text logo-normal">
      SIMOEDA
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item active">
          <a class="nav-link" href="./admin-monev-dashboard.php">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="./monev.php">
            <i class="material-icons">bubble_chart</i>
            <p>Monev Lapangan</p>
          </a>
        </li>

        
      </ul>
    </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">

            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person </i><?php print($_SESSION['level']) ?>

                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <!-- <a class="dropdown-item" href="#">Profile</a> -->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../proses/logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      