<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari input dengan nama "status"
    $status = $_POST["status"];

    // Tampilkan pesan sesuai dengan pilihan
    if ($status == "siswa") {
        echo "Anda memilih status: siswa";
        echo "<script>window.location.href = 'siswa1.html';</script>";
    } elseif ($status == "admin") {
        echo "Anda memilih status: admin";
        echo "<script>window.location.href = 'admin1.html';</script>";
    } else {
        echo "Pilihan tidak valid";
    }
}




?>
