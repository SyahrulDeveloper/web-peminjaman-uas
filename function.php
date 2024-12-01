<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "db_fik");

// Mengirim data kontak
if(isset($_POST['kirim_pesan'])){
    $nama = $_POST['kontak_nama'];
    $email = $_POST['kontak_email'];
    $pesan = $_POST['kontak_pesan'];

    $addtokontak = mysqli_query($koneksi, "INSERT INTO kontak VALUES ('', '$nama', '$email', '$pesan')");
    if($addtokontak){  
    header('location: index.php');
    exit();
    }
    
}    
?>