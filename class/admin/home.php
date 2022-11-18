<?php
include "conn.php";
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
    // if($_SESSION['id_petugas']==$_SESSION['id_level']='1'){
    ?>
    <center><h1>Admin MODE</h1></center>
    <?php
    // }else{
    ?>
    <!-- <center><h1>Petugas MODE</h1></center> -->
    <?php
    // }
    ?>
    <center><h3>Kerja Dengan Adil Dan Benar!!</h3></center>
<section class="vh-50" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">
            <table class="table mb-4">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Barang</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Tanggal Up</th>
                  <!-- <th scope="col">Aksi</th> -->
                </tr>
              </thead>
              <tbody>
                <?php
                include "conn.php";
                $qry_user=mysqli_query($conn, "SELECT * FROM tb_barang");
                $no=0;
                // $data_lelang=mysqli_fetch_array($qry_lelang);
                while($data_user=mysqli_fetch_array($qry_user)){
                $no++;
                ?>
                <tr>
                  <th scope="row"><?=$no?></th>
                  <td><?=$data_user['nama_barang']?></td>
                  <td>Rp. <?=$data_user['harga_awal']?></td>
                  <td><?=$data_user['tgl']?></td>
                  <td>
                  <a href="ubahstatus.php?id_barang=<?=$data_user['id_barang']?>" class="btn btn-success">Edit Status</a>
                  </td>
                  <?php
            }
            ?>
                </tr>
              </tbody>
                </table>
            <!-- <center><a href="tambah.php" class="btn btn-primary">Quick LITE</a></center> -->
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>