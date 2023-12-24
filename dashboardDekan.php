<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Perpus UIN</title>
    <style>
/* PENGATURAN HEADER*/
#header {
    padding: 5px;
    height: 75px;
    border: #0000ff dashed 1px;
    background-color: #99ccff;
    /* display: inline-block; */
}

#header h1 {
    display: block;
    width: 815px;
    height: 110px;
    padding: 5px;
    margin-left: 120px;
    color: #ffffff;
    font-family: 'trebuchet ms', Arial, Helvetica, sans-serif;
}

/*PENGATURAN SIDE PANEL*/
#sidebar{
    border: #0000ff dashed 1px;
    margin-top: 10px;
    width: 200px;
    float: left;
    background-color: #99ccff;
}

#sidebar h3{
    color: #993300;
    padding-left: 10px;
    font-family: 'trebuchet ms', Arial, Helvetica, sans-serif;
}

/*PENGATURAN MENU NAVIGASI*/
ul#navmenu{
    margin: 0;
    padding: 0;
    list-style-type: none;
}

ul#navmenu li{
    margin-bottom: 5px;
}
ul#navmenu a{
    display: block;
    width: auto;
    height: auto;
    background-color: #003366;
    padding: 5px 5px 3px;
    text-align: left;
    text-decoration: none;
    color: #eecc11 ;
    cursor: pointer;

}

ul#navmenu a:hover, ul#navmenu a:focus, ul#navmenu a:active{
    background-color: #333;
    color: #fff;
}

ul#navmenu a.selected, ul#navmenu a.selected:hover, ul#navmenu a.selected:focus, ul#navmenu a.selected:active{
    background-color: #386088;
    color: #fff;
}

ul#navmenu a.selected{
    text-align: right;
    cursor: default;
}

/*PENGATURAN CONTENT*/
#page{
    border: #0000ff dashed 1px;
    margin-top: 10px;
    margin-left: auto;
    padding: 10px;
    width: 855px;
    float: right;
}

#page h2{
color: #993300;
font-family: 'trebuchet ms', Arial, Helvetica, sans-serif;
}
img{
    border: none;
}
#clear{
    clear: both;
}

/*PENGATURAN FOOTER*/
#footer{
    border: #0000ff dashed 1px;
    margin-top: 10px;
    text-align: center;
    background-color: #99ccff;
}
.img-center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 15%;
}
    </style>



</head>
<body>
<div class="container">
        <div id="header">
            <h1 style="color: #003399;" align="center">DASHBOARD DEKAN PERPUS UIN</h1>
               
        </div>
    <div id="sidebar">
        <h3>navigasi</h3>
        <ul id="navmenu">
            <li><a href="dashboardDekan.php" class="selected">Home</a></li>
            <li><a href="?module=home#pos">Buku yang tersedia</a></li>
            <li><a href="?module=bukuDipinjam#pos">Buku yang dipinjam</a></li>
            <!-- <li><a href="?module=insertBuku#pos">Insert Buku</a></li> -->
            <!-- <li><a href="?module=viewUser#pos">view User</a></li>
            <li><a href="?module=searchUser#pos">search User</a></li>
            <li><a href="?module=insertUser#pos">Insert User</a></li>
            <li><a href="?module=viewPinjam#pos">View Pinjam</a></li>
            <li><a href="?module=insertPinjam#pos">Insert Pinjam</a></li> -->
        </ul>
        <br>
        <!-- <div id="login">
           
            <form action="?module=loginproc#pos" method="post">
                Username
                <input type="text" name="username" size="15" />
                Password
                <input type="password" name="password" size="15" />
                <input type="submit" value="Login" />
            </form> 
            
        </div> -->
    </div>
        <div id="page">
            <?php if(isset($_GET['module']))
                // str_replace("../","",$_GET['module']);
                include "konten/$_GET[module].php";
            else
                include "konten/homeDekan.php";?>
                
        </div>
        <div id="clear"></div>

        <div id="footer">
            <p>&copy; 2010</p>
        </div>
</div>












    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>