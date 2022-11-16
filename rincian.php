<?php
include('koneksi.php');

$post_id_paket = $_POST['id_paket'];
$query = "SELECT laporan.*, skpk.nama_skpk FROM laporan  INNER JOIN skpk ON laporan.skpk_id=skpk.id_skpk where laporan.id_paket = '$post_id_paket' ";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SITEPRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
		<script>
			function generatePDF() {
			const element = document.getElementById('container_content');
			var opt = {
				  margin:       1,
				  filename:     '<?php echo $row['nama_skpk'];?> - <?php echo $row['nama_paket']; ?>.pdf',
				  jsPDF:        { unit: 'in', format: 'a3', orientation: 'landscape' }
				};
				html2pdf().set(opt).from(element).save();
			}
		</script>
		</head>
	<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
            
            </div>
            <div class="col-sm">
            <button class="btn btn-primary" onclick="generatePDF()">Download PDF </button>
            <a href="/sitepra" class="btn btn-danger">Kembali </a>
            </div>
            <div class="col-sm">
            
            </div>
        </div>
    </div>

<br>

		        
<div class="container_content" id="container_content" >

		


<table class="table table-bordered" >
  <thead>
    <tr class="text-center">
      <th scope="col" style="background: #B4C6E7;">KONSTRUKSI</th>
      <th colspan="3" style="background: #C6E0B4;">LAPORAN HASIL MONITORING DAN EVALUASI TEPRA PIDIE TAHUN 2022</th>
      <th colspan="2" style="background: #B4C6E7;">FUNGSI</th>
      <th style="background: #C6E0B4;">21</th>


    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <th style="background: #B4C6E7;">F1</th>
      <th  colspan="3" style="background: #C6E0B4;"></th>
      <th colspan="2" style="background: #B4C6E7;">H</th>
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
      <th colspan="2"></th>
      <th >PENGELOLA TEKNIS</th>

    </tr>
    <tr>
        <th></th>
        <th></th>
      <th>1. Nama PA</th>
      <td><?php echo $row['nama_pa'];?></td>
      <th scope="col" class="text-center">No.</th>
      <th scope="col" class="text-center">Nama</th>
      <th scope="col" class="text-center">Instansi Asal</th>


    </tr>
    <tr>
        <th></th>
        <th></th>
      <th>2. Nama Bendahara</th>
      <td><?php echo $row['nama_bendahara'];?></td>
      <th scope="col" class="text-center">1</th>
      <td><?php echo $row['pl_nama_1']; ?></td>
      <td><?php echo $row['pl_instasi_asal_1']; ?></td>
    </tr>
    <tr>
        <th></th>
        <th></th>
      <th>3. Nama PPTK</th>
      <td><?php echo $row['nama_pptk'];?></td>
      <th scope="col" class="text-center">2</th>
      <td><?php echo $row['pl_nama_2']; ?></td>
      <td><?php echo $row['pl_instasi_asal_2']; ?></td>
    </tr>
    <tr>
        <th></th>
        <th></th>
      <th></th>
      <td></td>
      <th scope="col" class="text-center">3</th>
      <td><?php echo $row['pl_nama_3']; ?></td>
      <td><?php echo $row['pl_instasi_asal_3']; ?></td>
    </tr>
    <tr>
        <th></th>
        <th></th>
      <th></th>
      <td></td>
      <th scope="col" class="text-center">4</th>
      <td><?php echo $row['pl_nama_4']; ?></td>
      <td><?php echo $row['pl_instasi_asal_4']; ?></td>
    </tr>
    <tr>
        <th></th>
        <th></th>
      <th></th>
      <td></td>
      <th scope="col" class="text-center">5</th>
      <td><?php echo $row['pl_nama_5']; ?></td>
      <td><?php echo $row['pl_instasi_asal_5']; ?></td>
    </tr>
    <tr class="text-center" style="background: #D9D9D9;">
        <th></th>
        <th></th>
      <th colspan="2">PENGGUNA / PENERIMA</th>
      <th colspan="2"></th>
      <th >TIM PROVISIONAL HAND OVER (PHO)</th>

    </tr>
    <tr>
        <th></th>
        <th></th>
      <th>1. Nama</th>
      <td><?php echo $row['nama'];?></td>
      <th scope="col" class="text-center">1</th>
      <td><?php echo $row['pho_nama_1']; ?></td>
      <td><?php echo $row['pho_instasi_asal_1']; ?></td>
    </tr>
    <tr>
        <th></th>
        <th></th>
      <th>2. Jabatan</th>
      <td><?php echo $row['jabatan'];?></td>
      <th scope="col" class="text-center">2</th>
      <td><?php echo $row['pho_nama_2']; ?></td>
      <td><?php echo $row['pho_instasi_asal_2']; ?></td>
    </tr>
    <tr>
        <th></th>
        <th></th>
      <th>3. Alamat</th>
      <td><?php echo $row['alamat'];?></td>
      <th scope="col" class="text-center">3</th>
      <td><?php echo $row['pho_nama_3']; ?></td>
      <td><?php echo $row['pho_instasi_asal_3']; ?></td>
    </tr>
    <tr>
        <th></th>
        <th></th>
      <th></th>
      <td></td>
      <th scope="col" class="text-center">4</th>
      <td><?php echo $row['pho_nama_4']; ?></td>
      <td><?php echo $row['pho_instasi_asal_4']; ?></td>
    </tr>
    <tr>
        <th></th>
        <th></th>
      <th></th>
      <td></td>
      <th scope="col" class="text-center">5</th>
      <td><?php echo $row['pho_nama_5']; ?></td>
      <td><?php echo $row['pho_instasi_asal_5']; ?></td>
    </tr>
    <tr>
        <th></th>
        <th></th>
      <th></th>
      <td></td>
      <th scope="col" class="text-center">6</th>
      <td><?php echo $row['pho_nama_6']; ?></td>
      <td><?php echo $row['pho_instasi_asal_6']; ?></td>
    </tr>
    <tr class="text-center" style="background: #D9D9D9;">
        <th></th>
        <th></th>
      <th colspan="2">KONSULTAN PERENCANAAN</th>
      <th colspan="3">PENGAWASAN</th>

    </tr>
    <tr>
        <th></th>
        <th></th>
      <th>1. Nama Perusahaan</th>
      <td><?php echo $row['pr_nama_perusahaan'];?></td>
      <th>1. Nama Perusahaan</th>
      <td colspan="2"><?php echo $row['pw_nama_perusahaan']; ?></td>

    </tr>
    <tr>
        <th></th>
        <th></th>
      <th>2. Alamat Perusahaan</th>
      <td><?php echo $row['pr_alamat_perusahaan'];?></td>
      <th>2. Alamat Perusahaan</th>
      <td colspan="2"><?php echo $row['pw_alamat_perusahaan']; ?></td>

    </tr>
    <tr>
        <th></th>
        <th></th>
      <th>3. Nama Pimpinan</th>
      <td><?php echo $row['pr_nama_pimpinan'];?></td>
      <th>3. Nama Pimpinan</th>
      <td colspan="2"><?php echo $row['pw_nama_pimpinan']; ?></td>
      
    </tr>
    <tr>
        <th></th>
        <th></th>
      <th>4. Alamat Pimpinan</th>
      <td><?php echo $row['pr_alamat_pimpinan'];?></td>
      <th>4. Alamat Pimpinan</th>
      <td colspan="2"><?php echo $row['pw_alamat_pimpinan']; ?></td>
      
    </tr>
    <tr>
        <th></th>
        <th></th>
      <th>5. Nilai Kontrak</th>
      <td><?php echo $row['pw_nilai_kontrak'];?></td>
      <th>5. Nilai Kontrak</th>
      <td colspan="2"><?php echo $row['pw_nilai_kontrak']; ?></td>
    </tr>

  </tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>
