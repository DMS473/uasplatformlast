<!-- <?php
    
    include "koneksi.php";

?> -->

<!-- ini halaman home -->
<form action="registerPinjam.php" method="post">
    <p>&nbsp;</p>
    <div align="center" class="style1">
        <!-- ini halaman home -->
        <p>REGISTER PINJAM</p>
    </div>
    <!-- cari Member
    <from action="module/cari.php" method="get"> 
    <input type="text" name="username" placeholder="ketikan username" />
    <input type="submit" value="cari" />
    </form><br /> -->

    <table width="496" border="0" align="center">
        <tr>
            <td width="163">Kode buku:</td>
            <td width="317"><input type="text" name="book_id" /></td>
        </tr>
        <tr>
            <td>Nim Peminjam:</td>
            <td><input type="text" name="user_id" /></td>
        </tr>
        <!-- <tr>
            <td>Tahun Terbit:</td>
            <td><input type="text" name="tahun_terbit" /></td>
        </tr> -->
        <!-- <tr>
            <td>Start:</td>
            <td><input type="text" name="start" /></td>
        </tr> -->
        <!-- <tr>
            <td>Stock:</td>
            <td><input type="text" name="stock" /></td>
        </tr> -->
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="input" /></td>
        </tr>
    </table>
</form>