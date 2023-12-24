<html>

<head>

    <title>Member Page</title>
</head>
<style>


</style>

<body>
    <div class="page">
        <form method="GET">
            <input type="text" name="username" value="<?php if (isset($_GET['username'])) {
                                                            echo $_GET['username'];
                                                        } ?>" placeholder="Masukkan Username" />
            <input type="submit" name="module" value="searchUser" />
        </form>
        <h2>HASIL PENCARIAN MEMBER</h2><br />
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

            <tbody>
                <?php include "koneksi.php";
                if (isset($_GET['username'])) {
                    $username = $_GET['username'];
                    $sql = "SELECT * FROM users WHERE username like '%" . $username . "%'";
                    $id = 1;
                    $qCari = mysqli_query($conn, $sql);
                    while ($dataC = mysqli_fetch_array($qCari)) {
                        echo "<tr>";

                        echo "<td>" . $id++ . "</td>";
                        echo "<td>" . $dataC['namadep'] . "</td>";
                        echo "<td>" . $dataC['namabel'] . "</td>";
                        echo "<td>" . $dataC['username'] . "</td>";
                        echo "<td>" . $dataC['jk'] . "</td>";
                        echo "<td>" . $dataC['role'] . "</td>";
                        echo "<td>";
                        // echo "<a href='edit.php?id=" . $dataC['id'] . "'>Edit</a> | ";
                        echo "<a href='?id=" . $dataC["id"] . "&module=edit#pos'><button type='button' class='btn btn-warning btn-sm'>Edit</button></a> ";

                        echo "<a href='delete.php?id=" . $dataC['id'] . "'><button type='button' class='btn btn-danger btn-sm'>Hapus</button></a>";
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