<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .gradient-custom {
            background: radial-gradient(50% 123.47% at 50% 50%, #00ff94 0%, #720059 100%),
                linear-gradient(121.28deg, #669600 0%, #ff0000 100%),
                linear-gradient(360deg, #0029ff 0%, #8fff00 100%),
                radial-gradient(100% 164.72% at 100% 100%, #6100ff 0%, #00ff57 100%),
                radial-gradient(100% 148.07% at 0% 0%, #fff500 0%, #51d500 100%);
            background-blend-mode: screen, color-dodge, overlay, difference, normal;
        }
    </style>
</head>

<body>
    <?php
    include "conn.php";
    $query_barang = mysqli_query($conn, "SELECT * FROM  `tb_barang` where id_lelang='" . $_GET['id_lelang'] . "'");
    $tb_brg = mysqli_fetch_array($query_barang);
    ?>
    <center>
        <section class="vh-50 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-9 col-xl-7">
                        <div class="card-body p-4">
                            <div class="card" style="width: 18rem;">
                                <img src="../../assets/image/<?=$tb_brg['image']?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $tb_brg['nama_barang'] ?></h5>
                                    <p class="card-text">Rp. <b><?= $tb_brg['harga_awal'] ?></b></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?= $tb_brg['deskripsi_barang'] ?></li>
                                </ul>
                                <!-- <form action="tawar.php?id_lelang=<?=$tb_brg['id_lelang']?>">
            <input type="hidden" name="id_lelang" value="<?=$tb_brg['id_lelang']?>"> -->
  
            <!-- <center><div class="form-outline mb-4">
            <button type="submit" name="tawar" class="btn btn-success btn-block mb-4">Ikut Lelang</button>
            </div></center> 
                                </form> -->
                                <a href="tawar.php?id_lelang=<?=$tb_brg['id_lelang']?>" class="btn btn-primary">Ikut Lelang</a>
                            </div>
    </center>
    </section>
</body>

</html>