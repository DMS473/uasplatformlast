<?php
   include('koneksi.php');
   session_start();
   
   $user_check = $_SESSION['username'];
   
   $ses_sql = mysqli_query($conn,"select username from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['username'])){
    echo"<script>alert('Sesi Anda sudah berakhir, Silahkan Login kembali'); 
    window.location.href='index.php?module=logintry';</script>";
        // header("location:index.php");
      die();
   }
?>
