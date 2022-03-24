<?php
session_start();
require_once("koneksi.php");
// Jika sesi dari login belum dibuat maka akan kita kembalikan ke halaman login
if(!isset($_SESSION['username'])){
    header("location: login.php");
}else{
    // Jika sudah dibuatkan sesi maka akan kita masukkan kedalam variabel
    $username = $_SESSION['username'];
}
?>

<html>
    <head>
    <?php require_once("header.php"); ?>
    <style>
        body{
            background-color: light ;
        }
    </style>
        
        <title>Aplikasi Pembayaran SPP</title>

    </head>
<body>
<!-- Kita akan panggil menu navigasi -->

</body>
</html>