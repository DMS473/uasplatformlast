<!-- <?php 
// session_start();
// if(!isset($_SESSION['username']))

?> -->
<?php
   include('session.php');
?>
<!-- Selamat datang <?php echo '<strong>'.$_SESSION['username'].'</strong>';  ?> 
<a href="index.php?module=logintry#pos">Keluar<a/></marquee> -->

<h1>Selamat datang <?php echo '<strong>'.$_SESSION['username'].'</strong>';  ?></h1> 
<h2><a href = "logout2.php">Keluar</a></h2>
