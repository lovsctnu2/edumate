<?php
$servername = "localhost";
$username = "root";
$password = "1234"; 
$dbname = "edumate";
$port = 3307;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
