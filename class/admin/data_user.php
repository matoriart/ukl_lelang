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

            <h4 class="text-center my-3 pb-3">Data User</h4>

            <table class="table mb-4">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Nomor Telepon</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "conn.php";
                $qry_user=mysqli_query($conn, "select * from tb_masyarakat");
                $no=0;
                while($data_user=mysqli_fetch_array($qry_user)){
                $no++;
                ?>
                <tr>
                  <th scope="row"><?=$no?></th>
                  <td><?=$data_user['nama_lengkap']?></td>
                  <td><?=$data_user['telp']?></td>
                  <td>
                  <a href="delete_user.php?id_user=<?=$data_user['id_user']?>" class="btn btn-danger">Delete</a>
                    <!-- <button type="submit" class="btn btn-success ms-1">Finished</button> -->
                  </td>
                  <?php
            }
            ?>
                </tr>
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