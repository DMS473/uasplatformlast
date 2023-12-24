
<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "unpam_db";

// Create connection
$conn =  mysqli_connect('localhost', 'root', 'admin', 'unpam_db');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$mysql = "INSERT INTO users (namadep, namabel, username, password, usia, jk, ttl, email, notel) VALUES ('"
    . $_POST['namadep'] ."','"
    . $_POST['namabel'] ."','"
    . $_POST['username'] ."','"
    . $_POST['password'] ."','"
    . $_POST['usia'] ."','"
    . $_POST['jk'] ."','"
    . $_POST['ttl']."','"
    . $_POST['email']."','"
    . $_POST['notel']. "');";

    if ($conn->query($mysql) === TRUE) {
        echo "<script>
        alert('Selamat, anda telah terdaftar');
        window.location.href='index.php';
        </script>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

?>