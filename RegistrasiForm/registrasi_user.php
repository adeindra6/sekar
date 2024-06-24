<?php
// Include the database connection file
include '../config/koneksi.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture data from the form
    $username = $_POST['usernameUser'];
    $password = $_POST['password'];
    $namaUser = $_POST['owner'];
    $email = $_POST['email'];
    $nomor_telepon = $_POST['nomorTeleponUMKM'];
    $lokasi = $_POST['lokasi'];
    $alamat = $_POST['alamatUMKM'];

    // Hash the password using md5 (Note: md5 is not recommended for password hashing, consider using password_hash)
    $hashedPassword = md5($password);
    date_default_timezone_set('Asia/Jakarta');
    $created = date('Y-m-d H:i:s');

    // Prepare an SQL statement for insertion
    $stmt = $koneksi->prepare("INSERT INTO user (username, password, email, telepon, nama, nama_resto, no_rekening, bank_umkm, alamat, kota, kartu_identitas, foto_resto, buku_rekening, role, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, NULL, NULL, NULL, NULL, 'user', ?, ?)");

    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ssssssss", $username, $hashedPassword, $email, $nomor_telepon, $namaUser, $alamat, $created, $created);
		echo $username, $hashedPassword, $email, $nomor_telepon, $namaUser, $alamat, $created, $created;
		echo "Jalan";

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to login page after successful registration
			echo "Jalan lagi";
            header("Location: ../Login/index.html");
            exit;
        } else {
            // Handle execution error
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // Handle statement preparation error
        echo "Error: " . $koneksi->error;
    }
}

// Close the database connection
echo "Tutup";
$koneksi->close();
?>