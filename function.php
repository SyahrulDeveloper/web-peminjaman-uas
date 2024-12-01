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
// Book peminjaman kelas
if(isset($_POST['pinjam_kelas'])){
    $nama_mhs = $_POST['nama_mhs'];
    $ruang_kelas = $_POST['ruang_kelas'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $deskripsi = $_POST['deskripsi'];

    $addtopeminjaman_dw = mysqli_query($koneksi, "INSERT INTO form_peminjaman_kelas_dw VALUES ('', '$nama_mhs', '$ruang_kelas', '$tanggal', '$waktu', '$deskripsi')");
    if($addtopeminjaman_dw){  
    header('location: form-dw.php');
    exit();
    }
}    

function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows_dw = [];
    while ( $row_dw = mysqli_fetch_assoc($result)) {
        $rows_dw[] = $row_dw;
    }
    return $rows_dw;
}
?>