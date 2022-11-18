<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nama_lengkap = $_POST["nama_petugas"];
    $role = $_POST["id_level"];
    // 
    include "conn.php";
    $input = mysqli_query($conn, "INSERT INTO tb_petugas 
    (nama_petugas,username,password,id_level) VALUES 
    ('".$nama_lengkap."','".$username."','".md5($password)."','".$role."')");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='index.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');location.href='index.php';</script>";
    }
?>