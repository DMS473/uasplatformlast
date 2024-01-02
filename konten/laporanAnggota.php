<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Membuat Laporan PDF Dengan PHP dan MySQLi</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<body>
	<div class="container">
		<center><h2>DAFTAR ANGGOTA</h2></center>
		<br>
		<div class="float-right">
			<a href="laporan_anggota.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> &nbsp PRINT</a>
			<br>
			<br>
		</div>
        <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Depan</th>
        <th scope="col">Nama Belakang</th>
        <th scope="col">Username</th>
        <th scope="col">Role</th>
        <th scope="col">Jenis Kelamin</th>
      </tr>
    </thead>
 
	
			<tbody>
				<?php
				$id=1;
				$data = mysqli_query($conn,"SELECT  * FROM users ");

				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $id++; ?></td>
						<td><?php echo $d['namadep'] ?></td>
                        <td><?php echo $d['namabel'] ?></td>
						<td><?php echo $d['username'] ?></td>						
						<td><?php echo $d['role'] ?></td>	
                        <td><?php echo $d['jk'] ?></td>										
					</tr>
					<?php
				}
				?>				
			</tbody>
		</table>
	</div>
	
	
</body>
</html>