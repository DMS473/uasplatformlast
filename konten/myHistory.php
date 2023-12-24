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
      <table border="1">
          <tr align="center">
            <td width="31">id</td>
            <td width="85">user_id</td>
            <td width="50">book_id</td>
            <td width="82">start</td>
            <td width="82">selesai</td>
            <td width="70">biaya</td>
            <td width="41">stop</td>
            <!-- <td width="41">usia</td>
            <td width="50">jk</td> -->
            <!-- <td width="100">email</td>
            <td width="100">notel</td> -->
            <!-- <td colspan="2" width="86">aksi</td> -->
          </tr>
        </table>

    <?php
//ambil file koneksi
include "koneksi.php";

// masukan koneksi DB
$select = mysqli_query($conn, "select * FROM pinjams where user_id = ".$_SESSION['nim']);


while ($buff = mysqli_fetch_array($select)) { ?>

      <table border="1">
        <tr align="center">
          <td width="31"><?php echo $buff['id']; ?></td>
          <td width="85"><?php echo $buff['user_id']; ?></td>
          <td width="50"><?php echo $buff['book_id']; ?></td>
          <td width="50"><?php echo $buff['start']; ?></td>
          <td width="82"><?php echo $buff['isFinished']; ?></td>
          <td width="70"><?php echo $buff['biaya']; ?></td>
          <td width="41"><?php echo $buff['stop']; ?></td>
          <!-- <td width="41"><?php echo $buff['usia']; ?></td>
          <td width="50"><?php echo $buff['jk']; ?></td> -->
          <!-- <td width="100"><?php echo $buff['email']; ?></td>
          <td width="100"><?php echo $buff['notel']; ?></td> -->
          <!-- <td width="40"><a href="?id=<?php echo $buff['id']; ?>&module=detailPinjam#pos">Detail</a></td>
          <td width="40"><a href="delete.php?id=<?php echo $buff['id']; ?>">hapus</a></td> -->
        </tr>
      </table>

  <?php
}
;
?>

<br>
      <a href="index.php"><---- Kembali ke Index</a>
  </body>
</html>