<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
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
<h3>Menambah Data User</h3>
<form method="POST" action="user_tambah_action.php">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="Password" name="password"></td>
        </tr>
        <tr>
            <td>Nama lengkap</td>
            <td>:</td>
            <td><input type="text" name="namalengkap"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="Email" name="email"></td>
        </tr>
        <tr>
            <td colspan=3>
                <input type="submit" name="simpan" value="Simpan">
                <input type="reset" name="Batal">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
