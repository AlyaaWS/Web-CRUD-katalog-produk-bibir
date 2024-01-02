<!DOCTYPE html>
<html>
<head>
    <title>Lip product</title>
    <style>
        /* ALYA WAHYUNING SYAHBANI 22.12.2595 SI 05*/
        body {
            font-family: Arial, sans-serif;
            background-image: url('lip.jpg');
            background-size: cover;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }

        .header {
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .header_navigation {
            display: flex;
            justify-content: flex-start; /* Memindahkan menu ke kiri */
            gap: 20px;
            margin-top: 10px;
            padding-left: 20px; /* Meningkatkan jarak dari tepi kiri */
        }

        .header_navigation a {
            color: #D2691E;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        .header_navigation a:hover {
            color: #FFA500;
        }

        p{
          margin-left: 550px;
          font-size: 35px;
          color: #8B0000;
        }

        button {
            background-color: #8B0000;
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-left: 560px;
            margin-top: 300px;
            border-radius: 25px;
            opacity: 0.8;
        }

        button:hover {
            background-color: #800000;
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="header_navigation">
            <a href="#">Home</a>
            <a href="katalog.php">Product</a>
        </nav>
    </header>
        <p style="font-size: 35px; color: #8B0000; font-weight: bold;">MY.LUPLIP</p>
    <button onclick="location.href='katalog.php'">View Produk</button>
</body>
</html>
