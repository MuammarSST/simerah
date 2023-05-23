<?php
require('../view/template-atas-monev.php')
?>


<?php
require('../proses/koneksi.php');

$query_laporan = "SELECT * FROM laporan";
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
        <div class="mb-4">
            <a href="data-tambah.php" class="btn btn-custom shadow"> <i class="fa fa-plus"></i></button> Tambah Data</a>
        </div>
        <div class="table col col-auto border p-4 shadow rounded">
            <table id="myTable" class="table table-striped table-bordered table-hover table-sm" data-page-length="25">
                <thead class="table-success text-center">
                    <tr>
                        <th class="text-center" scope="col">No</th>
                        <th class="text-center" scope="col">Nama Paket</th>
                        <th class="text-center" scope="col">Alamat Paket</th>
                        <th class="text-center" scope="col">Latitude</th>
                        <th class="text-center" scope="col">Longitude</th>
                        <th class="text-center" scope="col">Aksi</th>
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
                        <td><?php echo $lat ?></td>
                        <td><?php echo $long ?></td>
                        <td class="d-flex mr-2 justify-content-center">
                            <form method="POST" action="data-rincian.php" class="mx-1">
                                <input type="hidden" name="id_paket" value="<?php echo $id_paket ?>">
                                <button type="submit" name="edit_paket"
                                    class="btn btn-sm btn-info" title="Rincian Data">
                                    <i class="fa fa-book"></i>
                                </button>
                            </form>
                            <form method="POST" action="data-edit.php" class="mx-1">
                                <input type="hidden" name="id_paket" value="<?php echo $id_paket ?>">
                                <button type="submit" name="edit_paket" value="Edit Data" class="btn btn-sm btn-danger">
                                <i class="fa fa-edit"></i></button>
                            </form>
                            <form method="POST" action="foto_upload" class="mx-1">
                                <input type="hidden" name="id_paket" value="<?php echo $id_paket ?>">
                                <button type="submit" name="edit_paket" class="btn btn-sm btn-primary bi bi-upload mr-2"
                                    title="Upload Foto"><i class="fa fa-upload"></i> </button>
                            </form>
                            <form method="POST" target="_blank" action="lihat_peta.php" class="mx-1">
                                <input type="hidden" name="latitude" value="<?php echo $lat ?>">
                                <input type="hidden" name="longitude" value="<?php echo $long ?>">
                                <button type="submit" name="submit_coordinates"
                                    class="btn btn-sm btn-success bi bi-map mr-2" title="Lihat Peta"> 
                                    <i class="fa fa-map"></i></button></button>
                            </form>
                        </td>
                    </tr>
                    <?php 
					}
				?>
                </tbody>
            </table>
        </div>
    </div>

 
 <?php
require('../view/template-bawah-monev.php')
?>