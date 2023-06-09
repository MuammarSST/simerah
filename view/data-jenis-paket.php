<?php
require('../view/template-atas-admin.php');
?>


<?php
require('../proses/koneksi.php');
?>

    <div class="container-fluid">
        <div class="title">
            <h3 class="text-gray-800 my-2">Data Jenis Paket</h3>
        </div>
        <div class="subtitle border-bottom mb-4 pb-2">
            <span class=""><a href="index">Beranda </a></span>
            <span class="text-grey"> / Data jenis paket</span>
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jenis Paket</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="../proses/data-jenis-paket-tambah.php" method="POST">
                                <div class="input-group mb-3">
                                        <span class="input-group-text col-4">Kode Jenis Paket</span>
                                        <input type="text" class="form-control" name="kode" id="kode" required placeholder="">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text col-4">Keterangan</span>
                                        <input type="text" class="form-control" name="keterangan" id="keterangan" required
                                            placeholder="">
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
                  <h4 class="card-title "> Data Jenis Paket</h4>
                  <p class="card-category"> </p>
                </div>
          <div class="card-body">
        <div class="table-responsive">
            <table id="myTable" class="table">
                <thead class="text-primary">
                    <tr>
                        <th class="text-center">No</th>
                        <th>Kode Jenis Paket</th>
                        <th>Keterangan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <?php 
                            
                            $noUrut=1;
                            $data=mysqli_query($koneksi,"SELECT * FROM jenis_paket");
                            $jumlah_data = mysqli_num_rows($data);
                            ?>
                <tbody id="dataTable">
                    <?php
                            while($d=mysqli_fetch_array($data)){
                            ?>
                    <tr>
                        <td class="text-center"><?php echo $noUrut++; ?></td>
                        <td><?php echo $d['kode']; ?></td>
                        <td><?php echo $d['keterangan']; ?></td>
                        <td class="text-center">
                            

                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataJenisPaketEdit<?php echo $d['id']; ?>">
                                <i class="fa fa-pencil"></i>&nbsp;
                                    
                                </button>

                            <a class ="btn btn-danger" href="../proses/data-jenis-paket-hapus.php?id=<?php echo $d['id']; ?>"
                                onClick="return confirm('Apakah anda yakin menghapus data : <?php echo $d['kode'];?> ?')">
                                <i class="fa fa-trash" title="Hapus"></i>
                            </a>
                            <!-- Modal Edit Data -->
                            <div class="modal fade" id="dataJenisPaketEdit<?php echo $d['id']; ?>" role="dialog"
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
                             <form action="../proses/data-jenis-paket-edit.php" method="POST">
                                    <input type="hidden" name="idJp" class="form-control" value="<?php echo $d['id']; ?>" readonly />
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text col-4">Kode Jenis Paket</span>
                                                        <input type="text" class="form-control" name="kode" id="kode"
                                                                value="<?php echo $d['kode']; ?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text col-4">Keterangan</span>
                                                        <input type="text" class="form-control" name="keterangan"
                                                                id="keterangan" value="<?php echo $d['keterangan']; ?>">
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
        </div>
          </div>
            </div>
  </div>


    </div>

 <?php
require('../view/template-bawah-monev.php')
?>