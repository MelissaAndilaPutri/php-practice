<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Latihan";
// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
// Mengecek koneksi if
if ($conn->connect_error) {
 die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil";
?>