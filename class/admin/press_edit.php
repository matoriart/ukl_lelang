<?php
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga_awal'];
    $tanggal = $_POST['tgl'];
    $desc = $_POST['deskripsi_barang'];

    include "conn.php";
    if($_FILES['image']['tmp_name']){
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_name = $_FILES['image']['name'];
        $folder = "../../assets/image/";

        // if($size > 2048000){
            $query_foto = mysqli_query($conn, "select * from tb_barang where id_barang ='".$_POST['id_barang']."'");
            $dt_barang = mysqli_fetch_array($query_foto);
            unlink('../../assets/image/'.$dt_barang['image']);
            //
            move_uploaded_file($file_tmp,$folder.$file_name);
            $save = mysqli_query($conn, "UPDATE tb_barang SET nama_barang='".$nama_barang."',harga_awal='".$harga."',tgl='".$tanggal."',image='".$file_name."',deskripsi_barang='".$desc."' where id_barang = '".$id_barang."'");

            if($save){
                echo "<script>alert('Succesfull!');location.href='data_barang.php'</script>";
            }
            else{
                echo "<script>alert('Failed!');location.href='edit.php'</script>";
            }
        }
    // }
    else{
        $save1 = mysqli_query($conn, "update tb_barang set nama_barang='".$nama_barang."', harga_awal='".$harga."',tgl='".$tanggal."',deskripsi_barang='".$desc."' where id_barang='".$id_barang."'");

        if($save1){
            echo "<script>alert('Succesfull!');location.href='data_barang.php'</script>";
        }
        else{
            echo "<script>alert('1Failed!');location.href='edit.php'</script>";
        }
    }
 ?>