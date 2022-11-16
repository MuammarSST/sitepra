<?php
include('koneksi.php');

$post_id_paket = $_POST['id_paket'];
$query = "SELECT laporan.*, skpk.nama_skpk FROM laporan  INNER JOIN skpk ON laporan.skpk_id=skpk.id_skpk where laporan.id_paket = '$post_id_paket' ";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SITEPRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  </head>
</head>
<body>

<table class="table table-bordered" >
  <thead>
    <tr class="text-center">
      <th scope="col" style="background: #B4C6E7;">KONSTRUKSI</th>
      <th rowspan="2" style="background: #C6E0B4;">LAPORAN HASIL MONITORING DAN EVALUASI TEPRA PIDIE TAHUN 2022</th>
      <th scope="col" style="background: #B4C6E7;">FUNGSI</th>
      <th rowspan="2" style="background: #C6E0B4;">21</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <th style="background: #B4C6E7;">F1</th>
      <th style="background: #C6E0B4;"></th>
      <th style="background: #B4C6E7;">H</th>
      <th style="background: #C6E0B4;"></th>
    </tr>
    <tr>
      <th scope="row">NAMA PAKET</th>
      <td><?php echo $row['nama_paket']; ?></td>
      <th>SKPK</th>
      <td><?php echo $row['nama_skpk'];?></td>
      
    </tr>
    <tr>
      <th scope="row">ALAMAT</th>
      <td><?php echo $row['alamat_paket']; ?></td>
      <th>KPA</th>
      <td><?php echo $row['kpa'];?></td>

    </tr>
    <tr>
        <th></th>
        <th></th>
      <th>ALAMAT</th>
      <td><?php echo $row['alamat'];?></td>
    </tr>
    <tr class="text-center" style="background: #D9D9D9;">
        <th>KOORDINAT</th>
        <th>KONDISI</th>
      <th colspan="2">PENGELOLA ANGGARAN SKPK</th>

    </tr>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>