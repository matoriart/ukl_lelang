<?php

if ($_GET['id_petugas']) {
    include "conn.php";
    $query_brg = mysqli_query($conn, "SELECT * FROM tb_petugas where id_petugas = '".$_GET['id_petugas']."'");
    $data_brg = mysqli_fetch_array($query_brg);
    $query_hapus = mysqli_query($conn, "DELETE FROM tb_petugas where id_petugas = '".$_GET['id_petugas']."'");
    // unlink('../img/'.$data_foto['foto_petugas']);
    if ($query_hapus) {
        // echo "berhasil";
        echo "<script> alert('Successfully Deleted!!'); location.href='data_petugas.php'; </script>";
    }
    else{
        // echo "gagal";
        echo "<script> alert ('Failed!!'); location.href='data_petugas.php'; </script>";
    }
}
else{
   // echo "id_";
}
?>
