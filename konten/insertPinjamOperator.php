<!-- <?php
    
    include "koneksi.php";

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" scr="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" scr="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" scr="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
    <script src="https://raw.githack.com/jeromeetienne/AR.js/2.2.2/aframe/build/aframe-ar.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <video id="preview" width="100%"></video>
            </div>
        </div>
        <label>SCAN QR CODE</label>
        <!-- <input type="text" name="text" id="text" readonyy="" placeholder="scan qrcode" class="form-control"> -->
        <form action="registerPinjamOperator.php" method="post">
    <p>&nbsp;</p>
    <div align="" class="style1">
        <!-- ini halaman home -->
        <p>REGISTER PINJAM</p>
    </div>
    <!-- cari Member
    <from action="module/cari.php" method="get"> 
    <input type="text" name="username" placeholder="ketikan username" />
    <input type="submit" value="cari" />
    </form><br /> -->

    <table width="496" border="0" align="">
        <tr>
            <td width="163">Kode buku:</td>
            <td width="317"><input type="text" name="book_id" id="text" readonyy="" placeholder="scan qrcode"/></td>
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
        <!-- <a-scene>
        <a-entity camera></a-entity>
        </a-scene> -->
    </div>

    
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script>
        
        // script 1
        // let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
        // Instascan.Camera.getCameras().then(function(cameras){
        //     if(cameras.length > 0){
        //         scanner.start(cameras[0]);
        //     } else {
        //         alert('No cameras');
        //     }
        // }).catch(function(e){
        //     console.error(e);
        // });

        // script 2
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        console.log(content);
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 1) {
          scanner.start(cameras[1]);
        } else if (cameras.length > 0) {
            scanner.start(cameras[0]);
        }
        else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });

        // script 3
        // Instascan QR scanner
// let scanner = new Instascan.Scanner(
//   {
//     video: document.getElementById('preview')
//   }
// );
// scanner.addListener('scan', function(content) {
//   alert('Content: ' + content);
//   window.open(content, "_blank");
// });
//                 //Detect user's cameras
//                 Instascan.Camera.getCameras().then(function (cameras) {
//             //If a camera is detected
//             if (cameras.length > 0) {
//                 //If the user has a rear/back camera
//                 if (cameras[1]) {
//                     //use that by default
//                     scanner.start(cameras[1]);
//                 } else {
//                     //else use front camera
//                     scanner.start(cameras[0]);
//                 }
//             } else {
//                 //if no cameras are detected give error
//                 console.error('No cameras found.');
//             }
//         }).catch(function (e) {
//             console.error(e);
//         });  
        


        scanner.addListener('scan',function(c){
            document.getElementById('text').value=c;
        });

    </script>    

</body>