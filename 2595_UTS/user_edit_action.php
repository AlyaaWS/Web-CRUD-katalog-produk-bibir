<?php
//Alya Wahyuning Syahbani 22.12.2595 SI 05
include "config.php";

$user = $_POST['username'];
$pass = $_POST['password'];
$nama = $_POST['namalengkap'];
$email= $_POST['email'];

$sql = "UPDATE user
        SET user_password='$pass',
            user_namalengkap='$nama',
            user_email='$email'
        WHERE user_nama='$user'";

$hasil = mysqli_query($config,$sql);

if($hasil){
    echo "Data berhasil diubah";
}else {
    echo "Data gagal diubah";
}
?>

<br>Kembali ke <a href="halaman_user.php"> halaman user </a>