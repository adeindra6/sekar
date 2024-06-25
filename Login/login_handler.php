<?php

require_once("../config/koneksi.php");
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Prepare the SQL statement with placeholders
$sql = "SELECT * FROM user WHERE username = ? AND password = ?";
if (!$stmt = $conn->prepare($sql)) {
    echo "Error preparing statement: " . $conn->error;
    exit();
  }

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password); // Bind parameters to prevent injection

// Execute the prepared statement
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists and password matches
if ($result->num_rows === 1) {
  $user = $result->fetch_assoc(); // Fetch user data as associative array

  // Login successful (redirect based on role)
  session_start();
  $_SESSION = $user;
  // $_SESSION['username'] = $username; // Store username in session
  // $_SESSION['role'] = $user['role']; // Store user role in session
  // $_SESSION['nama'] = $user['nama']; // Store user role in session

  if ($user['role'] === 'user') {
    header("Location: ../DashboardAdmin/index.php"); // Redirect to admin dashboard
  } elseif ($user['role'] === 'umkm') {
    header("Location: ../DashboardUMKM/demo/index.php"); // Redirect to UMKM dashboard
  } else {
    // Handle invalid role (optional: display error or default to a page)
    echo "Invalid user role.";
  }
  exit();
} else {
  // Login failed (display error message)
//   echo "Invalid username or password.";
header("Location: ../Login/index.php?failed=Invalid username or password");
}

$conn->close();
$stmt->close();

?>