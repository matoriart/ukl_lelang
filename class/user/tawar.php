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
    // $id_lelang = $_POST['id_lelang'];
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
                                <div class="card-body">
                                    <h5 class="card-title"><?= $tb_brg['nama_barang'] ?></h5>
                                  
                                    <p class="card-text">Rp. <b><?= $tb_brg['harga_awal'] ?></b></p>
                                    <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2" action="press_confirm.php" method="post">
                                        <div class="col-12">
                                            <div class="form-outline">
                                                <input type="hidden" name="id_lelang" value="<?=$tb_brg['id_lelang']?>">
                                                <input type="hidden" name="id_barang" value="<?=$tb_brg['id_barang']?>">
                                                <label class="form-label" for="form1">Masukkan Harga Tertinggi</label>
                                                <input type="number" name="penawaran_harga" class="form-control" />
                                            </div>
                                        </div>
                                </div>
                                <div class="card-body">
                                <center><button type="submit" class="btn btn-primary btn-block mb-4">Confirm</button></center>
                                </div>
                                </form>
                            </div>

    </center>
    </section>
</body>

</html>