<?php
session_start();
$id_barang = $_POST['id_barang'];
$id_lelang = $_POST['id_lelang'];
$status = $_POST['status'];
// $momons = $_POST['id_user'];
include "conn.php";

// $ix = mysqli_query($conn, "UPDATE tb_lelang SET status='" .$status. "' where id_barang = '".$id_barang."'");

if ($_POST['status']=='dibuka') {
        $qry = mysqli_query($conn, "INSERT INTO tb_lelang (id_barang, tgl_lelang, id_petugas, status) 
        values('".$id_barang."','".date('y-m-d')."','".$_SESSION['id_petugas']."','dibuka')");
        $w = mysqli_query($conn, "SELECT * FROM tb_lelang ORDER BY id_lelang DESC");
        $mx = mysqli_fetch_array($w);
        $qry_xs = mysqli_query($conn, "UPDATE tb_barang SET id_lelang='".$mx['id_lelang']."' where id_barang = '".$id_barang."'");
        
    echo "<script>alert('Successfull');location.href='home.php';</script>";
} else if($_POST['status']=='ditutup') {
    $qrytutup = mysqli_query($conn, "SELECT * FROM history_lelang where id_lelang = '".$id_lelang."' ORDER BY penawaran_harga DESC");
    $xs=mysqli_fetch_array($qrytutup);
    $qry_lelang = mysqli_query($conn, "UPDATE tb_lelang SET harga_akhir='".$xs['penawaran_harga']."',id_user='".$xs['id_user']."',status='ditutup' where id_barang = '".$id_barang."'");
    echo "<script>alert('Successfull');location.href='home.php';</script>";
}else{
    echo "<script>alert('Failed, Try Again!!');location.href='ubahstatus.php';</script>";
}
