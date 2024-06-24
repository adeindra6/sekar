<?php
$servername = "103.193.178.139";
$username = "user_sdtb"; // Your database username
$password = "ngentotBlok69@"; // Your database password
$dbname = "healthy"; // Your database name

// Create connection
try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}


?>