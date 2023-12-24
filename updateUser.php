
<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "uas_platform";

// Create connection
$conn =  mysqli_connect('localhost', 'root', 'admin', 'uas_platform');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$mysql = "UPDATE users SET namadep = '".$_POST['namadep'].
    "' , namabel = '" .$_POST['namabel'].
    "' , username = '" .$_POST['username'].
    "' , password = '" .$_POST['password'].
    "' , role = '" .$_POST['role'].
    "' , usia = '" .$_POST['usia'].
    "' , jk = '" .$_POST['jk'].
    // "' , email = '" .$_POST['email'].
    // "' , notel = '" .$_POST['notel'].
    "' WHERE id = " .$_POST['id'].
    ";";

    echo $mysql;
    if ($conn->query($mysql) === TRUE) {
        echo "<script>
        alert('Selamat, Data anda telah terupdate');
        window.location.href='dashboardAdmin.php';
        </script>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

?>