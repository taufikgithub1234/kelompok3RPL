<?php
$servername = "localhost";
$database = "db_user";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$database,$username,$password);

if ($conn) {
    die("Koneksi Gagal : " .mysqli_connect_error());
} else {
        echo "Koneksi Berhasil";
    }
    