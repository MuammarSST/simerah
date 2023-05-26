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
            <span class="text-grey"> / Data skpk</span>
        </div>
        <div class="button mb-2 ml-2">
            <button class="btn btn-md btn-custom mb-2 shadow" data-bs-toggle="modal" data-bs-target="#dataSkpkTambah">
                <i class="bi bi-plus-square mr-4"></i>&nbsp;
                Tambah Data
            </button>
        </div>
        <div class="table col col-auto border p-4 shadow rounded">
            <table id="myTable" class="table table-bordered"
                data-page-length="25">
                <thead class="table-primary text-center">
                    <tr>
                        <th class="text-center">No</th>
                        <th>Kode SKPK</th>
                        <th>Nama SKPK</th>
                        <th>Alamat</th>
                        <th>Keteragan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <?php 
                         
                            $noUrut=1;
                            $data=mysqli_query($koneksi,"SELECT * FROM skpk");
                            $jumlah_data = mysqli_num_rows($data);
                            ?>
                <tbody id="dataTable" class="table-infoo">
                    <?php
                            while($d=mysqli_fetch_array($data)){
                            ?>
                    <tr>
                        <td class="text-center"><?php echo $noUrut++; ?></td>
                        <td><?php echo $d['kode_skpk']; ?></td>
                        <td><?php echo $d['nama_skpk']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['keterangan']; ?></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning fa fa-pencil mr-2" title="Edit" data-bs-toggle="modal"
                                data-bs-target="#dataSkpkEdit<?php echo $d['id_skpk']; ?>"
                                value="<?php echo $d['id_skpk']; ?>"></button>
                            <a href="proses/data-skpk-hapus?id=<?php echo $d['id_skpk']; ?>"
                                onClick="return confirm('Apakah anda yakin menghapus data ini?')">
                                <i class="btn btn-sm btn-danger fa fa-trash mr-2" title="Hapus"></i>
                            </a>
                            <!-- Modal Edit Data -->
                            <div class="modal fade" id="dataSkpkEdit<?php echo $d['id_skpk']; ?>" role="dialog"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <form action="proses/data-skpk-edit?id=<?php echo $d['id_skpk']; ?>" method="POST">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-custom">
                                                <h5 class="modal-title text-white" id="staticBackdropLabel">
                                                    Edit Data SKPK
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body bg-light">
                                                <div class="mb-2">
                                                    <input type="hidden" name="idSkpk" class="form-control"
                                                        value="<?php echo $d['id_skpk']; ?>" readonly />
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-4">Kode SKPK</span>
                                                    <input type="text" class="form-control" name="kodeSkpk"
                                                        id="kodeSkpk" value="<?php echo $d['kode_skpk']; ?>">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-4">Nama SKPK</span>
                                                    <textarea rows="2" cols="" class="form-control" name="namaSkpk"
                                                        id="namaSkpk"
                                                        required><?php echo htmlspecialchars($d['nama_skpk']); ?></textarea>
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-4">Alamat</span>
                                                    <input type="text" class="form-control" name="alamat" id="alamat"
                                                        value="<?php echo $d['alamat']; ?>">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text col-4">Keterangan</span>
                                                    <input type="text" class="form-control" name="keterangan"
                                                        id="keterangan" value="<?php echo $d['keterangan']; ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
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
        <div class="modal fade" id="dataSkpkTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <form action="proses/data-skpk-tambah" method="POST">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-custom">
                            <h5 class="modal-title text-white" id="staticBackdropLabel">Tambah Data SKPK</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <span class="input-group-text col-4">Kode SKPK</span>
                                <input type="text" class="form-control" name="kodeSkpk" id="kodeSkpk" required
                                    placeholder="">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text col-4">Nama SKPK</span>
                                <textarea rows="2" cols="" class="form-control" name="namaSkpk" id="namaSkpk"
                                    required></textarea>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text col-4">Alamat</span>
                                <input type="text" class="form-control" name="alamat" id="alamat" required
                                    placeholder="">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text col-4">Keterangan</span>
                                <input type="text" class="form-control" name="keterangan" id="keterangan" required
                                    placeholder="">
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

    <?php
        include 'footer.php';
    ?>