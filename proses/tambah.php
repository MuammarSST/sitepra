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
        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        <a class="nav-link" href="#">Download</a>
        <a class="nav-link" href="#">Signout</a>
      </div>
    </div>
  </div>
</nav>
<div class="container">

<form class="row g-3" method="post" action="proses/simpan_tambah.php">
  
<div class="card">
  <div class="card-header">
    <h1> INPUT HASIL MONITORING DAN EVALUASI TEPRA PIDIE TAHUN 2022</h1>
  </div>
  <div class="card-body">

  <div class="col-12">
    <label for="nama_paket" class="form-label">NAMA PAKET :</label>
    <input type="text" class="form-control" id="nama_paket" name="nama_paket" required>
  </div>
  <div class="col-12">
    <label for="alamat" class="form-label">ALAMAT :</label>
    <input type="text" class="form-control" id="alamat" name="alamat" required>
  </div>
  <div class="col-12">
    <label for="latitude" class="form-label">Latitude :</label>
    <input type="text" class="form-control" id="latitude" name="latitude" required>
  </div>
  <div class="col-12">
    <label for="longitude" class="form-label">Longitude :</label>
    <input type="text" class="form-control" id="longitude" name="longitude" required>
  </div>

  </div>
</div>

<div class="card">

  <div class="card-body">

    <div class="col-12">
      <label for="skpk_id" class="form-label">SKPK :</label>
      <select id="skpk_id" name="skpk_id" class="form-select" required>
        <option selected>--- PILIH SKPK ---</option>
        <option>...</option>
      </select>
    </div>

    <div class="col-12">
      <label for="kpa" class="form-label">KPA :</label>
      <input type="text" class="form-control" id="kpa" name="kpa" required>
    </div>

    <div class="col-12">
      <label for="alamat_skpk" class="form-label">ALAMAT :</label>
      <input type="text" class="form-control" id="alamat_skpk" name="alamat_skpk" required>
    </div>

    </div>
</div>

<div class="card">
  <div class="card-header">
    PENGELOLA ANGGARAN SKPK
  </div>
  <div class="card-body">
  <div class="col-12">
    <label for="nama_pa" class="form-label">1. Nama PA :</label>
    <input type="text" class="form-control" id="nama_pa" name="nama_pa" required >
  </div>
  <div class="col-12">
    <label for="nama_bendahara" class="form-label">2. Nama Bendahara :</label>
    <input type="text" class="form-control" id="nama_bendahara" name="nama_bendahara" required>
  </div>
  <div class="col-12">
    <label for="nama_pptk" class="form-label">3. Nama PPTK :</label>
    <input type="text" class="form-control" id="nama_pptk" name="nama_pptk" required>
  </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    PENGELOLA TEKNIS
  </div>
  <div class="card-body">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Instansi Asal</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> <input type="text" class="form-control" id="pl_nama_1" required ></td>
      <td> <input type="text" class="form-control" id="pl_instasi_asal_1" required ></td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td> <input type="text" class="form-control" id="pl_nama_2" required ></td>
      <td> <input type="text" class="form-control" id="pl_instasi_asal_2" required ></td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td> <input type="text" class="form-control" id="pl_nama_3" required ></td>
      <td> <input type="text" class="form-control" id="pl_instasi_asal_3" required ></td>

    </tr>
    <tr>
      <th scope="row">4</th>
      <td> <input type="text" class="form-control" id="pl_nama_4" required ></td>
      <td> <input type="text" class="form-control" id="pl_instasi_asal_4" required ></td>

    </tr>
    <tr>
      <th scope="row">5</th>
      <td> <input type="text" class="form-control" id="pl_nama_5" required ></td>
      <td> <input type="text" class="form-control" id="pl_instasi_asal_5" required ></td>

    </tr>
  </tbody>

</table>

  </div>


</div>

<div class="card">
  <div class="card-header">
    PENGGUNA / PENERIMA
  </div>
  <div class="card-body">
  <div class="col-12">
    <label for="nama" class="form-label">1. Nama :</label>
    <input type="text" class="form-control" id="nama" name="nama" required >
  </div>
  <div class="col-12">
    <label for="jabatan" class="form-label">2. Jabatan :</label>
    <input type="text" class="form-control" id="jabatan" name="jabatan" required>
  </div>
  <div class="col-12">
    <label for="alamat" class="form-label">3. Alamat :</label>
    <input type="text" class="form-control" id="alamat" name="alamat" required>
  </div>
  </div>
