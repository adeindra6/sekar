<?php

// Include a database connection script (replace with your details)
require_once("../../config/koneksi.php");

if (isset($_POST['tambahitem'])) {

  // Escape user input to prevent SQL injection
  $namaItem = mysqli_real_escape_string($conn, $_POST['nama-item']);
  $JumlahItem = mysqli_real_escape_string($conn, $_POST['jumlah-item']);
  $HargaItem = mysqli_real_escape_string($conn, $_POST['harga-item']);

  $sql = "INSERT INTO item_barang (id, nama_item, jumlah_item, harga_item, created_at, updated_at) VALUES (NULL, '$namaItem', '$JumlahItem', '$HargaItem', NOW(), NOW());";
  mysqli_query($conn, $sql);
  header("Location: gudang.php");
}


  ?>