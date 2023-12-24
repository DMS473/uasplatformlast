<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Lihat Data</title>
</head>

<body>
  <h2>Daftar Member</h2> <br>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Depan</th>
        <th scope="col">Nama Belakang</th>
        <th scope="col">Username</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Role</th>
        <th>Tols</td>
      </tr>
    </thead>




    <?php
    //ambil file koneksi
    include "koneksi.php";

    // masukan koneksi DB
    $select = mysqli_query($conn, "select * FROM users");

    $id = 1;
    while ($buff = mysqli_fetch_array($select)) { ?>

      <tbody>
        <tr>
          <td><?php echo $id; ?></td>
          <td><?php echo $buff['namadep']; ?></td>
          <td><?php echo $buff['namabel']; ?></td>
          <td><?php echo $buff['username']; ?></td>
          <td><?php echo $buff['jk']; ?></td>
          <td><?php echo $buff['role']; ?></td>

          <td><a href="?id=<?php echo $buff['id']; ?>&module=editUser#pos"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
            <a href="deleteUser.php?id=<?php echo $buff['id']; ?>"><button type="button" class="btn btn-danger btn-sm">Hapus</button>
            </a>
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