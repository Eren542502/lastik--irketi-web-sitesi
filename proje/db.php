<?php
$servername = "localhost";
$username = "eren";
$password = "542502";
$dbname = "EREN\SQLEXPRESS";

// Veritabanına bağlan
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanına bağlantı hatası: " . $conn->connect_error);
}
?>

