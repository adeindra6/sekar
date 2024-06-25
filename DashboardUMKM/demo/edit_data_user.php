<?php

session_start();
// Include a database connection script (replace with your details)
require_once("../../config/koneksi.php");

if (isset($_POST['editprofil'])) {
    

  // Escape user input to prevent SQL injection
  $nama = mysqli_real_escape_string($conn, $_POST['nama']);
  $namaResto = mysqli_real_escape_string($conn, $_POST['nama_resto']);
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
  $userid= $_SESSION['id'];
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phoneNumber = mysqli_real_escape_string($conn, $_POST['telepon']);
//   $location = mysqli_real_escape_string($conn, $_POST['lokasi']);
  $bank = mysqli_real_escape_string($conn, $_POST['bank']);
  $address = mysqli_real_escape_string($conn, $_POST['alamat']);
  $rekening = mysqli_real_escape_string($conn, $_POST['rekening']);
//   $password = mysqli_real_escape_string($conn, $_POST['password']);

// UPDATE `user` SET `email` = 'aumkm@gmail.com' WHERE `user`.`id` = 18;

$sql = "UPDATE `user` SET `nama` = '$nama', `nama_resto` = '$namaResto', `no_rekening` = '$rekening', `bank_umkm` = '$bank', `alamat` = '$address' WHERE `user`.`id` = '$userid';";

    if (mysqli_query($conn, $sql)) {
        $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
        $stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password); // Bind parameters to prevent injection

// Execute the prepared statement
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists and password matches
if ($result->num_rows === 1) {
  $user = $result->fetch_assoc(); // Fetch user data as associative array

  // Login successful (redirect based on role)
//   session_start();
  $_SESSION = $user;
}
	// print($_SESSION);
		header("Location: profile.php");
}
}



    ?>