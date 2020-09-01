<?php
require "config/koneksi.php";
$mahasiswa = query("SELECT * FROM tb_mhs ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Page Title</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">

		<?php 
		if(isset($_GET['pesan'])){
			$pesan = $_GET['pesan'];
			if($pesan == "input"){
				echo "Data berhasil di input.";
			}else if($pesan == "update"){
				echo "Data berhasil di update.";
			}else if($pesan == "hapus"){
				echo "Data berhasil di hapus.";
			}
		}
		?>
		<br/>
		<a class="tombol" href="input.php">+ Tambah Data Baru</a>
		<h3>Data user</h3>
		<table class="table table-borderless">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">NPM</th>
					<th scope="col">KELAS</th>
					<th colspan="3" scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$nomor = 1;
				foreach ($mahasiswa as $m) : ?>
					<tr>
						<td><?php echo $nomor++; ?></td>
						<td><?php echo $m['nama']; ?></td>
						<td><?php echo $m['npm']; ?></td>
						<td><?php echo $m['email']; ?></td>
						<td>
							<a class="detail" href="detail.php?id=<?= $m['id']; ?>">Detail</a> |
							<a class="edit" href="edit.php?id=<?= $m['id']; ?>">Edit</a> |
							<a class="hapus" href="hapus.php?id=<?= $m['id']; ?>">Hapus</a>					
						</td>
					</tr>
				<?php endforeach;  ?>
			</tbody>
		</table>
	</div>
</body>
</html>