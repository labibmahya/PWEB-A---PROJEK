<?php
session_start();
include '../model/conn.php';

if(isset($_POST['submit']))
{
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    if ($nama != $_SESSION['nama'] or $nama == ""){
        echo "<script>document.location.href = '../index.php?pesan=logindulu';</script>";
    }
    // }elseif($nama != "" and $email != "" and $pesan != ""){
    //     mysqli_query($conn,"INSERT INTO konsultasi VALUES (NULL, '$nama', '$email', '$pesan')");
    //     echo "<script>document.location.href = '../views/index.php?pesan=berhasilTambah';</script>";
    // }else{
    //     echo "<script>document.location.href = '../views/index.php?pesan=gagalTambah';</script>";
    }  
?>