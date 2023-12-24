<!-- <?php
    
    include "koneksi.php";

?> -->

<!-- ini halaman home -->
<form action="registerUser.php" method="post">
    <p>&nbsp;</p>
    <div align="center" class="style1">
        <!-- ini halaman home -->
        <p>REGISTER USER</p>
    </div>
    <!-- cari Member
    <from action="module/cari.php" method="get"> 
    <input type="text" name="username" placeholder="ketikan username" />
    <input type="submit" value="cari" />
    </form><br /> -->

    <table width="496" border="0" align="center">
        <tr>
            <td width="163">ID / NIM :</td>
            <td width="317"><input type="text" name="id" /></td>
        </tr>
        <tr>
            <td width="163">Nama depan :</td>
            <td width="317"><input type="text" name="namadep" /></td>
        </tr>
        <tr>
            <td>Nama Belakang :</td>
            <td><input type="text" name="namabel" /></td>
        </tr>
        <tr>
            <td>Username :</td>
            <td><input type="text" name="username" /></td>
        </tr>
        <tr>
            <td>Password :</td>
            <td><input type="password" name="password" /></td>
        </tr>
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
            <td><input type="text" name="usia" /></td>
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
            <td>Tempat Lahir :</td>
            <td><input type="text" name="ttl" /></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="text" name="email" /></td>
        </tr>
        <tr>
            <td>Nomor Telepon :</td>
            <td><input type="text" name="notel" /></td>
        </tr> -->
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="input" /></td>
        </tr>
    </table>
</form>