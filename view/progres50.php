<?php
require('../proses/koneksi.php');

if(isset($_POST['progres50'])){
  $post_id_paket = $_POST['id_paket'];
}

$query = "SELECT * FROM laporan where id_paket = '$post_id_paket' ";
$result = mysqli_query($koneksi,$query);
if (!$result) {
  die('Invalid query: ' .$mysqli->error);
}
$row = @mysqli_fetch_assoc($result);
?>

<?php 
require('../view/template-atas-monev.php');
?>
<main>
    <div class="container">
        <div class="title">
        <h3 class="text-gray-800 my-2">Progres 100%</h3>
        </div>
        <div class="subtitle border-bottom ">
        <span class=""><a href="../view/monev.php">Beranda </a></span>
            <span class="text-grey"> / Upload foto hasil monev</span>
        </div>
        <form class="g-3" method="post" action="../proses/simpan_progres50.php" enctype="multipart/form-data">
            <input type="hidden" id="id_paket" name="id_paket" value="<?php echo $row['id_paket']; ?>">
            <div class="card shadow">
                <div class="card-header bg-danger">
                    <h5 class="text-white">Nama Paket : <?php echo $row['nama_paket']; ?></h5>
                </div>
                <div class="card ">

                    <div class="card-body">
                        
                        <label for="kondisi_3" class="form-label">Kondisi 3 :</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="kondisi_3" name="kondisi_3"
                                aria-describedby="inputGroupFileAddon04" aria-label="Upload" onchange="readURL3(this);"
                                required>
                        </div>
                        <div class="mb-3">
                            <img src="foto/80x80.png" id="preview_3" class="img-thumbnail">
                        </div>
                        <label for="kondisi_4" class="form-label">Kondisi 4 :</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="kondisi_4" name="kondisi_4"
                                aria-describedby="inputGroupFileAddon04" aria-label="Upload" onchange="readURL4(this);"
                                required>
                        </div>
                        <div class="mb-3">
                            <img src="foto/80x80.png" id="preview_4" class="img-thumbnail">
                        </div>
                        
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-4 mx-4">
                <a href="./monev.php" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali </a>
                    <button type="submit" name="submit" class="btn btn-success ">
                    <i class="fa fa-send"></i>
                        Upload</button>
                </div>
        </form>

    </div>
</main>
<script type="text/javascript">


function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#preview_3').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function readURL4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#preview_4').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

</script>
<?php require('../view/template-bawah-monev.php'); ?>