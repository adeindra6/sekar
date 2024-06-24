<?php

// Include a database connection script (replace with your details)
require_once("../config/koneksi.php");

if (isset($_POST['registrasi'])) {

  // Escape user input to prevent SQL injection
  $nama = mysqli_real_escape_string($conn, $_POST['owner']);
  $username = mysqli_real_escape_string($conn, $_POST['usernameUser']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phoneNumber = mysqli_real_escape_string($conn, $_POST['nomorTeleponUMKM']);
  $location = mysqli_real_escape_string($conn, $_POST['lokasi']);
  $address = mysqli_real_escape_string($conn, $_POST['alamatUMKM']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);

  // Validation (replace with your desired validation logic)
  $errors = []; // Empty array to store errors

  if (empty($nama)) {
    $errors[] = "Nama lengkap harus diisi";
  }

  if (empty($username)) {
    $errors[] = "Username harus diisi";
  }

  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email tidak valid";
  }

  if (empty($phoneNumber)) {
    $errors[] = "Nomor telepon harus diisi";
  }

  if ($password != $confirmPassword) {
    $errors[] = "Konfirmasi password tidak sesuai";
  }

  // Check if username or email already exists (optional)
  $sql = "SELECT * FROM user WHERE username='$username' OR email='$email'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $errors[] = "Username atau email sudah terdaftar";
  }

  // If no errors, insert user data into database
  if (empty($errors)) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash password securely

    $sql = "INSERT INTO user (id, username, password, email, telepon, nama, nama_resto, no_rekening, bank_umkm, alamat, kota, kartu_identitas, foto_resto, buku_rekening, role, created_at, updated_at) VALUES (NULL, '$username', '$password', '$email', '$phoneNumber', '$nama', NULL, NULL, NULL, '$address', '$location', NULL, NULL, NULL, 'user', NOW(), NOW());";

    if (mysqli_query($conn, $sql)) {
	
		header("Location: ../Login/index.php?success=true");

    } else {
      echo "Registrasi gagal!";
	  echo $sql; // Display error message if insertion fails
    }
  } else {
    // Display errors if any
    echo "Terdapat kesalahan pada form registrasi:";
    echo "<ul>";
    foreach ($errors as $error) {
      echo "<li>$error</li>";
    }
    echo "</ul>";
  }

} else {
  // If form not submitted, display a message
  echo "Silahkan isi form registrasi.";
}

// Close database connection (replace with your closing logic)
mysqli_close($conn);

?>