<?php
error_reporting(E_ALL);
$servername="localhost";
$username="root";
$password="";
$dbname="sitepra";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}else{
	//echo "connected";
}
$query = "SELECT * FROM laporan";
$result = mysqli_query($conn,$query);
if (!$result) {
  die('Invalid query: ' . mysqli_error());
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SITEPRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
  <body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SITEPRA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/sitepra/">Beranda</a>
        <a class="nav-link" href="#">Download</a>
        <a class="nav-link" href="#">Signout</a>
      </div>
    </div>
  </div>
</nav>


	
	<div class="container">
	<br>
	<a href="tambah.php" class="btn btn-primary">Tambah Data</a>

    
<table class="table" >
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Paket</th>
	  <th scope="col">Alamat Paket</th>
      <th scope="col">Latitude</th>
      <th scope="col">Longitude</th>
	   <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    
	<?php 
	$i=0;
	while ($row = @mysqli_fetch_assoc($result)){
		$id_paket=$row['id_paket'];
		$nama_peta=$row['nama_paket'];
		$alamat_peta=$row['alamat_paket'];
		$lat=$row['latitude'];
		$long=$row['longitude'];
		$i++;
	?>
	<tr>
      <th scope="row"><?php echo $id_paket ?></th>
      <td><?php echo $nama_peta ?></td>
	   <td><?php echo $alamat_peta ?></td>
      <td><?php echo $lat ?></td>
      <td><?php echo $long ?></td>
	  <td>
		  <form method="POST"  target="_blank" action="lihat_peta.php">
			<input type="hidden" name="latitude" value="<?php echo $lat ?>">
			<input type="hidden" name="longitude" value="<?php echo $long ?>">
			<input type="submit" name="submit_coordinates" value="Lihat Peta" class ="btn btn-success">
		</form>
    <br>
    <form method="POST" action="edit.php" >
			<input type="hidden" name="id_paket" value="<?php echo $id_paket ?>">
			<input type="submit" name="edit_paket" value="Edit Data" class ="btn btn-warning">
		</form>

	 </td>
	
    </tr>
	<?php }?>
	
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
