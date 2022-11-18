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
<?php
        include "conn.php";
        $query_barang = mysqli_query($conn, "select * from tb_barang where id_barang='".$_GET['id_barang']."'");
        $tb_brg = mysqli_fetch_array($query_barang);
    ?>
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">Edit barang</h4>
            <form method="post" action="press_edit.php" enctype="multipart/form-data">
                <input type="hidden" name="id_barang" value="<?=$tb_brg['id_barang']?>">
       
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control" name="nama_barang" value="<?=$tb_brg['nama_barang']?>"/>
    <label class="form-label" for="form4Example1">Nama</label>
  </div>

  
  <div class="form-outline mb-4">
    <input type="number" id="form4Example2" class="form-control" name="harga_awal" value="<?=$tb_brg['harga_awal']?>"/>
    <label class="form-label" for="form4Example2">Harga</label>
  </div>

  <div class="form-outline mb-4">
    <input type="date" id="form4Example2" class="form-control" name="tgl" value="<?=$tb_brg['tgl']?>"/>
    <label class="form-label" for="form4Example2">Tanggal</label>
  </div>

  <div class="form-outline mb-4">
  <img src="../../assets/image/<?=$tb_brg['image']?>" width="100"/></br>
    <input type="file" id="form4Example2" class="form-control" name="image" value="<?=$tb_brg['image']?>"/>
    <label class="form-label" for="form4Example2">Foto</label>
  </div>

  
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form4Example3" rows="4" name="deskripsi_barang" required><?=$tb_brg['deskripsi_barang']?></textarea>
    <label class="form-label" for="form4Example3">Deskripsi</label>
  </div>

  <!-- Checkbox
  <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
    <label class="form-check-label" for="form4Example4">
      Send me a copy of this message
    </label>
  </div> -->

  <!-- Submit button -->
  <center><button type="submit" class="btn btn-primary btn-block mb-4">Confirm</button></center>
  
</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>