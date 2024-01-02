<?php
/* ALYA WAHYUNING SYAHBANI 22.12.2595 SI 05*/
include "../config.php";
$id_produknya = $_GET['id_produk'];

$sql = "DELETE FROM produk WHERE id_produk='$id_produknya'";
mysqli_query($config, $sql);
echo "<script> alert('Data berhasil dihapus')</script>";
header("Location: halaman_produk.php");