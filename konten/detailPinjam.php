<?php  
    include "koneksi.php";
    $id1 = $_GET['id'];
    $query = "select users.namadep, users.id, books.judul, books.id, pinjams.start, pinjams.isFinished from users join pinjams on users.id = pinjams.user_id join books on books.id = pinjams.book_id where pinjams.id = ". $_GET["id"]. ";";
    
    //  = 6;
    // $query = "SELECT * FROM register";
    // echo $query;
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);
    // var_dump($result);
    // $timenow = time();
    $status = $result['isFinished'];
    if ($status == 1) {
        $status2 = "selesai";
    } else {
        $status2 = "belum selesai";
    }

    $haripinjam = $result['start'];
    $f=strtotime($haripinjam);
    $d2=ceil((time()-$f)/60/60/24);
    $biaya=0;
    if($d2>4 && $d2<100){
        $biaya= ($d2-4)*500;
    } else {
        $biaya= 0;
    }

    // echo "text : " . $_GET['id'];
?>


<!-- ini halaman home -->
<form action="selesaiPinjam.php" method="post">
    <p>&nbsp;</p>
    <div align="center" class="style1">
        <p>DETAIL PINJAM</p>
    </div>
    <!-- cari Member
    <from action="module/cari.php" method="get"> 
    <input type="text" name="username" placeholder="ketikan username" />
    <input type="submit" value="cari" />
    </form><br /> -->

    <table width="496" border="0" align="center">
    <?php
        // while($result = mysqli_fetch_assoc($sql)){
    ?>
        <tr>
            <td width="163">Nama Peminjam :</td>
            <td width="317"><input type="text" name="namadep" value="<?php echo $result['namadep']; ?>" readonly/></td>
        </tr>
        <tr>
            <td>NIM Peminjam :</td>
            <td><input type="text" name="namabel" value="<?php echo $result['id']; ?>" readonly/></td>
        </tr>
        <tr>
            <td>Judul Buku yang dipinjam :</td>
            <td><input type="text" name="username" value="<?php echo $result['judul']; ?>" readonly/></td>
        </tr>
        <tr>
            <td>Kode buku :</td>
            <td><input type="text" name="password" value="<?php echo $result['id']; ?>" readonly/></td>
        </tr>
       
        <tr>
            <td>Tanggal Meminjam :</td>
            <td><input type="text" name="usia" value="<?php echo $result['start']; ?>" readonly/></td>
        </tr>
        <tr>
            <td>Denda :</td>
            <td><input type="text" name="biaya1" value="Rp. <?php echo $biaya; ?>" readonly/></td>
        </tr>
        <tr>
            <td>Status :</td>
            <td><input type="text" name="usia" value="<?php echo $status2; ?>" readonly/></td>
        </tr>
        <!-- <tr>
            <td>Jenis Kelamin :</td>
            <td>
            <input type="radio" id="pria" name="jk" value="pria">
            <label for="pria">Pria</label><br>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
            <input type="radio" id="wanita" name="jk" value="wanita">
            <label for="wanita">Wanita</label><br>
            </td>
        </tr> -->
        <!-- <tr>
            <td>Nomor Telepon :</td>
            <td><input type="text" name="notel" value="<?php echo $result['notel']; ?>"/></td>
        </tr>
        <tr>
            <!-- <td>id :</td> -->
            <td><input type="hidden" name="biaya" value="<?php echo $biaya; ?>"/></td>
            <td><input type="hidden" name="id" value="<?php echo $id1; ?>"/></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <?php 
                if($status==1){
                    echo "<td><input type='submit' value='lunas' disabled/></td>";
                } else {
                    echo "<td><input type='submit' value='lunas' /></td>";
                };

            ?>
            <!-- <td><input type="submit" value="lunas" /></td> -->
        </tr>

    <?php
        // }
    ?>
    </table>
</form>