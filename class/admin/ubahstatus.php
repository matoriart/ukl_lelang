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
<?php
include "conn.php";
$query_barang = mysqli_query($conn, "select * from tb_barang where id_barang='".$_GET['id_barang']."'");
// $query_lelang = mysqli_query($conn, "select * from tb_lelang where id_lelang='".$_GET['id_lelang']."'");
$tb_brg = mysqli_fetch_array($query_barang);
// $tb_llg = mysqli_fetch_array($query_lelang);
?>
<body>
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">Ubah Status Toko</h4>
            <form action="press_ubahstatustoko.php" method="post">
            <input type="hidden" name="id_barang" value="<?=$tb_brg['id_barang']?>">
            <input type="hidden" name="id_lelang" value="<?=$tb_brg['id_lelang']?>">
  
            <center><div class="form-outline mb-4">
            <button type="submit" name="status" value="dibuka" class="btn btn-success btn-block mb-4">Buka</button>
            <button type="submit" name="status" value="ditutup" class="btn btn-danger btn-block mb-4">Tutup</button>
            </div></center>
  <!-- Checkbox
  <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
    <label class="form-check-label" for="form4Example4">
      Send me a copy of this message
    </label>
  </div> -->

  <!-- Submit button -->
  <!-- <center><button type="submit" class="btn btn-primary btn-block mb-4">Confirm</button></center> -->
  
</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>