<!doctype html>
<html lang="en">
<head>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.8/dist/sweetalert2.all.min.js"></script>
</head>
</html>

<?php

   if(isset($_POST['submit'])){ 
      


      upload_image1(); 
      upload_image2(); 

      
   
   }

   function upload_image1(){
      $post_id_paket = $_POST['id_paket'];
      require('../proses/koneksi.php');
      $uploadTo = "../uploads/"; 
      $allowedImageType = array('jpg','png','jpeg','gif');
      
      $imageName = $_FILES['kondisi_1']['name'];
      $tempPath=$_FILES["kondisi_1"]["tmp_name"];
      
      $basename = basename($imageName);
      $originalPath = $uploadTo.$basename; 
      $imageType = pathinfo($originalPath, PATHINFO_EXTENSION); 
      if(!empty($imageName)){ 
      
         if(in_array($imageType, $allowedImageType)){ 

            if(move_uploaded_file($tempPath,$originalPath)){ 
               
               $query = "UPDATE laporan SET `gambar_kondisi_1` = '$originalPath' WHERE `id_paket` = '$post_id_paket'";
            
               $result = mysqli_query($koneksi,$query);
               if (!$result) {
                  die('Gagal query: ' .$mysqli->error);
                  }
            
            }else{ 
               echo 'Gambar Gagal di upload!';
            } 
         }else{
            echo $imageType." exensi gambar tidak didukung";
         }
      }else{  
      echo "Harap Pilih Gambar";
      }       
   }
   function upload_image2(){
      $post_id_paket = $_POST['id_paket'];
      require('../proses/koneksi.php');
      $uploadTo = "../uploads/"; 
      $allowedImageType = array('jpg','png','jpeg','gif');
      
      $imageName = $_FILES['kondisi_2']['name'];
      $tempPath=$_FILES["kondisi_2"]["tmp_name"];
      
      $basename = basename($imageName);
      $originalPath = $uploadTo.$basename; 
      $imageType = pathinfo($originalPath, PATHINFO_EXTENSION); 
      if(!empty($imageName)){ 
      
         if(in_array($imageType, $allowedImageType)){ 

            if(move_uploaded_file($tempPath,$originalPath)){ 
               
               $query = "UPDATE laporan SET `gambar_kondisi_2` = '$originalPath' WHERE `id_paket` = '$post_id_paket'";
               $result = mysqli_query($koneksi,$query);
               if($result){
                  echo "<script>
                  Swal.fire({
                     position: 'center',
                     icon: 'success',
                     title: 'Data berhasil diupload',
                     showConfirmButton: false,
                     timer: 1500
                   }).then((result) => {
                     window.location = '../view/monev.php';
                   });
                   
                  </script>";

                  
               }
               if (!$result) {
                  die('Gagal query: ' .$mysqli->error);
                  }
            
            }else{ 
               echo 'Gambar Gagal di upload!';
            } 
         }else{
            echo $imageType." exensi gambar tidak didukung";
         }
      }else{  
      echo "Harap Pilih Gambar";
      }       
   }
   




?>