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
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-10">

        <div class="card">
          <div class="card-header p-3">
            <center><h5 class="mb-0">Transaksi Lelang</h5></center>
          </div>
          <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">

            <table class="table mb-0">
              <thead>
                <tr>
                  <th scope="col">Barang</th>
                  <th scope="col">Pasang Harga</th>
                  <th scope="col">Harga Awal</th>
                  <th scope="col">Tanggal di lelang</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "conn.php";
                $qry_sx = mysqli_query($conn, "SELECT * FROM history_lelang where id_user = '".$_SESSION['id_user']."' ORDER BY id_history DESC");
                while($xzz=mysqli_fetch_array($qry_sx)){
                  $qryx = mysqli_query($conn, "SELECT * FROM history_lelang a join tb_barang b on a.id_barang = b.id_barang where id_history = '".$xzz['id_history']."'");
                  while($hstry=mysqli_fetch_array($qryx)){
                ?>
                <tr class="fw-normal">
                  <th>
                    <p><b><?=$hstry['nama_barang']?></b></p>
                  </th>
                  <td class="align-middle">
                    <p><b>Rp. <?=$hstry['penawaran_harga']?></b></p>
                  </td>
                  <td class="align-middle">
                    <p><b>Rp. <?=$hstry['harga_awal']?></b></p>
                  </td>
                  <td class="align-middle">
                    <p><b><?=$hstry['tgl']?></b></p>
                  </td>
                  <td class="align-middle">
                    <a href="pemenang.php?id_lelang=<?=$hstry['id_lelang']?>" class="btn btn-primary">Detail</a>
                  </td>
                  <td class="align-middle">
                    <a href="delete_history.php?id_history=<?=$hstry['id_history']?>" class="btn btn-danger">Hapus</a>
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