
<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "uas_platform";
$id = $_GET['id'];
// Create connection
$conn =  mysqli_connect('localhost', 'root', 'admin', 'uas_platform');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$mysql = "DELETE FROM pinjams WHERE id = " .$id.";";

    echo $mysql;
    if ($conn->query($mysql) === TRUE) {
        echo "<script>
        alert('Selamat, Data telah Dihapus');
        window.location.href='dashboardOperator.php?module=viewPinjamOperator';
        </script>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

?>