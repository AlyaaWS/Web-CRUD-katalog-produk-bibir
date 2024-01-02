<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <style>
        /* ALYA WAHYUNING SYAHBANI 22.12.2595 SI 05*/
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            text-align: center;
        }

        th {
            background-color: #8B0000; /* Warna latar belakang header */
            color: white; /* Warna teks header */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* Warna latar belakang baris genap */
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        /* Tampilan tombol Tambah Produk */
        a.button {
            background-color: #8B0000;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<p align="left"> Klik <a href="login.php">disini</a> untuk logout.</p>
<h3>DATA PRODUK</h3>
<p><a class="button" href="produk_tambah.php">[+Tambah Produk]</a> </p>
<table border="1">
<tr>
    <th width="30">No.</th>
    <th width="100">Nama produk</th>
    <th width="300">Deskripsi Produk</th>
    <th width="200">Harga produk</th>
    <th width="350">Gambar</th>
    <th width="100">Seri</th>
    <th width="300">Kelola</th>
</tr>
<?php
include "../config.php";

$sql = "SELECT id_produk, nama_produk, deskripsi_produk, harga_produk, gambar_produk, seri_produk FROM produk ORDER BY id_produk";
$hasil = mysqli_query($config, $sql);

$no = 1;
while ($data = mysqli_fetch_array($hasil)) {
?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['nama_produk']; ?></td>
        <td><?php echo $data['deskripsi_produk']; ?></td>
        <td><?php echo $data['harga_produk']; ?></td>
        <td><img src="<?php echo $data['gambar_produk']; ?>" width="100"></td>
        <td><?php echo $data['seri_produk']; ?></td>
        <td align="center">
            <a href="produk_edit.php?id_produk=<?php echo $data['id_produk']; ?>">Edit</a> |
            <a href="produk_hapus.php?id_produk=<?php echo $data['id_produk']; ?>">Hapus</a>
        </td>
    </tr>
<?php
 $no++;
}
echo "</table>";
?>
</body>
</html>
