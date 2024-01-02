<?php
    //Alya Wahyuning Syahbani 22.12.2595 SI 05
    include "config.php";
    $user = $_GET['user_nama'];

    $sql = "DELETE FROM user WHERE user_nama='$user'";
    $hasil = mysqli_query($config, $sql);

    echo "<script> alert ('Data Berhasil Dihapus')</script>";
    header("location:halaman_user.php");

?>