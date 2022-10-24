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

if(isset($_POST['Simpan'])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nama_paket = $_POST['nama_paket'];
        $alamat_paket = $_POST['alamat_paket'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];

        $skpk_id = $_POST['skpk_id'];
        $kpa = $_POST['kpa'];
        $alamat_skpk = $_POST['alamat_skpk'];

        $nama_pa = $_POST['nama_pa'];
        $nama_bendahara = $_POST['nama_bendahara'];
        $nama_pptk = $_POST['nama_pptk'];

        $pl_nama_1 = $_POST['pl_nama_1'];
        $pl_instasi_asal_1 = $_POST['pl_instasi_asal_1'];
        $pl_nama_2 = $_POST['pl_nama_2'];
        $pl_instasi_asal_2 = $_POST['pl_instasi_asal_2'];
        $pl_nama_3 = $_POST['pl_nama_3'];
        $pl_instasi_asal_3 = $_POST['pl_instasi_asal_3'];
        $pl_nama_4 = $_POST['pl_nama_4'];
        $pl_instasi_asal_4 = $_POST['pl_instasi_asal_4'];
        $pl_nama_5 = $_POST['pl_nama_5'];
        $pl_instasi_asal_5 = $_POST['pl_instasi_asal_5'];


        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $alamat = $_POST['alamat'];

        $pho_nama_1 = $_POST['pho_nama_1'];
        $pho_instasi_asal_1 = $_POST['pho_instasi_asal_1'];
        $pho_nama_2 = $_POST['pho_nama_2'];
        $pho_instasi_asal_2 = $_POST['pho_instasi_asal_2'];
        $pho_nama_3 = $_POST['pho_nama_3'];
        $pho_instasi_asal_3 = $_POST['pho_instasi_asal_3'];
        $pho_nama_4 = $_POST['pho_nama_4'];
        $pho_instasi_asal_4 = $_POST['pho_instasi_asal_4'];
        $pho_nama_5 = $_POST['pho_nama_5'];
        $pho_instasi_asal_5 = $_POST['pho_instasi_asal_5'];
        $pho_nama_6 = $_POST['pho_nama_6'];
        $pho_instasi_asal_6 = $_POST['pho_instasi_asal_6'];

        $pr_nama_perusahaan = $_POST['pr_nama_perusahaan'];
        $pr_alamat_perusahaan = $_POST['pr_alamat_perusahaan'];
        $pr_nama_pimpinan = $_POST['pr_nama_pimpinan'];
        $pr_alamat_pimpinan = $_POST['pr_alamat_pimpinan'];
        $pr_nilai_kontrak = $_POST['pr_nilai_kontrak'];

        $pw_nama_perusahaan = $_POST['pw_nama_perusahaan'];
        $pw_alamat_perusahaan = $_POST['pw_alamat_perusahaan'];
        $pw_nama_pimpinan = $_POST['pw_nama_pimpinan'];
        $pw_alamat_pimpinan = $_POST['pw_alamat_pimpinan'];
        $pw_nilai_kontrak = $_POST['pw_nilai_kontrak'];

        $pf_nama_perusahaan = $_POST['pf_nama_perusahaan'];
        $pf_alamat_perusahaan = $_POST['pf_alamat_perusahaan'];
        $pf_nama_pimpinan = $_POST['pf_nama_pimpinan'];
        $pf_nomor_kontrak = $_POST['pf_nomor_kontrak'];
        $pf_nilai_kontrak = $_POST['pf_nilai_kontrak'];
        $pf_tanggal = $_POST['pf_tanggal'];
        $pf_pagu = $_POST['pf_pagu'];
        $pf_sumber_dana = $_POST['pf_sumber_dana'];

        $no_pho = $_POST['no_pho'];
        $tgl_pho = $_POST['tgl_pho'];

        $ha = $_POST['ha'];

        $ekstensi_diperbolehkan	= array('png','jpg');

        $gambar_kondisi_1 = $_FILES['kondisi_1']['name'];
        $gambar_kondisi_2 = $_FILES['kondisi_2']['name'];
        $gambar_kondisi_3 = $_FILES['kondisi_3']['name'];
        $gambar_kondisi_4 = $_FILES['kondisi_4']['name'];
        $gambar_kondisi_5 = $_FILES['kondisi_5']['name'];
        $gambar_kondisi_6 = $_FILES['kondisi_6']['name'];

        $x1 = explode('.', $gambar_kondisi_1);
        $x2 = explode('.', $gambar_kondisi_2);
        $x3 = explode('.', $gambar_kondisi_3);
        $x4 = explode('.', $gambar_kondisi_4);
        $x5 = explode('.', $gambar_kondisi_5);
        $x6 = explode('.', $gambar_kondisi_6);

        $ekstensi1 = strtolower(end($x1));
        $ekstensi2 = strtolower(end($x2));
        $ekstensi3 = strtolower(end($x3));
        $ekstensi4 = strtolower(end($x4));
        $ekstensi5 = strtolower(end($x5));
        $ekstensi6 = strtolower(end($x6));

        $file_tmp1 = $_FILES['kondisi_1']['tmp_name'];
        $file_tmp2 = $_FILES['kondisi_2']['tmp_name'];
        $file_tmp3 = $_FILES['kondisi_3']['tmp_name'];
        $file_tmp4 = $_FILES['kondisi_4']['tmp_name'];
        $file_tmp5 = $_FILES['kondisi_5']['tmp_name'];
        $file_tmp6 = $_FILES['kondisi_6']['tmp_name'];

        if (!empty($gambar_kondisi_1 and $gambar_kondisi_2 and $gambar_kondisi_3 and $gambar_kondisi_4 and $gambar_kondisi_5 and $gambar_kondisi_6 )){
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

                //Mengupload gambar
                move_uploaded_file($file_tmp, 'gambar/'.$gambar_kondisi_1);
                move_uploaded_file($file_tmp, 'gambar/'.$gambar_kondisi_2);
                move_uploaded_file($file_tmp, 'gambar/'.$gambar_kondisi_3);
                move_uploaded_file($file_tmp, 'gambar/'.$gambar_kondisi_4);
                move_uploaded_file($file_tmp, 'gambar/'.$gambar_kondisi_5);
                move_uploaded_file($file_tmp, 'gambar/'.$gambar_kondisi_6);

                $query = "INSERT INTO laporan (
                    'nama_paket',
                    'alamat_paket',
                    'latitude',
                    'longitude',
                    'skpk_id',
                    'kpa',
                    'alamat_skpk',
                    'nama_pa',
                    'nama_bendahara',
                    'nama_pptk',
                    'pl_nama_1',
                    'pl_instasi_asal_1',
                    'pl_nama_2',
                    'pl_instasi_asal_2',
                    'pl_nama_3',
                    'pl_instasi_asal_3',
                    'pl_nama_4',
                    'pl_instasi_asal_4',
                    'pl_nama_5',
                    'pl_instasi_asal_5',
                    'nama',
                    'jabatan',
                    'alamat',
                    'pho_nama_1',
                    'pho_instasi_asal_1',
                    'pho_nama_2',
                    'pho_instasi_asal_2',
                    'pho_nama_3',
                    'pho_instasi_asal_3',
                    'pho_nama_4',
                    'pho_instasi_asal_4',
                    'pho_nama_5',
                    'pho_instasi_asal_5',
                    'pho_nama_6',
                    'pho_instasi_asal_6',
                    'pr_nama_perusahaan',
                    'pr_alamat_perusahaan',
                    'pr_nama_pimpinan',
                    'pr_alamat_pimpinan',
                    'pr_nilai_kontrak',
                    'pw_nama_perusahaan',
                    'pw_alamat_perusahaan',
                    'pw_nama_pimpinan',
                    'pw_alamat_pimpinan',
                    'pw_nilai_kontrak',
                    'pf_nama_perusahaan',
                    'pf_alamat_perusahaan',
                    'pf_nama_pimpinan',
                    'pf_nomor_kontrak',
                    'pf_nilai_kontrak',
                    'pf_tanggal',
                    'pf_pagu',
                    'pf_sumber_dana',
                    'no_pho',
                    'tgl_pho',
                    'ha',
                    'gambar_kondisi_1',
                    'gambar_kondisi_2',
                    'gambar_kondisi_3',
                    'gambar_kondisi_4',
                    'gambar_kondisi_5',
                    'gambar_kondisi_6'
                    ) VALUES (
                    '$nama_paket',
                    '$alamat_paket',
                    '$latitude',
                    '$longitude',
                    '$skpk_id',
                    '$kpa',
                    '$alamat_skpk',
                    '$nama_pa',
                    '$nama_bendahara',
                    '$nama_pptk',
                    '$pl_nama_1',
                    '$pl_instasi_asal_1',
                    '$pl_nama_2',
                    '$pl_instasi_asal_2',
                    '$pl_nama_3',
                    '$pl_instasi_asal_3',
                    '$pl_nama_4',
                    '$pl_instasi_asal_4',
                    '$pl_nama_5',
                    '$pl_instasi_asal_5',
                    '$nama',
                    '$jabatan',
                    '$alamat',
                    '$pho_nama_1',
                    '$pho_instasi_asal_1',
                    '$pho_nama_2',
                    '$pho_instasi_asal_2',
                    '$pho_nama_3',
                    '$pho_instasi_asal_3',
                    '$pho_nama_4',
                    '$pho_instasi_asal_4',
                    '$pho_nama_5',
                    '$pho_instasi_asal_5',
                    '$pho_nama_6',
                    '$pho_instasi_asal_6',
                    '$pr_nama_perusahaan',
                    '$pr_alamat_perusahaan',
                    '$pr_nama_pimpinan',
                    '$pr_alamat_pimpinan',
                    '$pr_nilai_kontrak',
                    '$pw_nama_perusahaan',
                    '$pw_alamat_perusahaan',
                    '$pw_nama_pimpinan',
                    '$pw_alamat_pimpinan',
                    '$pw_nilai_kontrak',
                    '$pf_nama_perusahaan',
                    '$pf_alamat_perusahaan',
                    '$pf_nama_pimpinan',
                    '$pf_nomor_kontrak',
                    '$pf_nilai_kontrak',
                    '$pf_tanggal',
                    '$pf_pagu',
                    '$pf_sumber_dana',
                    '$no_pho',
                    '$tgl_pho',
                    '$ha',
                    '$gambar_kondisi_1',
                    '$gambar_kondisi_2',
                    '$gambar_kondisi_3',
                    '$gambar_kondisi_4',
                    '$gambar_kondisi_5',
                    '$gambar_kondisi_6'
                    )";

        $result = mysqli_query($conn,$query);
        if (!$result) {
        die('Invalid query: ' . mysqli_error());
        }

        if($query){
        header('Location: index.php');
        }
    }
    

    
    
    
}
?>