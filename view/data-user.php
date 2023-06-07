<?php
require('../view/template-atas-admin.php');

require('../proses/koneksi.php');
?>
<div class="container container-fluid">
    <div class="title">
        <h3 class="text-gray-800 my-2">Data USER</h3>
    </div>
    <div class="subtitle border-bottom mb-4 pb-2">
        <span class=""><a href="index">Beranda </a></span>
        <span class="text-grey"> / Data USER</span>
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="../proses/data-user-tambah.php" method="POST">			
                        <div class="input-group mb-2">
                            <span class="input-group-text col-3">Nama</span>
                            <input type="text" minlength="3" class="form-control" name="namaLengkap" id="namaLengkap" required placeholder="">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-3">Email</span>
                            <input type="email" class="form-control" name="email" id="email" required placeholder="">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-3">Nomor HP</span>
                            <input type="text" minlength="3" class="form-control" name="nomorHp" id="nomorHp" required placeholder="">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-3">Username</span>
                            <input type="text" minlength="3" class="form-control" name="username" id="username" required placeholder="">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-3">Password</span>
                            <input type="password" minlength="3" class="form-control" name="password" id="password" required placeholder="password">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-3">Level</span>
                            <select class="form-select form-control" id="level" name="level" required>
                                <option value="" disabled selected>Pilih Level<i class="fa fa-level-up" aria-hidden="true"></i></option>
                                <option value="super-admin">Super Admin</option>
                                <option value="admin-monev">Admin Monev</option>
                            </select>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-3">Keterangan</span>
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
                  <h4 class="card-title "> Data USER</h4>
                  <p class="card-category"> </p>
                </div>
          <div class="card-body">
        <div class="table-responsive">
        <table id="myTable" class="table table-bordered" data-page-length="25">
            <thead class="text-center text-primary">
            <tr>
                    <th class="text-center">No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor HP</th>
                    <th>Username</th>
                    <th>Level</th>
                  
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <?php

                 $noUrut = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM users");
                $jumlah_data = mysqli_num_rows($data);
                
                ?>
            <tbody id="dataTable" class="table-infoo">
           
            <?php
                while ($d = mysqli_fetch_array($data)) {
                ?>

                    <tr>
                    <td class="text-center"><?php echo $noUrut++; ?></td>
                        <td><?php echo $d['nama_lengkap']; ?></td>
                        <td><?php echo $d['email']; ?></td>
                        <td><?php echo $d['nomor_hp']; ?></td>
                        <td><?php echo $d['username']; ?></td>
                        <td><?php echo $d['level']; ?></td>
                     
                        <td>
                                                  
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#data<?php echo $d['id_user']; ?>">
                                <i class="fa fa-pencil"></i>
                                </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reset<?php echo $d['id_user']; ?>">
                                <i class="fa fa-refresh"></i>
                                </button>
                            <a class="btn btn-danger" href="../proses/data-user-hapus.php?id=<?php echo $d['id_user']; ?>" onClick="return confirm('Apakah anda yakin menghapus data : <?php echo $d['username'];?> ?')">
                                <i class="fa fa-trash" ></i>
                            </a>
                            <!-- Modal Edit Data -->
                            <div class="modal fade" id="data<?php echo $d['id_user']; ?>" role="dialog"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="../proses/data-user-edit.php?id=<?php echo $d['id_user']; ?>" method="POST">
                             
                            <div class="mb-2">
                                                    <input type="hidden" name="idUser" class="form-control" value="<?php echo $d['id_user']; ?>" readonly />
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-3">Nama</span>
                                                    <input type="text" class="form-control" name="namaLengkap" id="namaLengkap" value="<?php echo $d['nama_lengkap']; ?>">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-3">Email</span>
                                                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $d['email']; ?>">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-3">Nomor HP</span>
                                                    <input type="text" class="form-control" name="nomorHp" id="nomorHp" value="<?php echo $d['nomor_hp']; ?>">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-3">Username</span>
                                                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $d['username']; ?>">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-3">Level</span>
                                                    <select class="form-select" id="level" name="level" required="">
                                                        <option value="super-admin" <?php
                                                                                    if ($d['level'] == "super-admin") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>Admin Utama
                                                        </option>
                                                        <option value="admin-monev" <?php
                                                                                    if ($d['level'] == "admin-monev") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>Admin Monev
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-3">Keterangan</span>
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

                            <!-- Modal reset Data -->
                            <div class="modal fade" id="reset<?php echo $d['id_user']; ?>" role="dialog"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="../proses/data-user-reset-pw.php?id=<?php echo $d['id_user']; ?>" method="POST">
                            <div class="mb-4">
                                                    <input type="hidden" name="idUser" class="form-control" value="<?php echo $d['id_user']; ?>" readonly />
                                                </div>
                                                <p>Masukkan password baru untuk reset user: <br />
                                                    <b> <?php echo $d['nama_lengkap'] . " - " . $d['level']; ?>.</b>
                                                </p>
                                                <div class="input-group mb-4">
                                                    <span class="input-group-text col-4">Password</span>
                                                    <input type="password" minlength="8" class="form-control" name="password" id="password" required placeholder="">
                                                    <!-- <i class="bi bi-eye show-hide" id="showPw"></i> -->
                                                </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-reply"></i> Batal</button>
                                            <button type="submit" class="btn btn-success"><i class="fa fa-send"></i> Simpan</button>
                                        </div>
                            </div>
                            </form>
                        </div>
                               
                            </div>
                            <!-- End of Modal reset Data -->
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