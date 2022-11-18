<?php
    $nama = $_POST["nama_barang"];
    $harga = $_POST["harga_awal"];
    $tgl = $_POST["tgl"];
    $desc = $_POST["deskripsi_barang"];
    $img = $_POST["image"];
    $file_tmp = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_name = $_FILES['image']['name'];
        $folder = "../img/";
        $upload=move_uploaded_file($file_tmp,'../../assets/image/'.$file_name);
    // 
    include "conn.php";
    $input = mysqli_query($conn, "INSERT INTO tb_barang 
    (nama_barang,harga_awal,tgl,image,deskripsi_barang) VALUES 
    ('".$nama."','".$harga."','".date($tgl)."','".$file_name."','".$desc."')");
    if ($input) {
        echo "<script>alert('Berhasil');location.href='data_barang.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');location.href='tambah.php';</script>";
    }
?>