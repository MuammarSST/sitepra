
<?php
    if (isset($_POST["submit_coordinates"]))
    {
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        ?>
  
		<iframe  width="100%" height="100%" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
 
        <?php
    }
?>
