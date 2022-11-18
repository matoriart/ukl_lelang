<?php

if ($_GET['id_user']) {
    include "conn.php";
    $query_brg = mysqli_query($conn, "SELECT * FROM tb_masyarakat where id_user = '".$_GET['id_user']."'");
    $data_brg = mysqli_fetch_array($query_brg);
    $query_hapus = mysqli_query($conn, "DELETE FROM tb_masyarakat where id_user = '".$_GET['id_user']."'");
    // unlink('../img/'.$data_foto['foto_user']);
    if ($query_hapus) {
        // echo "berhasil";
        echo "<script> alert('Successfully Deleted!!'); location.href='data_user.php'; </script>";
    }
    else{
        // echo "gagal";
        echo "<script> alert ('Failed!!'); location.href='data_user.php'; </script>";
    }
}
else{
   // echo "id_";
}
?>
