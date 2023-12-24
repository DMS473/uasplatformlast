<?php  
    include "koneksi.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM books where id = ". $_GET["id"]. ";";
    // $query = "SELECT * FROM register";
    // echo $query;
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);
    // var_dump($result);


    // echo "text : " . $_GET['id'];
?>


<!-- ini halaman home -->
<form action="updateBuku.php" method="post">
    <p>&nbsp;</p>
    <div align="center" class="style1">
        <p>EDIT</p>
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
            <td width="163">Judul :</td>
            <td width="317"><input type="text" name="judul" value="<?php echo $result['judul']; ?>" readonly/></td>
        </tr>
        <tr>
            <td>Kode :</td>
            <td><input type="text" name="id" value="<?php echo $result['id']; ?>" readonly/></td>
        </tr>
        <tr>
            <td>Image :</td>
            <td><input type="text" name="image" value="<?php echo $result['image']; ?>"/></td>
        </tr>
        <tr>
            <td>Stock :</td>
            <td><input type="text" name="stock" value="<?php echo $result['stock']; ?>"/></td>
        </tr>
        <!-- <tr>
            <td>Usia :</td>
            <td><input type="text" name="usia" value="<?php echo $result['usia']; ?>"/></td>
        </tr> -->
        <!-- <tr>
            <td>Role :</td>
            <td>
            <input type="radio" id="admin" name="role" value="Admin">
            <label for="admin">Admin</label><br>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
            <input type="radio" id="dekan" name="role" value="Dekan">
            <label for="dekan">Dekan</label><br>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
            <input type="radio" id="operator" name="role" value="Operator">
            <label for="operator">Operator</label><br>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
            <input type="radio" id="mahasiswa" name="role" value="Mahasiswa">
            <label for="mahasiswa">Mahasiswa</label><br>
            </td>
        </tr>
        <tr>
            <td>Usia :</td>
            <td><input type="text" name="usia" value="<?php echo $result['usia']; ?>"/></td>
        </tr>
        <tr>
            <td>Jenis Kelamin :</td>
            <td>
            <input type="radio" id="pria" name="jk" value="pria">
            <label for="pria">Pria</label><br>
            </td>
        </tr> -->
       
        <!-- <tr>
            <td>Nomor Telepon :</td>
            <td><input type="text" name="notel" value="<?php echo $result['notel']; ?>"/></td>
        </tr>
        <tr>
            <!-- <td>id :</td> -->
            <td><input type="hidden" name="id" value="<?php echo $result['id']; ?>"/></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="update" /></td>
        </tr>

    <?php
        // }
    ?>
    </table>
</form>