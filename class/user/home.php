<?php
include "conn.php";
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Document</title>
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #7e40f6;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right,
                    rgba(126, 64, 246, 1),
                    rgba(80, 139, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right,
                    rgba(126, 64, 246, 1),
                    rgba(80, 139, 252, 1));
        }
    </style>
</head>

<body class="gradient-custom-2">
  <?php
  $qry = mysqli_query($conn, "select * from tb_masyarakat where id_user = '".$_SESSION['id_user']."'");
  $user = mysqli_fetch_array($qry);
  ?>
    <section>
        <center>
            <h1>Selamat Datang, <?=$user['nama_lengkap']?></h1>
        </center>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../assets/banner/Untitled-1.png" class="d-block w-100" alt="...">
                    
                </div>
                <div class="carousel-item">
                    <img src="../../assets/banner/Untitled-3.png" class="d-block w-100" alt="...">
                    
                </div>
                <div class="carousel-item">
                    <img src="../../assets/banner/Untitled-2.png" class="d-block w-100" alt="...">
                   
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
   
        <!-- <section>
    <center><h1>Tersedia</h1></center>
    <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    <center>Barang</center>
  </a>
  <a href="detail_barang.php?id_barang=<?= $stats['id_barang'] ?>" class="list-group-item list-group-item-action"><?= $stats['nama_barang'] ?></a>
</section> -->
        <section class="vh-50">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">TERSEDIA!!</h4>

            <table class="table mb-4">
              <thead>
                <!-- <tr>
                  <th scope="col">Barang</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Detail</th>
                </tr> -->
              </thead>
              <tbody>
              <?php
              $qry=mysqli_query($conn, "SELECT * FROM `tb_lelang` a JOIN `tb_barang` b ON a.id_barang = b.id_barang");
              while($stats=mysqli_fetch_array($qry)){
            // if($stats['id_lelang']){
            //       echo "<p>masih kosong</p>";
            //     }
              if($stats['status']=='dibuka'){
               
                ?>
                <tr>
                  <td>    <?=$stats['nama_barang']?></td>
                  <td>Rp. <?=$stats['harga_awal']?></td>
                  <td>
                    <a href="detail_barang.php?id_lelang=<?=$stats['id_lelang']?>" class="btn btn-success">Detail</a>
                  </td>
                </tr>
                <?php
              }
            }
        
            ?>
              </tbody>
            </table>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

</html>