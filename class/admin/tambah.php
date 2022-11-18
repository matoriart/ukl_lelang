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
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">Tambah barang</h4>
            <form action="press_tambah.php" method="post" enctype="multipart/form-data" >
 
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example1">Nama</label>
    <input type="text" id="form4Example1" class="form-control" name="nama_barang"/>
    
  </div>

  
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example2">Harga</label>
    <input type="number" id="form4Example2" class="form-control" name="harga_awal"/>
  </div>

  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example2">Tanggal</label>
    <input type="date" id="form4Example2" class="form-control" name="tgl"/>
    
  </div>

  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example2">Foto</label>
    <input type="file" id="form4Example2" class="form-control" name="image" required/>
    
  </div>

  
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example3">Deskripsi</label>
    <textarea class="form-control" id="form4Example3" rows="4" name="deskripsi_barang"></textarea>
    
  </div>

  <!-- <div class="form-outline mb-4">
    <input type="hidden" id="form4Example2" class="form-control" name="status" value="ditutup"/>
  </div> -->
  <!-- Checkbox
  <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
    <label class="form-check-label" for="form4Example4">
      Send me a copy of this message
    </label>
  </div> -->

  <!-- Submit button -->
  <center><button type="submit" class="btn btn-primary btn-block mb-4">Tambah</button></center>
  
</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>