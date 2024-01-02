<!DOCTYPE html>
<html>

<head>
    <title>PRINT</title>
</head>

<body>

    <center>

        <h2>DATA LAPORAN PINJAMAN</h2>

    </center>

    <?php
    include 'koneksi.php';
    ?>

    <table border="1" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">User Id</th>
                <th scope="col">Id Book</th>
                <th scope="col">Start</th>
                <th scope="col">Selesai</th>
                <th scope="col">Biaya</th>
                <th scope="col">Stop</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $id = 1;
            $data = mysqli_query($conn, "SELECT  * FROM pinjams ");

            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $id++; ?></td>
                    <td><?php echo $d['user_id'] ?></td>
                    <td><?php echo $d['book_id'] ?></td>
                    <td><?php echo $d['start'] ?></td>
                    <td><?php echo $d['isFinished'] ?></td>
                    <td><?php echo $d['biaya'] ?></td>
                    <td><?php echo $d['stop'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <script>
        window.print();
    </script>

</body>

</html>