<?php
session_start();
include '../model/conn.php';


if(isset($_POST['registrasi']))
{
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($nama != "" and $kelamin != "Choose..." and $umur != "" and $username != "" and $password != ""){
        mysqli_query($conn,"INSERT INTO user VALUES (NULL, '$nama', '$kelamin', '$umur', '$alamat', '$username', '$password')");
        echo "<script>document.location.href = '../login.php?pesan=berhasilregist';</script>";
    }else{
        echo "<script>alert('Lengkapi Form Untuk Registrasi!!'); document.location.href = '../registrasi.php?pesan=gagalRegis';</script>";
    }

    

    
}