<?php
//Alya Wahyuning Syahbani 22.12.2595 SI 05
include "config.php";
$user = $_POST['username'];
$pass = $_POST['password'];
$nama = $_POST['namalengkap'];
$email = $_POST['email'];

$sql = "INSERT INTO user (user_nama, user_password, user_namalengkap, user_email)
        VALUES ('$user', '$pass', '$nama', '$email');";
        
$hasil = mysqli_query($config, $sql);

if($hasil){
    echo "Data berhasil ditambahkan";
}else{
    echo "Data gagal disimpan";
    }
?>

<br>Kembali ke <a href="halaman_user.php">halaman admin</a>