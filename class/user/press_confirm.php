<?php
session_start();
$id_barang = $_POST["id_barang"];
$id_lelang = $_POST["id_lelang"];
$harga = $_POST["penawaran_harga"];

// 
include "conn.php";
$query_history = mysqli_query($conn, "SELECT * FROM tb_barang where id_lelang='" . $id_lelang . "'");
while ($fetch = mysqli_fetch_array($query_history)) {
    if ($fetch['harga_awal'] > $harga) {
        // echo "<input type='hidden' name='id_lelang' value='".$fetch['id_lelang']."'>";
      ?>
    <script>alert('Harga Terlalu Rendah');location.href='tawar.php?id_lelang=<?=$id_lelang?>'</script>
      <?php
    } else {

        $input = mysqli_query($conn, "INSERT INTO history_lelang 
(id_lelang,id_barang,id_user,penawaran_harga) VALUES 
('" . $id_lelang . "','" . $id_barang . "','" . $_SESSION['id_user'] . "','" . $harga . "')");

        if ($input) {
            echo "<script>alert('Berhasil');location.href='transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal');location.href='tawar.php';</script>";
        }
    }
}
