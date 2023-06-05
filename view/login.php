
<!DOCTYPE html>
<html lang="en">

<?php
require_once('../view/header.php');

require('../proses/koneksi.php');

$query_tahun = "SELECT * FROM tahun";
$result_tahun = mysqli_query($koneksi, $query_tahun);
if (!$result_tahun) {
    die('Invalid query: ' . $mysqli->error);
}
?>
<body class="">
  <div class="wrapper ">

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>

        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title">Login</h4>
                  <p class="card-category">Silahkan Masukan Username dan Password</p>
                </div>
                <div class="card-body">
                  
                  <form method="POST" action="../proses/cek_login.php">
                    <div class="row">

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" name="username" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" class="form-control" name="password" required>
                        </div>
                      </div>
                    </div>
                  
                    <div class="form-group">
                    <label class="bmd-label-floating">Tahun :</label>
                        <select id="id_tahun" name="id_tahun" class="card" required>
                        <option disabled selected required>--- Silahkan Pilih Tahun ---</option>
                            <?php
                            $i = 0;
                            while ($row = @mysqli_fetch_assoc($result_tahun)) {

                                $id_tahun = $row['id_tahun'];
                                $tahun = $row['tahun'];

                            ?>
                                <option value="<?php echo $id_tahun; ?>"><?php echo $tahun; ?></option>
                            <?php
                                $i++;
                            } ?>
                        </select>
                    </div>
                   
                    
                    </div>
                    <button type="submit" class="btn btn-danger pull-right"><i class="fa fa-send"></i> Login</button>
                    <div class="clearfix"></div>
                  </form>
                  
                  <?php
require('../view/template-bawah-monev.php')
?>