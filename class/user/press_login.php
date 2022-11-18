<?php
     if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
         echo '<script>alert("please insert username");location.href="index.php";</script>';
        } elseif(empty($password)){
         echo '<script>alert("please insert password");location.href="index.php";</script>';
        } else{
         include "conn.php";
         $qry_check=mysqli_query($conn, "select * from tb_masyarakat where username ='".$username."' and password ='".md5($password)."'");
         if(mysqli_num_rows($qry_check)>0){
            session_start();
            $data_login=mysqli_fetch_array($qry_check);
            $_SESSION['id_user']=$data_login['id_user'];
            $_SESSION['username']=$data_login['username'];
            $_SESSION['password']=$data_login['password'];
            $_SESSION['login_status']=true;
            header('location: home.php');
         } else{
            echo '<script>alert("incorrect password please try again");location.href="index.php";</script>';
         }
        }
     } else{
      echo 'FAiled';
     }
?>