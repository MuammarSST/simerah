<!doctype html>
<html lang="en">
<head>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.all.min.js"></script>
</head>
</html>

<?php
    
    require('../proses/koneksi.php');

    if($koneksi->connect_error){
        die("Connection Failed".$koneksi->connect_error);
    }else{
        //echo "connected";
    }
if(isset($_POST['submit'])){
    $id_paket = $_POST['id_paket'];
    $nama_paket = $_POST['nama_paket'];
    $jenis_paket = $_POST['jenis_paket'];
    $alamat_paket = $_POST['alamat_paket'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $skpk_id = $_POST['skpk_id'];
    $kpa = $_POST['kpa'];
    $alamat_skpk = $_POST['alamat_skpk'];

    $nama_pa = $_POST['nama_pa'];
    $nama_bendahara = $_POST['nama_bendahara'];
    $nama_pptk = $_POST['nama_pptk'];

    $pl_nama_1 = $_POST['pl_nama_1'];
    $pl_instasi_asal_1 = $_POST['pl_instasi_asal_1'];
    $pl_nama_2 = $_POST['pl_nama_2'];
    $pl_instasi_asal_2 = $_POST['pl_instasi_asal_2'];
    $pl_nama_3 = $_POST['pl_nama_3'];
    $pl_instasi_asal_3 = $_POST['pl_instasi_asal_3'];
    $pl_nama_4 = $_POST['pl_nama_4'];
    $pl_instasi_asal_4 = $_POST['pl_instasi_asal_4'];
    $pl_nama_5 = $_POST['pl_nama_5'];
    $pl_instasi_asal_5 = $_POST['pl_instasi_asal_5'];


    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];

    $pho_nama_1 = $_POST['pho_nama_1'];
    $pho_instasi_asal_1 = $_POST['pho_instasi_asal_1'];
    $pho_nama_2 = $_POST['pho_nama_2'];
    $pho_instasi_asal_2 = $_POST['pho_instasi_asal_2'];
    $pho_nama_3 = $_POST['pho_nama_3'];
    $pho_instasi_asal_3 = $_POST['pho_instasi_asal_3'];
    $pho_nama_4 = $_POST['pho_nama_4'];
    $pho_instasi_asal_4 = $_POST['pho_instasi_asal_4'];
    $pho_nama_5 = $_POST['pho_nama_5'];
    $pho_instasi_asal_5 = $_POST['pho_instasi_asal_5'];
    $pho_nama_6 = $_POST['pho_nama_6'];
    $pho_instasi_asal_6 = $_POST['pho_instasi_asal_6'];

    $pr_nama_perusahaan = $_POST['pr_nama_perusahaan'];
    $pr_alamat_perusahaan = $_POST['pr_alamat_perusahaan'];
    $pr_nama_pimpinan = $_POST['pr_nama_pimpinan'];
    $pr_alamat_pimpinan = $_POST['pr_alamat_pimpinan'];
    $pr_nilai_kontrak = $_POST['pr_nilai_kontrak'];

    $pw_nama_perusahaan = $_POST['pw_nama_perusahaan'];
    $pw_alamat_perusahaan = $_POST['pw_alamat_perusahaan'];
    $pw_nama_pimpinan = $_POST['pw_nama_pimpinan'];
    $pw_alamat_pimpinan = $_POST['pw_alamat_pimpinan'];
    $pw_nilai_kontrak = $_POST['pw_nilai_kontrak'];

    $pf_nama_perusahaan = $_POST['pf_nama_perusahaan'];
    $pf_alamat_perusahaan = $_POST['pf_alamat_perusahaan'];
    $pf_nama_pimpinan = $_POST['pf_nama_pimpinan'];
    $pf_nomor_kontrak = $_POST['pf_nomor_kontrak'];
    $pf_nilai_kontrak = $_POST['pf_nilai_kontrak'];
    $pf_tanggal = $_POST['pf_tanggal'];
    $pf_pagu = $_POST['pf_pagu'];
    $pf_sumber_dana = $_POST['pf_sumber_dana'];

    $no_pho = $_POST['no_pho'];
    $tgl_pho = $_POST['tgl_pho'];

    $ha = $_POST['ha'];


    $query = "UPDATE laporan SET 
        nama_paket = '$nama_paket',
        alamat_paket = '$alamat_paket',
        latitude =  '$latitude',
        longitude = '$longitude',
        skpk_id = '$skpk_id',
        kpa = '$kpa',
        alamat_skpk = '$alamat_skpk',
        nama_pa = '$nama_pa',
        nama_bendahara = '$nama_bendahara',
        nama_pptk = '$nama_pptk',
        pl_nama_1 =  '$pl_nama_1',
        pl_instasi_asal_1 =  '$pl_instasi_asal_1',
        pl_nama_2 = '$pl_nama_2',
        pl_instasi_asal_2 = '$pl_instasi_asal_2',
        pl_nama_3 = '$pl_nama_3',
        pl_instasi_asal_3 = '$pl_instasi_asal_3',
        pl_nama_4 = '$pl_nama_4',
        pl_instasi_asal_4 =  '$pl_instasi_asal_4',
        pl_nama_5 = '$pl_nama_5',
        pl_instasi_asal_5 = '$pl_instasi_asal_5',
        nama = '$nama',
        jabatan = '$jabatan',
        alamat = '$alamat',
        pho_nama_1 = '$pho_nama_1',
        pho_instasi_asal_1 = '$pho_instasi_asal_1',
        pho_nama_2 = '$pho_nama_2',
        pho_instasi_asal_2 = '$pho_instasi_asal_2',
        pho_nama_3 = '$pho_nama_3',
        pho_instasi_asal_3 = '$pho_instasi_asal_3',
        pho_nama_4 = '$pho_nama_4',
        pho_instasi_asal_4 = '$pho_instasi_asal_4',
        pho_nama_5 = '$pho_nama_5',
        pho_instasi_asal_5 = '$pho_instasi_asal_5',
        pho_nama_6 = '$pho_nama_6',
        pho_instasi_asal_6 = '$pho_instasi_asal_6',
        pr_nama_perusahaan = '$pr_nama_perusahaan',
        pr_alamat_perusahaan = '$pr_alamat_perusahaan',
        pr_nama_pimpinan = '$pr_nama_pimpinan',
        pr_alamat_pimpinan = '$pr_alamat_pimpinan',
        pr_nilai_kontrak = '$pr_nilai_kontrak',
        pw_nama_perusahaan = '$pw_nama_perusahaan',
        pw_alamat_perusahaan = '$pw_alamat_perusahaan',
        pw_nama_pimpinan = '$pw_nama_pimpinan',
        pw_alamat_pimpinan = '$pw_alamat_pimpinan',
        pw_nilai_kontrak = '$pw_nilai_kontrak',
        pf_nama_perusahaan = '$pf_nama_perusahaan',
        pf_alamat_perusahaan = '$pf_alamat_perusahaan',
        pf_nama_pimpinan = '$pf_nama_pimpinan',
        pf_nomor_kontrak = '$pf_nomor_kontrak',
        pf_nilai_kontrak = '$pf_nilai_kontrak',
        pf_tanggal = '$pf_tanggal',
        pf_pagu = '$pf_pagu',
        pf_sumber_dana = '$pf_sumber_dana',
        no_pho = '$no_pho',
        tgl_pho = '$tgl_pho',
        ha =  '$ha',
        jenis_paket ='$jenis_paket'
        
    WHERE id_paket = '$id_paket'";
    // var_dump($query);
    $result = mysqli_query($koneksi,$query);
    if (!$result) {
    die('Invalid query: '  .$mysqli->error);
    }

    if($result){
        echo "<script>
        Swal.fire({
           position: 'center',
           icon: 'success',
           title: 'Data berhasil diedit',
           showConfirmButton: false,
           timer: 1500
         }).then((result) => {
           window.location = '../view/monev.php';
         });
         
        </script>";
    }
}
?>