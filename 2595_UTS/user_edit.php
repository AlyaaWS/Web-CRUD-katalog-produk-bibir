<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah Data</title>
    <style>
        /* ALYA WAHYUNING SYAHBANI 22.12.2595 SI 05*/
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h3 {
            background-color: #8B0000;
            color: white;
            padding: 10px;
            text-align: center;
        }

        table {
            width: 400px;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #8B0000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

    </style>
</head>
<body>
<?php
include "config.php";
$user = $_GET['user_nama'];

$sql = "SELECT * FROM user WHERE user_nama='$user'";
$hasil = mysqli_query($config, $sql);
$data = mysqli_fetch_assoc($hasil);
?>

<h3>Ubah Data Admin</h3>
<form method="POST" action="user_edit_action.php">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td>
                <input type="text" value="<?php echo $data['user_nama']?>" disabled>
                <input type="text" name="username" value="<?php echo $data['user_nama']?>" hidden>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td>
                <input type="text" name="password" value="<?php echo $data['user_password']?>">
            </td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>
                <input type="text" name="namalengkap" value="<?php echo $data['user_namalengkap']?>">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>
                <input type="email" name="email" value="<?php echo $data['user_email']?>">
            </td>
        </tr>
        <tr>
            <td colspan=3>
                <input type="submit" name="ubah" value="Simpan">
                <input type="reset" value="Batal">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
