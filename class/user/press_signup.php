<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nama_lengkap = $_POST["nama_lengkap"];
    $nomor = $_POST["telp"];
    // 
    include "conn.php";
    $input = mysqli_query($conn, "INSERT INTO tb_masyarakat 
    (nama_lengkap,username,password,telp) VALUES 
    ('".$nama_lengkap."','".$username."','".md5($password)."','".$nomor."')");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='index.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');location.href='index.php';</script>";
    }
?>