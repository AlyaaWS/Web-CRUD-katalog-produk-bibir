<!DOCTYPE html>
<html>
<head>
    <title>Halaman Input Produk</title>
    <style>
        /* ALYA WAHYUNING SYAHBANI 22.12.2595 SI 05*/
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            background-image: url('../lip.jpg');
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: #fff;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
        }

        tr {
            margin: 10px 0;
        }

        td {
            padding: 5px;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #8B0000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <h2>TAMBAH PRODUK</h2>
    <form method="POST" action="produk_tambah_action.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td width="150">Nama Produk</td>
                <td>:</td>
                <td><input type="text" name="produk" placeholder="Masukkan Nama Produk" required></td>
            </tr>
            <tr>
                <td>Deskripsi Produk</td>
                <td>:</td>
                <td><textarea name="deskripsi" rows="6" cols="60" placeholder="Masukkan Deskripsi Produk" required></textarea></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><input type="file" name="gambar" required></td>
            </tr>
            <tr>
                <td>Harga Produk</td>
                <td>:</td>
                <td><input type="text" name="harga" placeholder="Masukkan Harga Produk" required></td>
            </tr>
            <tr>
                <td>Seri Produk</td>
                <td>:</td>
                <td><input type="text" name="seri" placeholder="Masukkan Seri Produk" required></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="simpan" value="Simpan">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
