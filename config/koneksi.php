<?php

define('DB_SERVER', 'localhost'); // Replace with your database server address
define('DB_USERNAME', 'root'); // Replace with your database username
define('DB_PASSWORD', ''); // Replace with your database password
define('DB_NAME', 'healthy'); // Replace with your database name

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>