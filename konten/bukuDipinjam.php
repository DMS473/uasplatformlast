<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Lihat Data</title>
    <style>
canvas {
  height: 500px !important;
  width: 500px !important;
  /* text-align: center !important;  */
  margin: auto !important;
}

</style>
  </head>
  <body>
    <!-- <h2>Daftar Pinjaman</h2> <br> -->
     

    <?php
//ambil file koneksi
include "koneksi.php";

// masukan koneksi DB
$select = mysqli_query($conn, "select sum(hitung) FROM pinjams where isFinished=0");

// $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($select);

$select1 = mysqli_query($conn, "select sum(stock) FROM books");

    $result1 = mysqli_fetch_assoc($select1);

    $total = $result['sum(hitung)'] + $result1['sum(stock)'];

$select2 = mysqli_query($conn, "select sum(biaya) FROM pinjams");

    $result2 = mysqli_fetch_assoc($select2);

?>
  
  <!-- <h2>Total Buku yang sedang dipinjam <?php echo $result['sum(hitung)']; ?></h2>
  <h2>Total Buku di perpustakaan <?php echo $result1['sum(stock)']; ?></h2> -->
  <div align="center"><h1>Grafik Alokasi Buku Perpustakaan</h2>
  <h3>Total Buku secara keseluruhan <?php echo $total; ?></h3>
  
  </div>
  <!-- <div width="5" height="5"> -->
  <canvas id="piechart"></canvas>
<!-- </div> -->
<br>
<h3>Total Pendapatan Rp. <?php echo $result2['sum(biaya)']; ?></h3>
      <!-- <a href="index.php"><---- Kembali ke Index</a> -->

    <script type="text/javascript">
        var ctx = document.getElementById("piechart").getContext("2d");
        var data = {
          labels: ['dipinjam', 'tersedia'],
          datasets: [
            {
              label: "Sales Comparison",
              data: [<?php 
                  echo $result['sum(hitung)'];
              ?>,
              <?php 
                  echo $result1['sum(stock)'];
              ?>
            ],
              backgroundColor: [
                '#0066ff',
                '#ffcc66'
              ]
            }
          ]
        };

        var piechart = new Chart(ctx, {
          type: 'pie',
          data: data,
          options: {responsive: true}
        })


    </script>

  </body>
</html>