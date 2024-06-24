<?php
$servername = "103.193.178.139";
$username = "user_sdtb"; // Your database username
$password = "ngentotBlok69@"; // Your database password
$dbname = "healthy"; // Your database name

// Create connection
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>