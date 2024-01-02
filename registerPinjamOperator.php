
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

$idbuku = $_POST['book_id'];
    $query = "SELECT * FROM books where id = ". $idbuku. ";";
    // $query = "SELECT * FROM register";
    // echo $query;
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);
    $stockbuku = $result['stock']-1;
    // $stockbuku = 1;


$t=time();
$d=date("Y-m-d",$t);
// $f=strtotime($d);

$mysql = "INSERT INTO pinjams (user_id, book_id, start) VALUES ('"
    . $_POST['user_id'] ."','"
    // . $f ."','"
    . $_POST['book_id'] ."','"
    . $d. "');";

    if ($conn->query($mysql) === TRUE) {
        echo "<script>
        
        </script>";
      } else {

        echo "Error: " . $sql . "<br>" . $conn->error;
      }


      $mysql2 = "UPDATE books SET stock = '".$stockbuku.
    // "' , image = '" .$_POST['image'].
    // "' , username = '" .$_POST['username'].
    // "' , password = '" .$_POST['password'].
    // "' , role = '" .$_POST['role'].
    // "' , usia = '" .$_POST['usia'].
    // "' , jk = '" .$_POST['jk'].
    // "' , email = '" .$_POST['email'].
    // "' , notel = '" .$_POST['notel'].
    "' WHERE id = " .$_POST['book_id'].
    ";";

    echo $mysql2;
    if ($conn->query($mysql2) === TRUE) {
        echo "<script>
        alert('Selamat, Data anda telah terdaftar');
        window.location.href='dashboardOperator.php';
        </script>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

?>