<?php
// Cek apakah semua field wajib ada dan gak kosong
if (
    empty($_POST['nama']) || 
    empty($_POST['wa']) || 
    empty($_POST['email']) || 
    empty($_POST['alasan']) || 
    empty($_POST['persetujuan'])
) {
    echo "<script>alert('⚠ Tolong isi semua data yang wajib dengan lengkap!'); window.history.back();</script>";
    exit;
}

// Ambil data dari form
$nama = trim($_POST['nama']);
$wa = trim($_POST['wa']);
$email = trim($_POST['email']);
$alasan = trim($_POST['alasan']);
$waktu = trim($_POST['waktu']); // optional
$tanggal = date("Y-m-d H:i:s");

// Buat data yang mau disimpen, cek dulu kalau yang optional kosong bisa dikasih tanda "-"
$waktu_display = $waktu !== "" ? $waktu : "-";

$data = "📝 Pendaftaran Baru Tester Bot WA\n";
$data .= "Nama       : $nama\n";
$data .= "WhatsApp   : $wa\n";
$data .= "Email      : $email\n";
$data .= "Alasan     : $alasan\n";
$data .= "Waktu Luang: $waktu_display\n";
$data .= "Waktu Kirim: $tanggal\n";
$data .= "-------------------------\n";

// Simpan ke file
file_put_contents("pendaftar.txt", $data, FILE_APPEND);

// Redirect atau kasih notifikasi sukses
echo "<script>alert('✅ Data berhasil dikirim!'); window.location.href='index.html';</script>";
?>