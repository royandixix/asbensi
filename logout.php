<?php
include('koneksi.php');
session_start();
$dosen_id = $_SESSION['dosen_id'];
$berhasil = true;

if ($sql_login = mysqli_query($koneksi, "UPDATE dosen SET last_login=NOW() WHERE dosen_id = $dosen_id")) {
    // Menghapus semua variabel sesi dan menghancurkan sesi
    $_SESSION = array();
    session_unset();
    session_destroy();

    header("Location: login.php");
    exit();
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
