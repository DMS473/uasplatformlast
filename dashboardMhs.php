<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Perpus UIN</title>
</head>
<body>
    
        <!-- <h1>Perpus UIN</h1> -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <!-- <a class="navbar-brand" href="#"> -->
                 <img src="images/UIN1.jpg" width="60" height="60" alt="">
              <!-- </a>     -->
            
            <!-- <a class="navbar-brand" href="#">Hidden brand</a> -->
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="dashboardMhs.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="?module=search#">Search</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="?module=myHistory#">History</a>
              </li>   
              <li class="nav-item">
                <a class="nav-link" href="index.php">Logout</a>
              </li>
            </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
          </div>
</div>
        </nav>

        <div class="container">
            <?php if(isset($_GET['module']))
                // str_replace("../","",$_GET['module']);
                include "konten/$_GET[module].php";
            else
                include "konten/welcomeMhs.php";?>
                
        </div>

        <div id="clear"></div>

        <div id="footer" class="container">
            <p>&copy; 2023</p>
        </div>



    </div>












    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>