
<!DOCTYPE html>
<html lang="en">

<?php
  require_once('../view/header.php');
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
                  <p class="card-category">SIlahkan Masukan Username dan Password</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="../proses/cek_login.php">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" name="username">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" class="form-control" name="password">
                        </div>
                      </div>
                    </div>
                    
                    
                    </div>
                    <button type="submit" class="btn btn-danger pull-right">Login</button>
                    <div class="clearfix"></div>
                  </form>
                  <footer class="footer">
                    <div class="container-fluid">
                      <nav class="float-center">
                 
                              Dikembangkan oleh : Tim IT Bappeda Kab.Pidie
                              &copy;
                              <script>
                                document.write(new Date().getFullYear())
                              </script>
                          
                   
                      </nav>
            
                    </div>
                  </footer>
                </div>
              </div>
            </div>

            

          </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
  <?php
  require_once('../view/footer.php');
  ?>
</body>

</html>