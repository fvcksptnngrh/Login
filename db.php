<?php
$host = 'localhost';  
$user = 'root';      
$pass = '';         
$dbname = 'login_system'; 

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
