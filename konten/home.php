<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Lihat Data</title>
  </head>
  <body>
    <h2 class="text-primary">Daftar Buku Yang Tersedia</h2> <br>
      

    <div class="container">
        <div class="row">
     

    <?php
//ambil file koneksi
include "koneksi.php";

// masukan koneksi DB
$select = mysqli_query($conn, "select * FROM books where stock > 0");

    
while ($buff = mysqli_fetch_array($select)) { ?>
    <div class="col-md-4 mb-5">
    <div class="card text-white bg-info mb-3" style="width: 19rem;">
        <img class="card-img-top" src="<?php echo $buff['image']; ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $buff['judul']; ?></h5>
            <p class="card-text"><?php echo $buff['id']; ?></p>
            <!-- <a href="#" class="btn btn-primary">Pinjam</a> -->
        </div>
    </div>
    </div>
    

  <?php
}
;
?>
     </div>
     </div>
<br>
      <a href="index.php"><---- Kembali ke Index</a>
  </body>
</html>