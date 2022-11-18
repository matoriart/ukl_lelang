<?php
$id_brg = $_POST['id_barang'];
$status = $_POST['status'];
// $momons = $_POST['id_user'];
include "conn.php";
$ix = mysqli_query($conn, "UPDATE tb_barang where id_barang = '".$id_brg."' SET status='" . $status . "'");
if ($ix) {
    echo "<script>alert('Successfull');location.href='home.php';</script>";
} else {
    echo "<script>alert('Failed, Try Again!!');location.href='ubahstatus_toko.php';</script>";
}
