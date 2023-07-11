<?php

require('../view/template-atas-monev.php');

require('../proses/koneksi.php');

$post_id_paket = $_POST['id_paket'];

$query = "SELECT laporan.*, skpk.nama_skpk,jenis_paket.*, sumber_dana.sumber_dana 
FROM laporan  
LEFT JOIN skpk ON laporan.skpk_id=skpk.id_skpk 
INNER JOIN jenis_paket ON laporan.jenis_paket=jenis_paket.id
INNER JOIN sumber_dana ON laporan.id_sumber_dana=sumber_dana.id_sumber_dana
where laporan.id_paket = '$post_id_paket' ";
$result = mysqli_query($koneksi,$query);
$row = mysqli_fetch_array($result);

$query_jenis_paket = "SELECT * FROM jenis_paket";
$result_jenis_paket = mysqli_query($koneksi, $query_jenis_paket);
if (!$result_jenis_paket) {
    die('Invalid query: ' . $mysqli->error);
}
$query_sumber_dana= "SELECT * FROM sumber_dana";
$result_sumber_dana = mysqli_query($koneksi, $query_sumber_dana);
?>

        <div class="container-fluid">
            <div class="title">
                <h3 class="text-gray-800 my-2">Edit Data Hasil Monev</h3>
            </div>
            <div class="subtitle border-bottom">
                <span class=""><a href="index">Beranda </a></span>
                <span class="text-grey"> / Edit data hasil monev</span>
                
            </div>
            <div class="content">
            <a href="./monev.php" class="btn btn-danger mx-2 bi bi-arrow-left"><i class="fa fa-reply"></i> Kembali </a>
            </div>

            <form method="post" action="../proses/simpan_edit.php">
                
                <div class="card">

                    <input type="hidden" name="id_paket" id="id_paket" value="<?php echo $row['id_paket']; ?>">
                    <div class="card">
                        <div class="card-header card-header-danger">
                            DATA PAKET
                        </div>
                        <div class="card">

                            <div class="col-12">
                                <label for="nama_paket" class="form-label">NAMA PAKET :</label>
                                <input type="text" class="form-control" id="nama_paket" name="nama_paket"
                                    value="<?php echo $row['nama_paket']; ?>" required>
                            </div>
                                                <div class="col-12">
                        <label for="jenis_paket" class="form-label">JENIS PAKET :</label>
                        <select id="jenis_paket" name="jenis_paket" class="card" required>
                        <option value="<?php echo $row['jenis_paket']; ?>" selected>
                                        <?php echo $row['kode'];?>
                                    </option>
                                    <option disabled> --- Pilih Jenis Paket ---</option>
                            <?php
                            $i = 0;
                            while ($row_jenis_paket = @mysqli_fetch_assoc($result_jenis_paket)) {

                                $id_jenis_paket = $row_jenis_paket['id'];
                                $kode_jenis_paket = $row_jenis_paket['kode'];

                            ?>
                                <option value="<?php echo $id_jenis_paket; ?>"><?php echo $kode_jenis_paket; ?></option>
                            <?php
                                $i++;
                            } ?>
                        </select>
                    </div>
                            <div class="col-12">
                                <label for="alamat_paket" class="form-label">ALAMAT :</label>
                                <input type="text" class="form-control" id="alamat_paket" name="alamat_paket"
                                    value="<?php echo $row['alamat_paket']; ?> " required>
                            </div>
                            <div class="col-12">
                                <label for="latitude" class="form-label">Latitude :</label>
                                <input type="text" class="form-control" id="latitude" name="latitude"
                                    value="<?php echo $row['latitude']; ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="longitude" class="form-label">Longitude :</label>
                                <input type="text" class="form-control" id="longitude" name="longitude"
                                    value="<?php echo $row['longitude']; ?>" required>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                    <div class="card-header card-header-danger">
                            SKPK
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                <label for="skpk_id" class="form-label">NAMA SKPK :</label>
                                <select id="skpk_id" name="skpk_id" class="card" required>
                                    <option value="<?php echo $row['skpk_id']; ?>" selected>
                                        <?php echo $row['nama_skpk'];?>
                                    </option>
                                    <option disabled> --- Pilih SKPK ---</option>
                                    <?php
      $query_skpk = "SELECT * FROM skpk";
      $result_skpk = mysqli_query($koneksi,$query_skpk);
        	$i=0;
          while ($data = @mysqli_fetch_assoc($result_skpk)){
          ?>
                                    <option value="<?php echo $data['id_skpk'];?>"><?php echo $data['nama_skpk'];?>
                                    </option>
                                    <?php 
         $i++;
        } ?>

                                </select>
                            </div>

                            <div class="col-12">
                                <label for="kpa" class="form-label">KPA :</label>
                                <input type="text" class="form-control" id="kpa" name="kpa"
                                    value="<?php echo $row['kpa']; ?>" required>
                            </div>

                            <div class="col-12">
                                <label for="alamat_skpk" class="form-label">ALAMAT :</label>
                                <input type="text" class="form-control" id="alamat_skpk" name="alamat_skpk"
                                    value="<?php echo $row['alamat_skpk']; ?>" required>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                    <div class="card-header card-header-danger">
                            PENGELOLA ANGGARAN SKPK
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                <label for="nama_pa" class="form-label">1. Nama PA :</label>
                                <input type="text" class="form-control" id="nama_pa" name="nama_pa"
                                    value="<?php echo $row['nama_pa']; ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="nama_bendahara" class="form-label">2. Nama Bendahara :</label>
                                <input type="text" class="form-control" id="nama_bendahara" name="nama_bendahara"
                                    value="<?php echo $row['nama_bendahara']; ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="nama_pptk" class="form-label">3. Nama PPTK :</label>
                                <input type="text" class="form-control" id="nama_pptk" name="nama_pptk"
                                    value="<?php echo $row['nama_pptk']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                    <div class="card-header card-header-danger">
                            PENGELOLA TEKNIS
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Instansi Asal</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td> <input type="text" class="form-control" id="pl_nama_1" name="pl_nama_1"
                                                value="<?php echo $row['pl_nama_1']; ?>" required></td>
                                        <td> <input type="text" class="form-control" id="pl_instasi_asal_1"
                                                name="pl_instasi_asal_1"
                                                value="<?php echo $row['pl_instasi_asal_1']; ?>" required></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td> <input type="text" class="form-control" id="pl_nama_2" name="pl_nama_2"
                                                value="<?php echo $row['pl_nama_2']; ?>" required></td>
                                        <td> <input type="text" class="form-control" id="pl_instasi_asal_2"
                                                name="pl_instasi_asal_2"
                                                value="<?php echo $row['pl_instasi_asal_2']; ?>" required></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td> <input type="text" class="form-control" id="pl_nama_3" name="pl_nama_3"
                                                value="<?php echo $row['pl_nama_3']; ?>" required></td>
                                        <td> <input type="text" class="form-control" id="pl_instasi_asal_3"
                                                name="pl_instasi_asal_3"
                                                value="<?php echo $row['pl_instasi_asal_3']; ?>" required></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td> <input type="text" class="form-control" id="pl_nama_4" name="pl_nama_4"
                                                value="<?php echo $row['pl_nama_4']; ?>" required></td>
                                        <td> <input type="text" class="form-control" id="pl_instasi_asal_4"
                                                name="pl_instasi_asal_4"
                                                value="<?php echo $row['pl_instasi_asal_4']; ?>" required></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td> <input type="text" class="form-control" id="pl_nama_5" name="pl_nama_5"
                                                value="<?php echo $row['pl_nama_5']; ?>" required></td>
                                        <td> <input type="text" class="form-control" id="pl_instasi_asal_5"
                                                name="pl_instasi_asal_5"
                                                value="<?php echo $row['pl_instasi_asal_5']; ?>" required></td>

                                    </tr>
                                </tbody>

                            </table>

                        </div>


                    </div>

                    <div class="card">
                    <div class="card-header card-header-danger">
                            PENGGUNA / PENERIMA
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                <label for="nama" class="form-label">1. Nama :</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="<?php echo $row['nama']; ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="jabatan" class="form-label">2. Jabatan :</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan"
                                    value="<?php echo $row['jabatan']; ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="alamat" class="form-label">3. Alamat :</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    value="<?php echo $row['alamat']; ?>" required>
                            </div>
                        </div>
                    </div>



                    <div class="card">
                    <div class="card-header card-header-danger">
                            TIM PROVISIONAL HAND OVER (PHO)
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Instansi Asal</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td> <input type="text" class="form-control" id="pho_nama_1" name="pho_nama_1"
                                                value="<?php echo $row['pho_nama_1']; ?>" required></td>
                                        <td> <input type="text" class="form-control" id="pho_instasi_asal_1"
                                                name="pho_instasi_asal_1"
                                                value="<?php echo $row['pho_instasi_asal_1']; ?>" required></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td> <input type="text" class="form-control" id="pho_nama_2" name="pho_nama_2"
                                                value="<?php echo $row['pho_nama_2']; ?>" required></td>
                                        <td> <input type="text" class="form-control" id="pho_instasi_asal_2"
                                                name="pho_instasi_asal_2"
                                                value="<?php echo $row['pho_instasi_asal_2']; ?>" required></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td> <input type="text" class="form-control" id="pho_nama_3" name="pho_nama_3"
                                                value="<?php echo $row['pho_nama_3']; ?>" required></td>
                                        <td> <input type="text" class="form-control" id="pho_instasi_asal_3"
                                                name="pho_instasi_asal_3"
                                                value="<?php echo $row['pho_instasi_asal_3']; ?>" required></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td> <input type="text" class="form-control" id="pho_nama_4" name="pho_nama_4"
                                                value="<?php echo $row['pho_nama_4']; ?>" required></td>
                                        <td> <input type="text" class="form-control" id="pho_instasi_asal_4"
                                                name="pho_instasi_asal_4"
                                                value="<?php echo $row['pho_instasi_asal_4']; ?>" required></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td> <input type="text" class="form-control" id="pho_nama_5" name="pho_nama_5"
                                                value="<?php echo $row['pho_nama_5']; ?>" required></td>
                                        <td> <input type="text" class="form-control" id="pho_instasi_asal_5"
                                                name="pho_instasi_asal_5"
                                                value="<?php echo $row['pho_instasi_asal_5']; ?>" required></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td> <input type="text" class="form-control" id="pho_nama_6" name="pho_nama_6"
                                                value="<?php echo $row['pho_nama_6']; ?>" required></td>
                                        <td> <input type="text" class="form-control" id="pho_instasi_asal_6"
                                                name="pho_instasi_asal_6"
                                                value="<?php echo $row['pho_instasi_asal_6']; ?>" required></td>

                                    </tr>
                                </tbody>

                            </table>

                        </div>


                    </div>


                    <div class="card">
                    <div class="card-header card-header-danger">
                            PERENCANAAN
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                <label for="pr_nama_perusahaan" class="form-label">1. Nama Perusahaan :</label>
                                <input type="text" class="form-control" id="pr_nama_perusahaan"
                                    name="pr_nama_perusahaan" value="<?php echo $row['pr_nama_perusahaan']; ?>"
                                    required>
                            </div>
                            <div class="col-12">
                                <label for="pr_alamat_perusahaan" class="form-label">2. Alamat Perusahaan :</label>
                                <input type="text" class="form-control" id="pr_alamat_perusahaan"
                                    name="pr_alamat_perusahaan" value="<?php echo $row['pr_alamat_perusahaan']; ?>"
                                    required>
                            </div>
                            <div class="col-12">
                                <label for="pr_nama_pimpinan" class="form-label">3. Nama Pimpinan :</label>
                                <input type="text" class="form-control" id="pr_nama_pimpinan" name="pr_nama_pimpinan"
                                    value="<?php echo $row['pr_nama_pimpinan']; ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="pr_alamat_pimpinan" class="form-label">4. Alamat Pimpinan :</label>
                                <input type="text" class="form-control" id="pr_alamat_pimpinan"
                                    name="pr_alamat_pimpinan" value="<?php echo $row['pr_alamat_pimpinan']; ?>"
                                    required>
                            </div>
                            <div class="col-12">
                                <label for="pr_nilai_kontrak" class="form-label">5. Nilai Kontrak :</label>
                                <input type="text" class="form-control" id="pr_nilai_kontrak" name="pr_nilai_kontrak"
                                    value="<?php echo $row['pr_nilai_kontrak']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                    <div class="card-header card-header-danger">
                            PENGAWASAN
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                <label for="pw_nama_perusahaan" class="form-label">1. Nama Perusahaan :</label>
                                <input type="text" class="form-control" id="pw_nama_perusahaan"
                                    name="pw_nama_perusahaan" value="<?php echo $row['pw_nama_perusahaan']; ?>"
                                    required>
                            </div>
                            <div class="col-12">
                                <label for="pw_alamat_perusahaan" class="form-label">2. Alamat Perusahaan :</label>
                                <input type="text" class="form-control" id="pw_alamat_perusahaan"
                                    name="pw_alamat_perusahaan" value="<?php echo $row['pw_alamat_perusahaan']; ?>"
                                    required>
                            </div>
                            <div class="col-12">
                                <label for="pw_nama_pimpinan" class="form-label">3. Nama Pimpinan :</label>
                                <input type="text" class="form-control" id="pw_nama_pimpinan" name="pw_nama_pimpinan"
                                    value="<?php echo $row['pw_nama_pimpinan']; ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="pw_alamat_pimpinan" class="form-label">4. Alamat Pimpinan :</label>
                                <input type="text" class="form-control" id="pw_alamat_pimpinan"
                                    name="pw_alamat_pimpinan" value="<?php echo $row['pw_alamat_pimpinan']; ?>"
                                    required>
                            </div>
                            <div class="col-12">
                                <label for="pw_nilai_kontrak" class="form-label">5. Nilai Kontrak :</label>
                                <input type="text" class="form-control" id="pw_nilai_kontrak" name="pw_nilai_kontrak"
                                    value="<?php echo $row['pw_nilai_kontrak']; ?>" required>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                    <div class="card-header card-header-danger">
                            PELAKSANA FISIK
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                <label for="pf_nama_perusahaan" class="form-label">1. Nama Perusahaan :</label>
                                <input type="text" class="form-control" id="pf_nama_perusahaan"
                                    name="pf_nama_perusahaan" value="<?php echo $row['pf_nama_perusahaan']; ?>"
                                    required>
                            </div>
                            <div class="col-12">
                                <label for="pf_alamat_perusahaan" class="form-label">2. Alamat Perusahaan :</label>
                                <input type="text" class="form-control" id="pf_alamat_perusahaan"
                                    name="pf_alamat_perusahaan" value="<?php echo $row['pf_alamat_perusahaan']; ?>"
                                    required>
                            </div>
                            <div class="col-12">
                                <label for="pf_nama_pimpinan" class="form-label">3. Nama Pimpinan :</label>
                                <input type="text" class="form-control" id="pf_nama_pimpinan" name="pf_nama_pimpinan"
                                    value="<?php echo $row['pf_nama_pimpinan']; ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="pf_nomor_kontrak" class="form-label">4. Nomor Kontrak :</label>
                                <input type="text" class="form-control" id="pf_nomor_kontrak" name="pf_nomor_kontrak"
                                    value="<?php echo $row['pf_nomor_kontrak']; ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="pf_nilai_kontrak" class="form-label">5. Nilai Kontrak :</label>
                                <input type="text" class="form-control" id="pf_nilai_kontrak" name="pf_nilai_kontrak"
                                    value="<?php echo $row['pf_nilai_kontrak']; ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="pf_tanggal" class="form-label">6. Waktu (Tanggal) :</label>
                                <input type="text" class="form-control" id="pf_tanggal" name="pf_tanggal"
                                    value="<?php echo $row['pf_tanggal']; ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="pf_pagu" class="form-label">7. Pagu :</label>
                                <input type="text" class="form-control" id="pf_pagu" name="pf_pagu"
                                    value="<?php echo $row['pf_pagu']; ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="id_sumber_dana" class="form-label">8. Sumber Dana :</label>
                                
                                    <select id="id_sumber_dana" name="id_sumber_dana" class="card" required>
                                    <option value="<?php echo $row['id_sumber_dana']; ?>" selected>
                                                    <?php echo $row['sumber_dana'];?>
                                                </option>
                                                <option disabled> --- Pilih Jenis Paket ---</option>
                                        <?php
                                        $i = 0;
                                        while ($row_sumber_dana = @mysqli_fetch_assoc($result_sumber_dana)) {

                                            $id_sumber_dana = $row_sumber_dana['id_sumber_dana'];
                                            $kode_sumber_dana = $row_sumber_dana['sumber_dana'];

                                        ?>
                                            <option value="<?php echo $id_sumber_dana; ?>"><?php echo $kode_sumber_dana; ?></option>
                                        <?php
                                            $i++;
                                        } ?>
                                    </select>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                    <div class="card-header card-header-danger">
                            PROVISIONAL HAND OVER (PHO)
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Nomor :</label>
                                <input type="text" class="form-control" id="no_pho" name="no_pho"
                                    value="<?php echo $row['no_pho']; ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Tanggal :</label>
                                <input type="text" class="form-control" id="tgl_pho" name="tgl_pho"
                                    value="<?php echo $row['tgl_pho']; ?>" required>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                    <div class="card-header card-header-danger">
                            Hasil Akhir / Sementara
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                <input type="text" class="form-control" id="ha" name="ha"
                                    value="<?php echo $row['ha']; ?>" required>
                            </div>


                        </div>
                    </div>
                    <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $id_user; ?>">
                    <input type="hidden" class="form-control" id="id_tahun" name="id_tahun" value="<?php echo $id_tahun; ?>">
                    <div class="d-flex justify-content-end mb-4 mx-4">
                        <a href="./monev.php" class="btn btn-danger mx-2"><i class="fa fa-reply"></i> Kembali </a>
                        <button type="submit" name="submit" class="btn btn-success px-4"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>

   

<?php
require('../view/template-bawah-monev.php')
?>