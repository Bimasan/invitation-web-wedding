<?php
try {
  // buat koneksi dengan database
  $host = new PDO('mysql:host=localhost;dbname=wedding', "root", "");
  
  // setting error mode
  $host->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  
  // hapus koneksi
  //$host = null;
}
catch (PDOException $e) {
  // tampilkan pesan kesalahan jika koneksi gagal
  echo "Koneksi bermasalah: " . $e->getMessage() . "<br/>";
  die();
}
echo "Koneksi berhasil";
?>