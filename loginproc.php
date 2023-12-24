<?php 

include "koneksi.php";
session_start();

// $querylogin = "select * from register where (username = '".$_POST['username']."') and (password = '".$_POST['password']."')";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $myusername = mysqli_real_escape_string($conn,$_POST['username']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
    
    $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);

    $sql1 = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn, $sql1);
    // $nim = $result['id'];

    if (mysqli_num_rows($result) > 0) {
  // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
        if ($row['role']=='Admin') {
            echo"<script>alert('Anda berhasil masuk'); 
                window.location.href='dashboardAdmin.php';</script>";
        } elseif ($row['role']=='Dekan') {
            echo"<script>alert('Anda berhasil masuk'); 
                window.location.href='dashboardDekan.php';</script>";
        } elseif ($row['role']=='Operator') {
            echo"<script>alert('Anda berhasil masuk'); 
                window.location.href='dashboardOperator.php';</script>";
        } else {
            $_SESSION['nim'] = $row['id'];
            echo"<script>alert('Anda berhasil masuk'); 
                window.location.href='dashboardMhs.php';</script>";
        }
      
    }
    } else {
     echo "0 results";
    }
    
    // If result matched $myusername and $mypassword, table row must be 1 row
    var_dump($result);
    echo $count;
    if($count == 1) {
    //    session_register("myusername");
    //    $_SESSION['username'] = $myusername;
       
    //    header("location: index.php");
        // echo $result['id'];
       echo "selamat";
        $_SESSION['username'] = $myusername;
        $_SESSION['password'] = $mypassword;
        // echo"<script>alert('Anda berhasil masuk'); 
        // window.location.href='dashboardAdmin.php';</script>";
    }
    // else {
    //    $error = "Your Login Name or Password is invalid";
    // }
    // var_dump($count);
    
 }


// $login = mysql_query($querylogin);

// var_dump($login);

// echo "mantap ".$_POST['password'];
// echo $querylogin;

?>