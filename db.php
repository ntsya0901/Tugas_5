<?php
$conn = new mysqli("localhost", "root", "", "platform");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