</div>

  

<div class="card">
  <div class="card-header">
    TIM PROVISIONAL HAND OVER (PHO)
  </div>
  <div class="card-body">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Instansi Asal</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> <input type="text" class="form-control" id="pl_nama_1" required ></td>
      <td> <input type="text" class="form-control" id="pl_instasi_asal_1" required ></td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td> <input type="text" class="form-control" id="pl_nama_2" required ></td>
      <td> <input type="text" class="form-control" id="pl_instasi_asal_2" required ></td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td> <input type="text" class="form-control" id="pl_nama_3" required ></td>
      <td> <input type="text" class="form-control" id="pl_instasi_asal_3" required ></td>

    </tr>
    <tr>
      <th scope="row">4</th>
      <td> <input type="text" class="form-control" id="pl_nama_4" required ></td>
      <td> <input type="text" class="form-control" id="pl_instasi_asal_4" required ></td>

    </tr>
    <tr>
      <th scope="row">5</th>
      <td> <input type="text" class="form-control" id="pl_nama_5" required ></td>
      <td> <input type="text" class="form-control" id="pl_instasi_asal_5" required ></td>

    </tr>
  </tbody>

</table>

  </div>


</div>
  

  <div class="card">
  <div class="card-header">
    PERENCANAAN 
  </div>
  <div class="card-body">
  <div class="col-12">
    <label for="pr_nama_perusahaan" class="form-label">1. Nama Perusahaan :</label>
    <input type="text" class="form-control" id="pr_nama_perusahaan" name="pr_nama_perusahaan" required >
  </div>
  <div class="col-12">
    <label for="pr_nama_perusahaan" class="form-label">2. Alamat Perusahaan :</label>
    <input type="text" class="form-control" id="pr_nama_perusahaan" name="pr_alamat_perusahaan" required>
  </div>
  <div class="col-12">
    <label for="pr_nama_perusahaan" class="form-label">3. Nama Pimpinan :</label>
    <input type="text" class="form-control" id="pr_nama_perusahaan" name="pr_nama_pimpinan" required>
  </div>
  <div class="col-12">
    <label for="pr_nama_perusahaan" class="form-label">4. Alamat Pimpinan :</label>
    <input type="text" class="form-control" id="pr_nama_perusahaan" name="pr_alamat_pimpinan" required>
  </div>
  <div class="col-12">
    <label for="pr_nilai_kontrak" class="form-label">5. Nilai Kontrak :</label>
    <input type="text" class="form-control" id="pr_nama_perusahaan" name="pr_nilai_kontrak" required>
  </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    PENGAWASAN 
  </div>
  <div class="card-body">
  <div class="col-12">
    <label for="pw_nama_perusahaan" class="form-label">1. Nama Perusahaan :</label>
    <input type="text" class="form-control" id="pw_nama_perusahaan" name="pw_nama_perusahaan" required >
  </div>
  <div class="col-12">
    <label for="pw_alamat_perusahaan" class="form-label">2. Alamat Perusahaan :</label>
    <input type="text" class="form-control" id="pw_alamat_perusahaan" name="pw_alamat_perusahaan" required>
  </div>
  <div class="col-12">
    <label for="pw_nama_pimpinan" class="form-label">3. Nama Pimpinan :</label>
    <input type="text" class="form-control" id="pw_nama_pimpinan" name="pw_nama_pimpinan" required>
  </div>
  <div class="col-12">
    <label for="pw_alamat_pimpinan" class="form-label">4. Alamat Pimpinan :</label>
    <input type="text" class="form-control" id="pw_alamat_pimpinan" name="pw_alamat_pimpinan" required>
  </div>
  <div class="col-12">
    <label for="pw_nilai_kontrak" class="form-label">5. Nilai Kontrak :</label>
    <input type="text" class="form-control" id="pw_nilai_kontrak" name="pw_nilai_kontrak" required>
  </div>
  </div>
</div>


