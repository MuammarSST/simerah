<?php
require('../view/template-atas-admin.php');

require('../proses/koneksi.php');
?>




<div class="container container-fluid">
    <div class="title">
        <h3 class="text-gray-800 my-2">Data User</h3>
    </div>
    <div class="subtitle border-bottom mb-4 pb-2">
        <span class=""><a href="index">Beranda </a></span>
        <span class="text-grey"> / Data user</span>
    </div>
    <div class="button mb-2 ml-2">
        <button class="btn btn-md btn-custom mb-2 shadow" data-bs-toggle="modal" data-bs-target="#dataUserTambah">
            <i class="bi bi-plus-square mr-4"></i>&nbsp;
            Tambah Data
        </button>
    </div>
    <div class="table col col-auto border p-4 shadow rounded">
        <table id="myTable" class="table table-bordered">
            <thead class="table-primary text-center">
                <tr>
                    <th class="text-center">No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor HP</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Keteragan</th>
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
                        <td><?php echo $d['keterangan']; ?></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-secondary fa fa-arrow-repeat mr-2" title="Reset Password" data-bs-toggle="modal" data-bs-target="#resetPassword<?php echo $d['id_user']; ?>" value="<?php echo $d['id_user']; ?>">
                            </button>
                            <button class="btn btn-sm btn-warning fa fa-pencil mr-2" title="Edit" data-bs-toggle="modal" data-bs-target="#dataUserEdit<?php echo $d['id_user']; ?>" value="<?php echo $d['id_user']; ?>"></button>
                            <a href="proses/data-user-hapus?id=<?php echo $d['id_user']; ?>" onClick="return confirm('Apakah anda yakin menghapus data ini?')">
                                <i class="btn btn-sm btn-danger fa fa-trash mr-2" title="Hapus"></i>
                            </a>
                            <!-- Reset Modal-->
                            <div class="modal fade" id="resetPassword<?php echo $d['id_user']; ?>" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <form action="proses/data-user-reset-pw?id=<?php echo $d['id_user']; ?>" method="POST">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-custom">
                                                <h5 class="modal-title text-white" id="staticBackdropLabel">
                                                    Reset Password
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body bg-light">
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
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-sm btn-primary">Reset
                                                    Password</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Modal Edit Data -->
                            <div class="modal fade" id="dataUserEdit<?php echo $d['id_user']; ?>" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <form action="proses/data-user-edit?id=<?php echo $d['id_user']; ?>" method="POST">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-custom">
                                                <h5 class="modal-title text-white" id="staticBackdropLabel">
                                                    Edit Data User
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body bg-light">
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
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
    <!-- Modal Tambah Data -->
    <div class="modal fade" id="dataUserTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <form action="proses/data-user-tambah" method="POST">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-custom">
                        <h5 class="modal-title text-white" id="staticBackdropLabel">Tambah Data User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="input-group mb-2">
                            <span class="input-group-text col-3">Nama</span>
                            <input type="text" minlength="5" class="form-control" name="namaLengkap" id="namaLengkap" required placeholder="">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-3">Email</span>
                            <input type="email" class="form-control" name="email" id="email" required placeholder="">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-3">Nomor HP</span>
                            <input type="text" minlength="10" class="form-control" name="nomorHp" id="nomorHp" required placeholder="">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-3">Username</span>
                            <input type="text" minlength="5" class="form-control" name="username" id="username" required placeholder="">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-3">Password</span>
                            <input type="password" minlength="8" class="form-control" name="password" id="password" required placeholder="password">
                        </div>
                        <!-- <div class="input-group mb-2">
                                <span class="input-group-text col-3">Konfirmasi</span>
                                <input type="password" class="form-control" name="passwordKonfirmasi"
                                    id="passwordKonfirmasi" required placeholder="password konfirmasi">
                            </div> -->
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div>
    <?php
    include 'footer.php';
    ?>
</div>