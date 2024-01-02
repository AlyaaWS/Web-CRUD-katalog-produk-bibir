<?php
/* ALYA WAHYUNING SYAHBANI 22.12.2595 SI 05*/
session_start();
include "../config.php";

$produk = $_POST["produk"];
$deskripsi = $_POST["deskripsi"];
$harga = $_POST["harga"];
$seri = $_POST["seri"];

 //nama file temporary yang akan disimpan di server
$lokasifile = $_FILES['gambar']['tmp_name'];
 //membaca nama file yang akan diupload
$namafile = $_FILES['gambar']['name'];

 //folder penyimpanan berkas/file
$uploaddir = "uploads/";
 //menggabungkan nama folder dan nama file
$uploadfile = $uploaddir.$namafile;

//Jika file berhasil di upload
if(move_uploaded_file($lokasifile, $uploadfile)){
echo "Nama File : <b>$namafile</b> sukses di upload";

//masukkan informasi file ke dalam database
$sql = "INSERT INTO produk(nama_produk, deskripsi_produk, harga_produk, gambar_produk, seri_produk)
VALUES('$produk','$deskripsi','$harga','$uploadfile','$seri')";


$hasil = mysqli_query($config, $sql);

header('location:halaman_produk.php');
} else {
echo "File gagal disimpan";
}
?>