<?php
// Create connection
$conn = mysqli_connect("localhost","root","","kesehatan");

if (mysqli_connect_errno()){
    echo 'Koneksi db gagal : '. mysqli_connect_error();
}

?>