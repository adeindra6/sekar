<?php
 
// menghubungkan dengan koneksi
include '../config/koneksi.php';
 
// menangkap data yang dikirim dari form

$username = $_POST['usernameUMKM'];
$password = $_POST['password'];
$namaUser = $_POST['owner'];
$email = $_POST['email'];
$nomor_telepon = $_POST['nomorTeleponUMKM'];
$lokasi = $_POST['lokasi'];
$alamat = $_POST['alamatUMKM'];
 
$md5Password = md5($password);
date_default_timezone_set('Asia/Jakarta');
$created = date('Y-m-d H:i:s');
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "INSERT INTO user (username ⁠, ⁠ password ⁠, ⁠ email ⁠, ⁠ telepon ⁠, ⁠ nama ⁠, ⁠ nama_resto ⁠, ⁠ no_rekening ⁠, ⁠ bank_umkm ⁠, ⁠ alamat ⁠, ⁠ kota ⁠, ⁠ kartu_identitas ⁠, ⁠ foto_resto ⁠, ⁠ buku_rekening ⁠, ⁠ role ⁠, ⁠ created_at ⁠, ⁠ updated_at ⁠) VALUES ('$username', '$md5Password', '$email', '$nomor_telepon', '$namaUser', NULL, NULL, NULL, '$alamat', NULL, NULL, NULL, NULL, 'user', '$created', '$created'");
 
// // menghitung jumlah data yang ditemukan
// $cek = mysqli_num_rows($data);
 
// if($cek > 0){
// 	$_SESSION['username'] = $username;
// 	$_SESSION['status'] = "login";
// 	header("location:admin/index.php");
// }else{
// 	header("location:index.php?pesan=gagal");
// }
?>