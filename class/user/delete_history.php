<?php

if ($_GET['id_history']) {
    include "conn.php";
    $query_brg = mysqli_query($conn, "SELECT * FROM history_lelang where id_history = '".$_GET['id_history']."'");
    $data_brg = mysqli_fetch_array($query_brg);
    $query_hapus = mysqli_query($conn, "DELETE FROM history_lelang where id_history = '".$_GET['id_history']."'");
    // unlink('../img/'.$data_foto['foto_history']);
    if ($query_hapus) {
        // echo "berhasil";
        echo "<script> alert('Successfully Deleted!!'); location.href='transaksi.php'; </script>";
    }
    else{
        // echo "gagal";
        echo "<script> alert ('Failed!!'); location.href='transaksi.php'; </script>";
    }
}
else{
   // echo "id_";
}
?>
