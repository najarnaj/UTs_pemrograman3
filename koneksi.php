<?php
$user="root";
$server="localhost";
$password="";
$database="db_inputcuti";

$conn=mysqli_connect($server,$user,$password);
if($conn){
	echo 'konek';
}else{
	echo 'Cek Lagi';
}
$db=mysqli_select_db($conn,$database);
if($db){
	echo ', TERHUBUNG';
}else{
	echo 'Cek Lagi';
}
?>