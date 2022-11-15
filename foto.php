<?php
include('koneksi.php');

if(isset($_POST['edit_paket'])){
  $post_id_paket = $_POST['id_paket'];
}

$query = "SELECT * FROM laporan where id_paket = '$post_id_paket' ";
$result = mysqli_query($conn,$query);
if (!$result) {
  die('Invalid query: ' .$mysqli->error);
}
$row = @mysqli_fetch_assoc($result);



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SITEPRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="js/jquery-3.4.1.js"></script>
  </head>
  <body>
  <?php include('nav.php');?>
<div class="container">

<form class="row g-3" method="post" action="upload_foto.php" enctype="multipart/form-data">
<input type="hidden" id="id_paket" name="id_paket"  value="<?php echo $row['id_paket']; ?>" >
  
<div class="card">
  <div class="card-header">
    <h1> <?php echo $row['nama_paket']; ?></h1>
  </div>



<div class="card">
  <div class="card-header">
    Upload Foto Kondisi
  </div>
  <div class="card-body">
  <label for="kondisi_1" class="form-label">Kondisi 1 :</label>
  <div class="input-group">
    <input type="file" class="form-control" id="kondisi_1" name="kondisi_1" aria-describedby="inputGroupFileAddon04" aria-label="Upload" onchange="readURL1(this);" required>
    
  </div>
  <div>
  <img src="foto/80x80.png" id="preview_1" class="img-thumbnail">
  </div>

  <label for="kondisi_2" class="form-label">Kondisi 2 :</label>
  <div class="input-group">
    <input type="file" class="form-control" id="kondisi_2" name="kondisi_2" aria-describedby="inputGroupFileAddon04" aria-label="Upload" onchange="readURL2(this);" required>
    
  </div>
  <div>
    <img src="foto/80x80.png" id="preview_2" class="img-thumbnail">
  </div>

  <label for="kondisi_3" class="form-label">Kondisi 3 :</label>
  <div class="input-group">
    <input type="file" class="form-control" id="kondisi_3" name="kondisi_3" aria-describedby="inputGroupFileAddon04" aria-label="Upload" onchange="readURL3(this);" required>
    
  </div>
  <div>
    <img src="foto/80x80.png" id="preview_3" class="img-thumbnail">
  </div>

  <label for="kondisi_4" class="form-label">Kondisi 4 :</label>
  <div class="input-group">
    <input type="file" class="form-control" id="kondisi_4" name="kondisi_4" aria-describedby="inputGroupFileAddon04" aria-label="Upload" onchange="readURL4(this);" required>
  
  </div>
  <div>
    <img src="foto/80x80.png" id="preview_4" class="img-thumbnail">
  </div>

  <label for="kondisi_5" class="form-label">Kondisi 5 :</label>
  <div class="input-group">
    <input type="file" class="form-control" id="kondisi_5" name="kondisi_5" aria-describedby="inputGroupFileAddon04" aria-label="Upload" onchange="readURL5(this);" required>
   
  </div>
  <div>
    <img src="foto/80x80.png" id="preview_5" class="img-thumbnail">
  </div>

  <label for="kondisi_6" class="form-label">Kondisi 6 :</label>
  <div class="input-group">
    <input type="file" class="form-control" id="kondisi_6" name="kondisi_6" aria-describedby="inputGroupFileAddon04" aria-label="Upload" onchange="readURL6(this);" required>
    
  </div>
  <div>
    <img src="foto/80x80.png" id="preview_6" class="img-thumbnail">
  </div>


  </div>
</div>

  <div class="col-12">
    <input type="submit" class="btn btn-primary" name="submit" value="Upload">
    <a href="/sitepra" class="btn btn-danger">Kembali </a> 
  </div>
</form>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript">
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview_1').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview_2').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview_3').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL4(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview_4').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL5(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview_5').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL6(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview_6').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
  </body>
</html>