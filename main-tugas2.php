<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "pweb2";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}


$base_url = "/MVC%20cah%20cah";
