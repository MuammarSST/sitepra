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
$query = "SELECT * FROM peta";
$result = mysqli_query($conn,$query);
if (!$result) {
  die('Invalid query: ' . mysqli_error());
}

?>
