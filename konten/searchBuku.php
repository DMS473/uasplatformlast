<html>

<head>

    <title>Member Page</title>
</head>
<style>






</style>

<body>


    <div class="page">
        <form method="GET">
            <div class="row g-3 align-items-center">
                <div class="input-group col-auto">
                    <input type="search" id="inputsearch" class="form-control" placeholder="Masukan Judul Buku" name="username" value="<?php if (isset($_GET['username'])) {
                                                                                                                                        } ?>" placeholder="Masukkan Judul Buku" autocomplete="off">
                   <button type="submit" name="module" value="searchBuku"  class="btn btn-success btn-sm">Search</button> 
                </div>
            </div>

        </form>
        <h2>HASIL PENCARIAN BUKU</h2><br />
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Tols</th>
                </tr>
            </thead>

            <tbody>
                <?php include "koneksi.php";
                if (isset($_GET['username'])) {
                    $username = $_GET['username'];
                    $sql = "SELECT * FROM books WHERE judul like '%" . $username . "%'";
                    $id = 1;
                    $qCari = mysqli_query($conn, $sql);
                    while ($dataC = mysqli_fetch_array($qCari)) {
                        echo "<tr>";

                        echo "<td>" . $id++ . "</td>";
                        echo "<td>" . $dataC['judul'] . "</td>";
                        echo "<td>" . $dataC['stock'] . "</td>";
                        echo "<td>";
                        // echo "<a href='edit.php?id=" . $dataC['id'] . "'>Edit</a> | ";
                        echo "<a href='?id=" . $dataC["id"] . "&module=editBuku#pos'><button type='button' class='btn btn-warning btn-sm'>Edit</button></a> ";

                        echo "<a href='deleteBuku.php?id=" . $dataC['id'] . "'><button type='button' class='btn btn-danger btn-sm'>Hapus</button></a>";
                        echo "</td>";

                        echo "</tr>";
                    }
                } else {
                }


                ?>
            </tbody>
        </table>
        <br>
    </div>

</body>

</html>