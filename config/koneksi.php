<?php 
 
$koneksi = mysqli_connect("103.193.178.139", "user_sdtb", "ngentotBlok69@", "healthy");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>