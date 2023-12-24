
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

$mysql = "INSERT INTO users (id, namadep, namabel, username, password, role, usia, jk) VALUES ('"
    . $_POST['id'] ."','"
    . $_POST['namadep'] ."','"
    . $_POST['namabel'] ."','"
    . $_POST['username'] ."','"
    . $_POST['password'] ."','"
    . $_POST['role'] ."','"
    . $_POST['usia'] ."','"
    . $_POST['jk']. "');";

    if ($conn->query($mysql) === TRUE) {
        echo "<script>
        alert('Selamat, anda telah terdaftar');
        window.location.href='dashboardAdmin.php';
        </script>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

?>