<html>

<head>
    
    <title>Member Page</title>
</head>
<style>
    

    table {
        width: 100%;
    }

    thead {
        background-color: #0000ff;
        color: white;
    }

   

  
</style>

<body>
    <div class="page mt-3">
    <form method="GET">
        <div class="form-row">
            <div class="col">
            <input class="form-control" type="text" name="username" value="<?php if(isset($_GET['username'])) { echo $_GET['username']; } ?>" placeholder="Masukkan Judul Buku" />
            </div>
            <div class="col">
            <input class="btn btn-primary" type="submit" name="module" value="search" />
            </div>
        </div>
    </form>
        <h2>HASIL PENCARIAN BUKU</h2><br />
         <div class="container">
              <div class="row">

            
                

<?php
//ambil file koneksi
include "koneksi.php";

// masukan koneksi DB
$username = $_GET['username'];
$sql = "SELECT * FROM books WHERE judul like '%" . $username . "%'";
$select = mysqli_query($conn, $sql);
    
while ($buff = mysqli_fetch_array($select)) { ?>
    <div class="col-md-4 mb-5 ">
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
        </div>

</body>

</html>