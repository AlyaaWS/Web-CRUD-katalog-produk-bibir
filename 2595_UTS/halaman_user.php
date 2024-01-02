<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
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
            width: 720px;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #8B0000;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            color: #0056b3;
        }

    </style>
</head>
<body>
    <h3>Data User</h3>
    <p align="center" >[ <a href="user_tambah.php">+Tambah User</a> ]</p>
    
    <table>
        <tr>
            <th width="30">No.</th>
            <th width="30">Username</th>
            <th width="30">Password</th>
            <th width="30">Nama Lengkap</th>
            <th width="30">E-Mail</th>
            <th width='150'>Kelola</th>
        </tr>
        <?php
            include "config.php";

            $sql = "SELECT user_nama, user_password, user_namalengkap, user_email FROM user ORDER BY user_namalengkap";

            $hasil = mysqli_query($config, $sql);

            $no = 1;
            while ($data = mysqli_fetch_array($hasil)){
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['user_nama']; ?></td>
            <td><?php echo $data['user_password']; ?></td>
            <td><?php echo $data['user_namalengkap']; ?></td>
            <td><?php echo $data['user_email']; ?></td>
            <td align="center">
                <a href="user_edit.php?user_nama=<?php echo $data['user_nama'];?>">Edit</a>
                <a href="user_hapus.php?user_nama=<?php echo $data['user_nama'];?>">Hapus</a>
            </td>
        </tr>   
        <?php
        $no++;
        }
        echo "</table>";
        ?>       
</body>
</html>
