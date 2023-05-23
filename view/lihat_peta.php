
<?php
    if (isset($_POST["submit_coordinates"]))
    {
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        ?>

            
        <iframe width="100%" height="100%" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&t=k&z=19&ie=UTF8&iwloc=&output=embed"></iframe>
          

            

 
        <?php
    }
?>
