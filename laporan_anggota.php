<!DOCTYPE html>
<html>

<head>
	<title>PRINT</title>
</head>

<body>

	<center>

		<h2>DATA LAPORAN ANGGOTA</h2>

	</center>

	<?php
	include 'koneksi.php';
	?>

	<table border="1" style="width: 100%;">
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
			$id = 1;
			$data = mysqli_query($conn, "SELECT  * FROM users ");

			while ($d = mysqli_fetch_array($data)) {
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

	<script>
		window.print();
	</script>

</body>

</html>