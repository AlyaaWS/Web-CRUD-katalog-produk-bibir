<!DOCTYPE html>
<html lang="en">
<head>
    <title>LIP CARE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <style>
        /* ALYA WAHYUNING SYAHBANI 22.12.2595 SI 05*/
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom: 0; background: url('lip.jpg') center center fixed no-repeat; background-size: cover;color:#660000">
    <h1>LUPLIPS</h1>
    <p>trust the lup for better lips</p>
</div>

<div class="container" style="margin-top: 30px">
    <div class="row">
        <?php
        include "config.php";
        $sql = "SELECT nama_produk, deskripsi_produk, gambar_produk, harga_produk, seri_produk FROM produk ORDER BY id_produk";
        $hasil = mysqli_query($config, $sql);
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="admin/<?php echo $data['gambar_produk'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['nama_produk']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['seri_produk']; ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['harga_produk']; ?></h6>
                        <p class="card-text"><?php echo $data['deskripsi_produk']; ?></p>
                    </div>
                </div>
                <br>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<div class="jumbotron text-center" style="margin-bottom: 0; background-color: #660000">
    <p>Footer</p>
</div>

</body>
</html>
