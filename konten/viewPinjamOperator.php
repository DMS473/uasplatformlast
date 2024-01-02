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
        <th scope="col">User Id</th>
        <th scope="col">Id Book</th>
        <th scope="col">Start</th>
        <th scope="col">Selesai</th>
        <th scope="col">Biaya</th>
        <th scope="col">Stop</th>
        <th>Tols</td>
      </tr>
    </thead>


    <?php
    //ambil file koneksi
    include "koneksi.php";

    // masukan koneksi DB
    $select = mysqli_query($conn, "select * FROM pinjams");


    while ($buff = mysqli_fetch_array($select)) { ?>


      <tr>
        <td><?php echo $buff['id']; ?></td>
        <td><?php echo $buff['user_id']; ?></td>
        <td><?php echo $buff['book_id']; ?></td>
        <td><?php echo $buff['start']; ?></td>
        <td><?php echo $buff['isFinished']; ?></td>
        <td><?php echo $buff['biaya']; ?></td>
        <td><?php echo $buff['stop']; ?></td>
        <!-- <td ><?php echo $buff['usia']; ?></td>
          <td ><?php echo $buff['jk']; ?></td> -->
        <!-- <td "><?php echo $buff['email']; ?></td>
          <td "><?php echo $buff['notel']; ?></td> -->
        <td><a href="?id=<?php echo $buff['id']; ?>&module=detailPinjamOperator#pos"><button type="button" class="btn btn-success btn-sm">Detail</button></a>
          <a href="deletePinjamOperator.php?id=<?php echo $buff['id']; ?>"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
        </td>
      </tr>


    <?php
    };
    ?>
  </table>
  <br>
  <!-- <a href="index.php"><---- Kembali ke Index</a> -->
</body>

</html>