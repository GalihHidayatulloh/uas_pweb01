<?php
$servername = "localhost"; // Ganti dengan nama server MySQL Anda jika berbeda
$username = "username"; // Ganti dengan username MySQL Anda
$password = "password"; // Ganti dengan password MySQL Anda
$dbname = "furnitureweb"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Jika ingin menambahkan instruksi koneksi tambahan, bisa ditambahkan di sini

?>
