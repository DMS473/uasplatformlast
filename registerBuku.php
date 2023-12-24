
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
if($conn){
  echo "koneksi berhasil unpam";
}

$mysql = "INSERT INTO books (id, judul, image, stock) VALUES ('"
    . $_POST['id'] ."','"
    . $_POST['judul'] ."','"
    . $_POST['image'] ."','"
    . $_POST['stock']. "');";

    if ($conn->query($mysql) === TRUE) {
        echo "<script>
        alert('Selamat, anda telah terdaftar');
        window.location.href='dashboardAdmin.php';
        </script>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

?>