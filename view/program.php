<?php
require('../view/template-atas-admin.php');
?>


<?php
require('../proses/koneksi.php');
?>

    <div class="container-fluid">
        <div class="title">
            <h3 class="text-gray-800 my-2">Program</h3>
        </div>
        <div class="subtitle border-bottom mb-4 pb-2">
            <span class=""><a href="index">Beranda </a></span>
            <span class="text-grey"> / Program</span>
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Program</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="../proses/program_tambah.php" method="POST">
                        <div class="input-group mb-3">
                                <span class="input-group-text col-4">KODE PROGRAM</span>
                                <input type="text" class="form-control" name="KODE_PROGRAM" id="KODE_PROGRAM" required
                                    placeholder="">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text col-4">NAMA PROGRAM</span>
                                <input type="text" class="form-control" name="NAMA PROGRAM" id="NAMA_PROGRAM" required
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
                  <h4 class="card-title "> Program</h4>
                  <p class="card-category"> </p>
                </div>
          <div class="card-body">
        <div class="table-responsive">
        <table id="myTable" class="table table-bordered"
                data-page-length="25">
                <thead class="text-primary">
                    <tr>
                        <th class="text-center">NO</th>
                    
                        <th>KODE PROGRAM</th>
                        <th>NAMA PROGRAM</th>

                   

                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <?php 

                            $noUrut=1;
                            $data=mysqli_query($koneksi,"SELECT * FROM program");
                            $jumlah_data = mysqli_num_rows($data);
                            ?>
                <tbody id="dataTable">
                    <?php
                            while($d=mysqli_fetch_array($data)){
                            ?>
                    <tr>
                        <td class="text-center"><?php echo $noUrut++; ?></td>
                       
                   
                        <td><?php echo $d['KODE_PROGRAM']; ?></td>
                        <td><?php echo $d['NAMA_PROGRAM']; ?></td>
                   
                        <td class="text-center">
                            

                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#data<?php echo $d['ID_PROGRAM']; ?>">
                                <i class="fa fa-pencil"></i>&nbsp;
                                    
                                </button>

              
                            <!-- Modal Edit Data -->
                            <div class="modal fade" id="data<?php echo $d['ID_PROGRAM']; ?>" role="dialog"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">EDIT PROGRAM</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                             <form action="../proses/program_edit.php" method="POST">
                             <div class="mb-2">
                                                    <input type="hidden" name="ID_PROGRAM" class="form-control"
                                                        value="<?php echo $d['ID_PROGRAM']; ?>" readonly />
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-4">KODE PROGRAM</span>
                                                    <input type="text" class="form-control" name="KODE_PROGRAM"
                                                        id="KODE_PROGRAM" value="<?php echo $d['KODE_PROGRAM']; ?>">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-4">NAMA PROGRAM</span>
                                                    <input type="text" class="form-control" name="NAMA_PROGRAM"
                                                        id="NAMA_PROGRAM" value="<?php echo $d['NAMA_PROGRAM']; ?>">
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