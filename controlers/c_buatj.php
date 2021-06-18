<?php
session_start();
include '../model/conn.php';

if(isset($_POST['buatJanji']))
{
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    if($nama != "" and $email != "" and $pesan != ""){
        mysqli_query($conn,"INSERT INTO konsultasi VALUES (NULL, '$nama', '$email', '$pesan')");
        echo "<script>document.location.href = '../beranda.php?pesan=BerhasilTambah';</script>";
    }else{
        echo "<script>alert('Lengkapi Form Untuk Buat Janji!!'); document.location.href = '../beranda.php?pesan=gagal';</script>";
    }  
}
?>