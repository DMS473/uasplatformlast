<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Lihat Data</title>
  </head>
  <body>
    <h2>Daftar Pinjaman</h2> <br>
     

    <?php
//ambil file koneksi
include "koneksi.php";

// masukan koneksi DB
$select = mysqli_query($conn, "select sum(hitung) FROM pinjams where isFinished=0");

// $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($select);

?>

  <h2>Total Buku yang sedang dipinjam <?php echo $result['sum(hitung)']; ?></h2>

<br>
      <a href="index.php"><---- Kembali ke Index</a>
  </body>
</html>