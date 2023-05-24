<?php
require('../proses/koneksi.php');

if(isset($_POST['edit_paket'])){
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
            <h3 class="text-gray-800 my-2">Upload Foto</h3>
        </div>
        <div class="subtitle border-bottom ">
            <span class=""><a href="index">Beranda </a></span>
            <span class="text-grey"> / Upload foto hasil monev</span>
        </div>
        <form class="g-3" method="post" action="../proses/upload_foto.php" enctype="multipart/form-data">
            <input type="hidden" id="id_paket" name="id_paket" value="<?php echo $row['id_paket']; ?>">
            <div class="card shadow">
                <div class="card-header bg-danger">
                    <h5 class="text-white">Nama Paket : <?php echo $row['nama_paket']; ?></h5>
                </div>
                <div class="card ">

                    <div class="card-body">
                        <label for="kondisi_1" class="form-label">Kondisi 1 :</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="kondisi_1" name="kondisi_1"
                                aria-describedby="inputGroupFileAddon04" aria-label="Upload" onchange="readURL1(this);"
                                required>
                        </div>
                        <div class="mb-3">
                            <img src="foto/80x80.png" id="preview_1" class="img-thumbnail">
                        </div>
                        <label for="kondisi_2" class="form-label">Kondisi 2 :</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="kondisi_2" name="kondisi_2"
                                aria-describedby="inputGroupFileAddon04" aria-label="Upload" onchange="readURL2(this);"
                                required>
                        </div>
                        <div class="mb-3">
                            <img src="foto/80x80.png" id="preview_2" class="img-thumbnail">
                        </div>
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
                        <label for="kondisi_5" class="form-label">Kondisi 5 :</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="kondisi_5" name="kondisi_5"
                                aria-describedby="inputGroupFileAddon04" aria-label="Upload" onchange="readURL5(this);"
                                required>
                        </div>
                        <div class="mb-3">
                            <img src="foto/80x80.png" id="preview_5" class="img-thumbnail">
                        </div>
                        <label for="kondisi_6" class="form-label">Kondisi 6 :</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="kondisi_6" name="kondisi_6"
                                aria-describedby="inputGroupFileAddon04" aria-label="Upload" onchange="readURL6(this);"
                                required>
                        </div>
                        <div class="mb-3">
                            <img src="foto/80x80.png" id="preview_6" class="img-thumbnail">
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
function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#preview_1').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#preview_2').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

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

function readURL5(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#preview_5').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function readURL6(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#preview_6').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
<?php include 'footer.php'; ?>