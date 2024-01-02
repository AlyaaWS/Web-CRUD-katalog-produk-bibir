<?php
//alya wahyuning syahbani 22.12.2595 SI 05
session_start();
include '../config.php';

if (isset($_POST['simpan'])) {
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['produk'];
    $deskripsi_produk = $_POST['deskripsi'];
    $harga_produk = $_POST['harga'];
    $seri_produk = $_POST['seri'];

    // Cek apakah ada file gambar yang diupload
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === 0) {
        $lokasi_file = $_FILES['gambar']['tmp_name'];
        $nama_file = $_FILES['gambar']['name'];
        $folder_upload = "uploads/";

        // Pindahkan file gambar ke folder uploads
        if (move_uploaded_file($lokasi_file, $folder_upload . $nama_file)) {
            $gambar_produk = $folder_upload . $nama_file;

            // Update data produk ke database
            $sql = "UPDATE produk SET nama_produk='$nama_produk', deskripsi_produk='$deskripsi_produk', harga_produk='$harga_produk', gambar_produk='$gambar_produk', seri_produk='$seri_produk' WHERE id_produk=$id_produk";

            $result = mysqli_query($config, $sql);

            if ($result) {
                // Redirect ke halaman daftar produk
                header('Location: halaman_produk.php');
            } else {
                echo "Gagal mengupdate data produk: " . mysqli_error($config);
            }
        } else {
            echo "Gagal mengupload gambar.";
        }
    } else {
        // Jika tidak ada gambar yang diupload, update data produk tanpa gambar
        $sql = "UPDATE produk SET nama_produk='$nama_produk', deskripsi_produk='$deskripsi_produk', harga_produk='$harga_produk', seri_produk='$seri_produk' WHERE id_produk=$id_produk";

        $result = mysqli_query($config, $sql);

        if ($result) {
            // Redirect ke halaman daftar produk
            header('Location: halaman_produk.php');
        } else {
            echo "Gagal mengupdate data produk: " . mysqli_error($config);
        }
    }
} else {
    echo "Akses tidak sah.";
}
?>
