<?php  
    include "koneksi.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM users where id = ". $_GET["id"]. ";";
    // $query = "SELECT * FROM register";
    // echo $query;
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);
    // var_dump($result);


    // echo "text : " . $_GET['id'];
?>


<!-- ini halaman home -->
<form action="updateUser.php" method="post">
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
            <td width="163">Nama depan :</td>
            <td width="317"><input type="text" name="namadep" value="<?php echo $result['namadep']; ?>" /></td>
        </tr>
        <tr>
            <td>Nama Belakang :</td>
            <td><input type="text" name="namabel" value="<?php echo $result['namabel']; ?>" /></td>
        </tr>
        <tr>
            <td>Username :</td>
            <td><input type="text" name="username" value="<?php echo $result['username']; ?>"/></td>
        </tr>
        <tr>
            <td>Password :</td>
            <td><input type="password" name="password" value="<?php echo $result['password']; ?>"/></td>
        </tr>
        <!-- <tr>
            <td>Usia :</td>
            <td><input type="text" name="usia" value="<?php echo $result['usia']; ?>"/></td>
        </tr> -->
        <tr>
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
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
            <input type="radio" id="wanita" name="jk" value="wanita">
            <label for="wanita">Wanita</label><br>
            </td>
        </tr>
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