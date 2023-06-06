<?php
require('../view/template-atas-admin.php');

require('../proses/koneksi.php');
?>
<div class="container container-fluid">
    <div class="title">
        <h3 class="text-gray-800 my-2">Data SKPK</h3>
    </div>
    <div class="subtitle border-bottom mb-4 pb-2">
        <span class=""><a href="index">Beranda </a></span>
        <span class="text-grey"> / Data SKPK</span>
    </div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus"></i>&nbsp;
                Tambah Data
            </button>

            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kecamatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="../proses/data-skpk-tambah.php" method="POST">			
                    <div class="input-group mb-3 ">
                            <span class="input-group-text col-4">Kode SKPK </span>
                            <input type="text" class="form-control" name="kodeSkpk" id="kodeSkpk" required placeholder="">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text col-4">Nama SKPK </span>
                            <input class="form-control" name="namaSkpk" id="namaSkpk" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text col-4">Alamat </span>
                            <input type="text" class="form-control" name="alamat" id="alamat" required placeholder="">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text col-4">Keterangan </span>
                            <input type="text" class="form-control" name="keterangan" id="keterangan" required placeholder="">
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-reply"></i> Batal</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-send"></i> Simpan</button>
                    </div>
                    </div>
                    </form>
                </div>
                </div>
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title "> Data SKPK</h4>
                  <p class="card-category"> </p>
                </div>
          <div class="card-body">
        <div class="table-responsive">
        <table id="myTable" class="table table-bordered" data-page-length="25">
            <thead class="text-center text-primary">
                <tr>
                    <th class="text-center">No</th>
                    <th>Kode SKPK</th>
                    <th>Nama SKPK</th>
                    <th>Alamat</th>
                    <th>Keterangan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <?php

            $noUrut = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM skpk");
            $jumlah_data = mysqli_num_rows($data);
            ?>
            <tbody id="dataTable" class="table-infoo">
                <?php
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td class="text-center"><?php echo $noUrut++; ?></td>
                        <td><?php echo $d['kode_skpk']; ?></td>
                        <td><?php echo $d['nama_skpk']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['keterangan']; ?></td>
                        <td class="text-center">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#data<?php echo $d['id_skpk']; ?>">
                                <i class="fa fa-pencil"></i>&nbsp;
                                    
                                </button>
                            <a class="btn btn-danger" href="../proses/data-skpk-hapus.php?id=<?php echo $d['id_skpk']; ?>" onClick="return confirm('Apakah anda yakin menghapus data ini: <?php echo $d['nama_skpk'];?> ?')">
                                <i class="fa fa-trash" title="Hapus"></i>
                            </a>
                            <!-- Modal Edit Data -->
                            <div class="modal fade" id="data<?php echo $d['id_skpk']; ?>" role="dialog"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Jenis Paket</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="../proses/data-skpk-edit.php" method="POST">
                             <div class="mb-2">
                                                    <input type="hidden" name="idSkpk" class="form-control" value="<?php echo $d['id_skpk']; ?>" readonly />
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-4">Kode SKPK</span>
                                                    <input type="text" class="form-control" name="kodeSkpk" id="kodeSkpk" value="<?php echo $d['kode_skpk']; ?>">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-4">Nama SKPK</span>
                                                    <input  class="form-control" name="namaSkpk" id="namaSkpk" required value="<?php echo $d['nama_skpk']; ?>">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-4">Alamat</span>
                                                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $d['alamat']; ?>">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-4">Keterangan</span>
                                                    <input type="text" class="form-control" name="keterangan" id="keterangan" value="<?php echo $d['keterangan']; ?>">
                                                </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-reply"></i> Batal</button>
                                            <button type="submit" class="btn btn-success"><i class="fa fa-send"></i> Simpan</button>
                                        </div>
                            </div>
                            </form>
                        </div>
                               
                            </div>
                            <!-- End of Modal Edit Data -->
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

<?php
require('../view/template-bawah-monev.php')
?>