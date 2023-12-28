<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Giriş başarılı
    echo "Giriş başarılı!";
} else {
    // Giriş başarısız
    echo "Email veya şifre hatalı!";
}

$conn->close();
?>

