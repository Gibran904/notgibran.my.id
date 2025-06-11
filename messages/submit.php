<?php
date_default_timezone_set("Asia/Jakarta");
$pesan = $_POST['pesan'];

// Ambil IP Address pengirim
$ip = $_SERVER['REMOTE_ADDR'];

// Format pesan yang disimpan
$tanggal = date("Y-m-d H:i:s");
$isi = "Pesan: $pesan\nTanggal: $tanggal\nIP: $ip\n--------------------------\n";

// Simpan ke file txt di folder /pesan
$nama_file = "pesan/" . time() . ".txt";
file_put_contents($nama_file, $isi, FILE_APPEND);

header("Location: index.html");
exit;
?>