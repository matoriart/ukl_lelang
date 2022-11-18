<?php

if ($_GET['id_barang']) {
    include "conn.php";
    $query_brg = mysqli_query($conn, "SELECT * FROM tb_barang where id_barang = '".$_GET['id_barang']."'");
    $data_brg = mysqli_fetch_array($query_brg);
    $query_hapus = mysqli_query($conn, "DELETE FROM tb_barang where id_barang = '".$_GET['id_barang']."'");
    unlink('../../assets/image/'.$data_brg['image']);
    if ($query_hapus) {
        // echo "berhasil";
        // echo $query_hapus;
        echo "<script> alert('Successfully Deleted!!'); location.href='data_barang.php'; </script>";
    }
    else{
        // echo "gagal";
        echo "<script> alert ('Failed!!'); location.href='data_barang.php'; </script>";
    }
}
else{
   // echo "id_";
}
?>
