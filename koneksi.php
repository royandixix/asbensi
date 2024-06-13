<?php
// Informasi koneksi database
$host = "localhost"; // Host database
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database
$database = "absensi_bph"; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil!";

}
?>