<div class="card">
  <div class="card-header">
    PELAKSANA FISIK
  </div>
  <div class="card-body">
  <div class="col-12">
    <label for="pf_nama_perusahaan" class="form-label">1. Nama Perusahaan :</label>
    <input type="text" class="form-control" id="pf_nama_perusahaan" name="pf_nama_perusahaan" required >
  </div>
  <div class="col-12">
    <label for="pf_alamat_perusahaan" class="form-label">2. Alamat Perusahaan :</label>
    <input type="text" class="form-control" id="pf_alamat_perusahaan" name="pf_alamat_perusahaan" required>
  </div>
  <div class="col-12">
    <label for="pf_nama_pimpinan" class="form-label">3. Nama Pimpinan :</label>
    <input type="text" class="form-control" id="pf_nama_pimpinan" name="pf_nama_pimpinan" required>
  </div>
  <div class="col-12">
    <label for="pf_nomor_kontrak" class="form-label">4. Nomor Kontrak :</label>
    <input type="text" class="form-control" id="pf_nomor_kontrak" name="pf_nomor_kontrak" required>
  </div>
  <div class="col-12">
    <label for="pf_nilai_kontrak" class="form-label">5. Nilai Kontrak :</label>
    <input type="text" class="form-control" id="pf_nilai_kontrak" name="pf_nilai_kontrak" required>
  </div>
  <div class="col-12">
    <label for="pf_tanggal" class="form-label">6. Waktu (Tanggal) :</label>
    <input type="date" class="form-control" id="pf_tanggal" name="pf_tanggal" required>
  </div>
  <div class="col-12">
    <label for="pf_pagu" class="form-label">7. Pagu :</label>
    <input type="text" class="form-control" id="pf_pagu" name="pf_pagu" required>
  </div>
  <div class="col-12">
    <label for="pf_sumber_dana" class="form-label">8. Sumber Dana :</label>
    <input type="text" class="form-control" id="pf_sumber_dana" name="pf_sumber_dana" required>
  </div>
  </div>
</div>

<!-- <div class="card">
  <div class="card-header">
    PROVISIONAL HAND OVER (PHO)
  </div>
  <div class="card-body">
  <div class="col-12">
    <label for="inputAddress" class="form-label">Nomor :</label>
    <input type="text" class="form-control" id="inputAddress" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Tanggal :</label>
    <input type="text" class="form-control" id="inputAddress2" required>
  </div>

  </div>
</div> -->

<!-- <div class="card">
  <div class="card-header">
    Hasil Akhir / Sementara
  </div>
  <div class="card-body">
  <div class="col-12">
    <input type="text" class="form-control" id="inputAddress" required>
  </div>


  </div>
</div> -->

<div class="card">
  <div class="card-header">
    Upload Foto Kondisi
  </div>
  <div class="card-body">
  <label for="kondisi_1" class="form-label">Kondisi 1 :</label>
  <div class="input-group">
    <input type="file" class="form-control" id="kondisi_1" name="kondisi_1" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
    <button class="btn btn-outline-secondary" type="button" id="simpan_kondisi_1">Upload Foto Kondisi 1</button>
  </div>
  <label for="kondisi_2" class="form-label">Kondisi 2 :</label>
  <div class="input-group">
    <input type="file" class="form-control" id="kondisi_2" name="kondisi_2" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
    <button class="btn btn-outline-secondary" type="button" id="simpan_kondisi_2">Upload Foto Kondisi 2</button>
  </div>
  <label for="kondisi_3" class="form-label">Kondisi 3 :</label>
  <div class="input-group">
    <input type="file" class="form-control" id="kondisi_3" name="kondisi_3" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
    <button class="btn btn-outline-secondary" type="button" id="simpan_kondisi_3">Upload Foto Kondisi 3</button>
  </div>
  <label for="kondisi_4" class="form-label">Kondisi 4 :</label>
  <div class="input-group">
    <input type="file" class="form-control" id="kondisi_4" name="kondisi_4" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
    <button class="btn btn-outline-secondary" type="button" id="simpan_kondisi_4">Upload Foto Kondisi 4</button>
  </div>
  <label for="kondisi_5" class="form-label">Kondisi 5 :</label>
  <div class="input-group">
    <input type="file" class="form-control" id="kondisi_5" name="kondisi_5" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
    <button class="btn btn-outline-secondary" type="button" id="simpan_kondisi_5">Upload Foto Kondisi 5</button>
  </div>
  <label for="kondisi_6" class="form-label">Kondisi 6 :</label>
  <div class="input-group">
    <input type="file" class="form-control" id="kondisi_6" name="kondisi_6" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
    <button class="btn btn-outline-secondary" type="button" id="simpan_kondisi_6">Upload Foto Kondisi 6</button>
  </div>


  </div>
</div>

  <div class="col-12">
    <input type="submit" class="btn btn-primary" value="Simpan">
  </div>
</form>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>