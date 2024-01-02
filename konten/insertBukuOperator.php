<!-- <?php
    
    include "koneksi.php";

?> -->

<!-- ini halaman home -->
<form action="registerBukuOperator.php" method="post">
    <p>&nbsp;</p>
    <div align="center" class="style1">
        <!-- ini halaman home -->
        <p>REGISTER BUKU</p>
    </div>
    <!-- cari Member
    <from action="module/cari.php" method="get"> 
    <input type="text" name="username" placeholder="ketikan username" />
    <input type="submit" value="cari" />
    </form><br /> -->

    <table width="496" border="0" align="center">
        <tr>
            <td width="163">Judul:</td>
            <td width="317"><input type="text" name="judul" /></td>
        </tr>
        <tr>
            <td>Kode:</td>
            <td><input type="text" name="id" /></td>
        </tr>
        <!-- <tr>
            <td>Tahun Terbit:</td>
            <td><input type="text" name="tahun_terbit" /></td>
        </tr> -->
        <tr>
            <td>Image:</td>
            <td><input type="text" name="image" /></td>
        </tr>
        <tr>
            <td>Stock:</td>
            <td><input type="text" name="stock" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="input" /></td>
        </tr>
    </table>
</form>