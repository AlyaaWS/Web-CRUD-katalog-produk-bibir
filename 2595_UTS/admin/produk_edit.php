<!DOCTYPE html>
<html>

<head>
    <title>Halaman Edit Produk</title>
    <style>
        /* ALYA WAHYUNING SYAHBANI 22.12.2595 SI 05*/
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        table tr {
            margin: 10px;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #8B0000;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
    include '../config.php';
    $id = $_GET['id_produk'];
    $sql = "SELECT * FROM produk WHERE id_produk=$id";
    $hasil = mysqli_query($config, $sql);
    $data = mysqli_fetch_assoc($hasil);
    ?>
    <div class="container">
        <h2>Edit Produk</h2>
        <form method="POST" action="produk_edit_action.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Produk:</td>
                    <td>
                        <input type="hidden" name="id_produk" value="<?php echo $data['id_produk']?>">
                        <input type="text" name="produk" value="<?php echo $data['nama_produk']?>">
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi Produk:</td>
                    <td><textarea name="deskripsi" rows="6" cols="45"><?php echo $data['deskripsi_produk']?></textarea></td>
                </tr>
                <tr>
                    <td>Harga Produk:</td>
                    <td><input type="text" name="harga" value="<?php echo $data['harga_produk']?>"></td>
                </tr>
                <tr>
                    <td>Gambar Produk:</td>
                    <td><input type="file" name="gambar"> </td>
                </tr>
                <tr>
                    <td>Seri Produk:</td>
                    <td><input type="text" name="seri" value="<?php echo $data['seri_produk']?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="simpan" value="Simpan">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
