
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
// $time2=time();
$t=time();
$d=date("Y-m-d",$t);

$mysql = "UPDATE pinjams SET isFinished = 1
     , stop = '" .$d.
     "' , biaya = '" .$_POST['biaya'].
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