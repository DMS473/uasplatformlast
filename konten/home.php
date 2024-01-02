<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Lihat Data</title>
    <style>
      .gambar {
      width:640px;
      height:660px;
    }


    </style>
  </head>
  <body>
    <h2 class="text-primary">Daftar Buku Yang Tersedia</h2> <br>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <?php 
    include "koneksi.php";
    $select = mysqli_query($conn, "select * FROM books where stock > 0");
    
    while ($buff = mysqli_fetch_array($select)) { ?>
      <div class="carousel-item">
      <img class="d-block w-100 gambar" src="<?php echo $buff['image']; ?>" alt="Second slide">
    </div>
      
  
    <?php
  }
  ;
  ?>

    <div class="carousel-item active">
      <img class="d-block w-100 gambar" src="./images/UIN1.jpg" alt="First slide">
    </div>

    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div> -->
  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <br>
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
      <!-- <a href="index.php"><---- Kembali ke Index</a> -->
  </body>
</html>