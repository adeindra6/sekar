<?php

// Include a database connection script (replace with your details)
require_once("../../config/koneksi.php");

if (isset($_POST['buatorder'])) {

  // Escape user input to prevent SQL injection
  $namaPembeli = mysqli_real_escape_string($conn, $_POST['nama-pembeli']);
  $namaItem = mysqli_real_escape_string($conn, $_POST['jumlah-item']);
  $JumlahPembelian = mysqli_real_escape_string($conn, $_POST['jumlah-pembelian']);
  $TanggalPembelian = mysqli_real_escape_string($conn, $_POST['tanggal-pembelian']);

  $sql = "SELECT * FROM item_barang WHERE nama_item = '$namaItem'";
  $stmt = $conn->prepare($sql);


// Execute the prepared statement
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists and password matches
if ($result->num_rows === 1) {
  $dataitem = $result->fetch_assoc(); 
  $totalBayar = $dataitem['harga_item'] * $JumlahPembelian;
  $itemPembelian = $dataitem['nama_item'];
  $idItem = $dataitem['id'];
  $penguranganStok = $dataitem['jumlah_item']-$JumlahPembelian;
  $sql = "INSERT INTO order_barang (id, nama_pembelian, item_pembelian, jumlah_pembelian, tanggal_pembelian, total_bayar) VALUES (NULL, '$namaPembeli', '$itemPembelian', '$JumlahPembelian', '$TanggalPembelian', '$totalBayar');";
  $sql2 = "UPDATE `item_barang` SET `jumlah_item` = '$penguranganStok' WHERE `item_barang`.`id` ='$idItem';";
  mysqli_query($conn, $sql);
  mysqli_query($conn, $sql2);
  header("Location: tables.php");

  
}
  

  
}


  ?>