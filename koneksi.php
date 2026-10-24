<?php
// koneksi.php
// Koneksi database SIM Dosen UMB

mysqli_report(MYSQLI_REPORT_OFF);

$host     = "sql208.infinityfree.com";
$username = "if0_42247619";
$password = "j0NApkvIZTmuK";
$database = "if0_42247619_simdosen1";

$conn = new mysqli(
    $host,
    $username,
    $password,
    $database
);

if ($conn->connect_error) {
    error_log("Koneksi SIM Dosen gagal: " . $conn->connect_error);
    http_response_code(500);
    exit("Koneksi database gagal. Periksa konfigurasi database.");
}

$conn->set_charset("utf8mb4");
?>