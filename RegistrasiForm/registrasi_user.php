<?php
// Include the database connection file
include '../config/koneksi.php';

// Check if the form is submitted

if(isset($_POST['registrasi'])) {
	// Capture data from the form
	$username = $_POST['usernameUser'];
	$password = $_POST['password'];
	$namaUser = $_POST['owner'];
	$email = $_POST['email'];
	$nomor_telepon = $_POST['nomorTeleponUMKM'];
	$alamat = $_POST['alamatUMKM'];

	// Hash the password using password_hash (recommended)
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
	date_default_timezone_set('Asia/Jakarta');
	$created = date('Y-m-d H:i:s');

	// Prepare an SQL statement for insertion
	$sql = "INSERT INTO user (id, username, password, email, telepon, nama, nama_resto, no_rekening, bank_umkm, alamat, kota, kartu_identitas, foto_resto, buku_rekening, role, created_at, updated_at) VALUES (NULL, 'rauf', 'tes', 'email', '0812', 'raufendro', 'kaktus', '1234', 'BCA', 'alamat', 'kota', 'kartu', 'foto', 'buku', 'role', '2024-06-24 21:25:13', '2024-06-24 21:25:13');";
    $query = mysqli_query($db, $sql);
	echo "tes jalan";

    // apakah query simpan berhasil?
    if( $query ) {
		echo "wtesasfdasf";
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
		echo "wtesasfdasf12312321";
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>