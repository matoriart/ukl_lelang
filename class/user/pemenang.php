<?php
include "conn.php";
include "header.php";
$id_lelang = $_GET['id_lelang'];
$qry_p = mysqli_query($conn, "select * from tb_lelang where id_lelang = '" . $id_lelang . "'");
while ($fetch = mysqli_fetch_array($qry_p)) {
    if ($fetch['id_user'] == $_SESSION['id_user']) {
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
            <center>
                <h1>Selamat!!</h1>
            </center>
            <center>
                <h2>Anda Memenangkan Lelang</h2>
            </center>
        <?php
    } else if (empty($fetch['id_user'])) {
        ?>
            <script>alert("sedang dalam kalkulasi");location.href="transaksi.php";</script>
        <?php
    } else {

        ?>
            <center>
                <h1>Mohon Maaf!!</h1>
            </center>
            <center>
                <h2>Anda Tidak Memenangkan Lelang</h2>
            </center>
    <?php
    }
}
    ?>
        </body>

        </html>