<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Lihat Data</title>
</head>

<body>
  <h2>Daftar Pinjaman</h2> <br>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">NIM</th>
        <th scope="col">Kode Buku</th>
        <th scope="col">Start</th>
        <th scope="col">Selesai</th>
        <th scope="col">Biaya</th>
        <th scope="col">Stop</th>

      </tr>
    </thead>

    <?php
    //ambil file koneksi
    include "koneksi.php";

    // masukan koneksi DB
    $select = mysqli_query($conn, "select * FROM pinjams where user_id = " . $_SESSION['nim']);

    $id = 1;
    while ($buff = mysqli_fetch_array($select)) { ?>

      <tbody>
        <tr>
          <td><?php echo $id; ?></td>
          <td><?php echo $buff['user_id']; ?></td>
          <td><?php echo $buff['book_id']; ?></td>
          <td><?php echo $buff['start']; ?></td>
          <td><?php echo $buff['isFinished']; ?></td>
          <td><?php echo $buff['biaya']; ?></td>
          <td><?php echo $buff['stop']; ?></td>

        </tr>
      </tbody>
  
      <?php $id++;  ?>
<?php
};
?>
</table>

<br>
<!-- <a href="index.php"><---- Kembali ke Index</a> -->
</body>

</html>


