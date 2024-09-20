<?php

// File: koneksi.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buku_tamu_db";

// Membuat koneksi ke MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: ".$conn->connect_error);
}

?>
