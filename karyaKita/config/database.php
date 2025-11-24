<?php
$servername = "mysql";
$username = "root";
$password = "password";
$db   = "karya_kita";

$conn = mysqli_connect($servername, $username, $password, $db);

if($conn->connect_error){
    die("Koneksi gagal: " . $conn->connect_error);
}