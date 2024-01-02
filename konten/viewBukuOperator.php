<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Lihat Data</title>
</head>

<body>
  <h2>Daftar Buku</h2> <br>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Stock</th>
        <th scope="col">Tols</th>
      </tr>
    </thead>


    <?php
    //ambil file koneksi
    include "koneksi.php";

    // masukan koneksi DB
    $select = mysqli_query($conn, "SELECT * FROM books ORDER BY id DESC");
    $id = 1;

    while ($buff = mysqli_fetch_array($select)) : ?>



      <tbody>
        <tr>
          <td><?php echo $id; ?></td>
          <td><?php echo $buff['judul']; ?></td>
          <td><?php echo $buff['stock']; ?></td>
          <td><a href="?id=<?php echo $buff['id']; ?>&module=editBukuOperator#pos"><button type="button" class="btn btn-warning btn-sm" >Edit</button></a>
            <a href="deleteBukuOperator.php?id=<?php echo $buff['id']; ?>"><button type="button" class="btn btn-danger btn-sm">Hapus</button>
            </a>
          </td>
      <?php $id++;  ?>
    <?php endwhile; ?>
  </table>
  <br>
  <!-- <a href="index.php"><---- Kembali ke Index</a> -->
</body>

</html>