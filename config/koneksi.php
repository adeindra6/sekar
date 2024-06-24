<?php
$servername = "103.193.178.139";
$username = "user_sdtb"; // Your database username
$password = "ngentotBlok69@"; // Your database password
$dbname = "healthy"; // Your database name

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}


?>