<!DOCTYPE html>
<html>
<head>
    <title>Control Panel</title>
    <style>
        /* ALYA WAHYUNING SYAHBANI 22.12.2595 SI 05*/
        body {
            font-family: Arial, sans-serif;
            background: url('../lip.jpg') center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            color: #333;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            padding: 20px;
        }

        p {
            color: #555;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['username'])) { ?>
    <div class="container">
        <h2>CONTROL PANEL</h2>
        <p>Selamat Datang "<?php echo $_SESSION['username']; ?>". Klik <a href="logout.php">disini</a> untuk logout.</p>
        <p>Berikut ini adalah menu navigasi anda:</p>
        <a href="halaman_produk.php">Halaman Katalog</a> |
        <a href="../halaman_user.php">Halaman Admin</a>
    </div>
    <?php } else { ?>
    <h2>Maaf...</h2>
    <p>Anda tidak berhak mengakses halaman ini. Silakan <a href="login.php">Login</a> terlebih dahulu.</p>
    <?php } ?>
</body>
</html>
