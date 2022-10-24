<?php
<?php
error_reporting(E_ALL);
$servername="localhost";
$username="root";
$password="";
$dbname="sitepra";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}

if(isset($_POST['submit'])){ 


    upload_image1(); 
    upload_image2(); 
    upload_image3(); 
    upload_image4(); 
    upload_image5(); 
    upload_image6(); 
  
}

function upload_image1(){
    $uploadTo = "uploads/"; 
    $allowedImageType = array('jpg','png','jpeg','gif');
    
    $imageName = $_FILES['kondisi_1']['name'];
    $tempPath=$_FILES["kondisi_1"]["tmp_name"];
   
    $basename = basename($imageName);
    $originalPath = $uploadTo.$basename; 
    $imageType = pathinfo($originalPath, PATHINFO_EXTENSION); 
    if(!empty($imageName)){ 
    
       if(in_array($imageType, $allowedImageType)){ 

         if(move_uploaded_file($tempPath,$originalPath)){ 
            
            $query = "UPDATE laporan SET `gambar_kondisi_1` = '$tempPath' WHERE `id_paket` = 18";
            $result = mysqli_query($conn,$query);
            if (!$result) {
                die('Invalid query: ' . mysqli_error());
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
    $uploadTo = "uploads/"; 
    $allowedImageType = array('jpg','png','jpeg','gif');
    
    $imageName = $_FILES['kondisi_2']['name'];
    $tempPath=$_FILES["kondisi_2"]["tmp_name"];
   
    $basename = basename($imageName);
    $originalPath = $uploadTo.$basename; 
    $imageType = pathinfo($originalPath, PATHINFO_EXTENSION); 
    if(!empty($imageName)){ 
    
       if(in_array($imageType, $allowedImageType)){ 

         if(move_uploaded_file($tempPath,$originalPath)){ 
            
            $query = "UPDATE laporan SET `gambar_kondisi_2` = '$tempPath' WHERE `id_paket` = 18";
            $result = mysqli_query($conn,$query);
            if (!$result) {
                die('Invalid query: ' . mysqli_error());
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
function upload_image3(){
    $uploadTo = "uploads/"; 
    $allowedImageType = array('jpg','png','jpeg','gif');
    
    $imageName = $_FILES['kondisi_3']['name'];
    $tempPath=$_FILES["kondisi_3"]["tmp_name"];
   
    $basename = basename($imageName);
    $originalPath = $uploadTo.$basename; 
    $imageType = pathinfo($originalPath, PATHINFO_EXTENSION); 
    if(!empty($imageName)){ 
    
       if(in_array($imageType, $allowedImageType)){ 

         if(move_uploaded_file($tempPath,$originalPath)){ 
            
            $query = "UPDATE laporan SET `gambar_kondisi_3` = '$tempPath' WHERE `id_paket` = 18";
            $result = mysqli_query($conn,$query);
            if (!$result) {
                die('Invalid query: ' . mysqli_error());
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
function upload_image4(){
    $uploadTo = "uploads/"; 
    $allowedImageType = array('jpg','png','jpeg','gif');
    
    $imageName = $_FILES['kondisi_4']['name'];
    $tempPath=$_FILES["kondisi_4"]["tmp_name"];
   
    $basename = basename($imageName);
    $originalPath = $uploadTo.$basename; 
    $imageType = pathinfo($originalPath, PATHINFO_EXTENSION); 
    if(!empty($imageName)){ 
    
       if(in_array($imageType, $allowedImageType)){ 

         if(move_uploaded_file($tempPath,$originalPath)){ 
            
            $query = "UPDATE laporan SET `gambar_kondisi_4` = '$tempPath' WHERE `id_paket` = 18";
            $result = mysqli_query($conn,$query);
            if (!$result) {
                die('Invalid query: ' . mysqli_error());
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
function upload_image5(){
    $uploadTo = "uploads/"; 
    $allowedImageType = array('jpg','png','jpeg','gif');
    
    $imageName = $_FILES['kondisi_5']['name'];
    $tempPath=$_FILES["kondisi_5"]["tmp_name"];
   
    $basename = basename($imageName);
    $originalPath = $uploadTo.$basename; 
    $imageType = pathinfo($originalPath, PATHINFO_EXTENSION); 
    if(!empty($imageName)){ 
    
       if(in_array($imageType, $allowedImageType)){ 

         if(move_uploaded_file($tempPath,$originalPath)){ 
            
            $query = "UPDATE laporan SET `gambar_kondisi_5` = '$tempPath' WHERE `id_paket` = 18";
            $result = mysqli_query($conn,$query);
            if (!$result) {
                die('Invalid query: ' . mysqli_error());
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
function upload_image6(){
    $uploadTo = "uploads/"; 
    $allowedImageType = array('jpg','png','jpeg','gif');
    
    $imageName = $_FILES['kondisi_6']['name'];
    $tempPath=$_FILES["kondisi_6"]["tmp_name"];
   
    $basename = basename($imageName);
    $originalPath = $uploadTo.$basename; 
    $imageType = pathinfo($originalPath, PATHINFO_EXTENSION); 
    if(!empty($imageName)){ 
    
       if(in_array($imageType, $allowedImageType)){ 

         if(move_uploaded_file($tempPath,$originalPath)){ 
            
            $query = "UPDATE laporan SET `gambar_kondisi_6` = '$tempPath' WHERE `id_paket` = 18";
            $result = mysqli_query($conn,$query);
            if (!$result) {
                die('Invalid query: ' . mysqli_error());
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