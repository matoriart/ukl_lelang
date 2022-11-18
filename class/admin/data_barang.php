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
</head>
<body style="background-color:azure;">
<section class="vh-50" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">Data Barang</h4>

            <table class="table mb-4">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Tanggal Upload</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "conn.php";
                $qry_user=mysqli_query($conn, "SELECT * FROM tb_barang");
                $no=0;
                while($data_user=mysqli_fetch_array($qry_user)){
                $no++;
                ?>
                <tr>
                  <th scope="row"><?=$no?></th>
                  <td><?=$data_user['nama_barang']?></td>
                  <td><?=$data_user['harga_awal']?></td>
                  <td><?=$data_user['tgl']?></td>
                  <td>
                  <a href="delete.php?id_barang=<?=$data_user['id_barang']?>" class="btn btn-danger">Delete</a>
                  <a href="edit.php?id_barang=<?=$data_user['id_barang']?>" class="btn btn-dark">Edit</a>
                  </td>
                  <?php
            }
            ?>
                </tr>
              </tbody>
                </table>
            <center><a href="tambah.php" class="btn btn-primary">Tambah</a></center>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>