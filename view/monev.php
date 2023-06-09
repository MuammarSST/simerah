<?php
require('../view/template-atas-monev.php');
?>


<?php
require('../proses/koneksi.php');

$id_tahun=$_SESSION['id_tahun'];
$id_user=$_SESSION['id_user'];
$query_laporan = "SELECT * FROM laporan where id_tahun=$id_tahun and id_user=$id_user";
$result_laporan = mysqli_query($koneksi,$query_laporan);
if (!$result_laporan) {
  die('Invalid query: ' . $mysqli->error);
}


?>
    <div class="container-fluid">
        <div class="title">
            <h3 class="text-gray-800 my-2">Data Hasil Monev</h3>
        </div>
        <div class="subtitle border-bottom mb-4 pb-2">
            <span class=""><a href="./admin-monev-dashboard.php">Beranda </a></span>
            <span class="text-grey"> / Data hasil monev</span>
        </div>
        
        <a href="data-tambah.php" class="btn btn-danger shadow"> <i class="fa fa-plus"></i></button> Tambah Data</a>
        <a href="data-download.php" class="btn btn-danger shadow"> <i class="fa fa-download"></i></button> Download Data</a>

        <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title "> Data hasil monev</h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="myTable">
                      <thead class="text-primary text-center">
                        <tr><th>
                        No
                        </th>
                        <th>
                        Nama Paket
                        </th>
                        <th>
                        Alamat
                        </th>
                        <th style="text-align: center;">
                        Aksi
                        </th>

                      </tr>
                    </thead>
                    <tbody>
                    <?php 
				$i=0;
                $noUrut=1;
				while ($row = @mysqli_fetch_assoc($result_laporan)){
					$id_paket=$row['id_paket'];
					$nama_peta=$row['nama_paket'];
					$alamat_peta=$row['alamat_paket'];
					$lat=$row['latitude'];
					$long=$row['longitude'];
					$i++;
				?>
                    <tr>
                        <th class="text-center" scope="row"><?php echo $noUrut++ ?></th>
                        <td><?php echo $nama_peta ?></td>
                        <td><?php echo $alamat_peta ?></td>

                        <td class="footer">
                        

                            
                        
                        <form method="POST" action="data-rincian.php">
                                    <input type="hidden" name="id_paket" value="<?php echo $id_paket ?>">
                                    <input type="hidden" name="no_urut" value="<?php echo $noUrut-1 ?>">
                                    <button type="submit" name="edit_paket"
                                        class="btn btn-info " title="Rincian Data">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            
                       
                            <form method="POST" action="data-edit.php" >
                                <input type="hidden" name="id_paket" value="<?php echo $id_paket ?>">
                                <button type="submit" name="edit_paket" value="Edit Data" class="btn btn-danger">
                                <i class="fa fa-edit"></i> </button>
                            </form>

                            <form method="POST" target="_blank" action="lihat_peta.php">
                                <input type="hidden" name="latitude" value="<?php echo $lat ?>">
                                <input type="hidden" name="longitude" value="<?php echo $long ?>">
                                <button type="submit" name="submit_coordinates"
                                    class="btn btn-success" title="Lihat Peta"> 
                                    <i class="fa fa-map"></i> </button>
                            </form>
                        
                        <div class="nav-items">
                            <a class="btn btn-primary" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bars"></i>
                            </a>
                            <div class="dropdown-menu">
                                <form method="POST" action="progres0.php">
                                    <input type="hidden" name="id_paket" value="<?php echo $id_paket ?>">
                                    <button type="submit" name="progres0"
                                        class="btn btn-warning btn-lg btn-block" title="Rincian Data">
                                        <i class="fa fa-circle-o-notch"></i> Progres 0%
                                    </button>
                                </form>
                                <form method="POST" action="progres50.php">
                                    <input type="hidden" name="id_paket" value="<?php echo $id_paket ?>">
                                    <button type="submit" name="progres50"
                                        class="btn btn-info btn-lg btn-block" title="Rincian Data">
                                        <i class="fa fa-spinner"></i> Progres 50%
                                    </button>
                                </form>
                                <form method="POST" action="progres100.php">
                                    <input type="hidden" name="id_paket" value="<?php echo $id_paket ?>">
                                    <button type="submit" name="progres100"
                                        class="btn btn-success btn-lg btn-block" title="Progres 100%">
                                        <i class="fa fa-check-square"></i> Progres 100%
                                    </button>
                                </form>

                               

                                

                            </div>
                        </div>
                            
                        </td>
                    </tr>
                    <?php 
					}
				?>
                </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
 
          </div>
        </div>
      </div>


    </div>

 
 <?php
require('../view/template-bawah-monev.php')
?>