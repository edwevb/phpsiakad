<?php 
	require "config/koneksi.php";
	if (isset($_POST['tambah'])){
		if (tambah($_POST) > 0) 
		{
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Ditambahkan</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>';
		}else{
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data Gagal Ditambahkan!!!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>';
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Page Title</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<h3>FORM INPUT MAHASISWA</h3>
		<form action="" method="POST" enctype="mulitipart/form-data">
			<div class="row">
				<div class="col-md-6 form-group">
					<label for="nama">Nama</label>
					<input type="text" name="nama" class="form-control" id="nama">
				</div>
				<div class="col-md-6 form-group">
					<label for="npm">NPM</label>
					<input type="text" name="npm" class="form-control" id="npm">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group">
					<label for="kelas">Kelas</label>
					<input type="text" name="kelas" class="form-control" id="kelas">
				</div>
				<div class="col-md-6 form-group">
					<label for="jurusan">Jurusan</label>
					<input type="text" name="jurusan" class="form-control" id="jurusan">
				</div>
				<div class="col-md-6 form-group">
					<label for="email">Email address</label>
					<input type="text" name="email" class="form-control" id="email" placeholder="johndoe@example.com">
				</div>
			</div>
			<button type="submit" name="tambah" class="btn btn-primary">Submit</button>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>