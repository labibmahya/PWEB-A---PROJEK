<?php
session_start();
include '../model/conn.php';

$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' and password='$password'");
$result = mysqli_num_rows($sql);
 
if($result > 0){
	$_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    setcookie($_SESSION['username'], $_SESSION['password'], time() + (86400 * 30), "/");

	echo "<script>document.location.href = '../beranda.php?pesan=berhasil';</script>";
}else{
	// header("location:index.php?pesan=gagal");
	echo "<script>alert('Username atau Password Salah!!'); document.location.href = '../login.php?pesan=berhasil';</script>";
}

?>