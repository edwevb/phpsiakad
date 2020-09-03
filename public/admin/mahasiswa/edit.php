<?php
require_once("../layouts/header.php");

if (!isset($_GET['id']))
{
	header("location: index.php");
	exit;
}
$id = $_GET['id'];
$m = detail("SELECT * FROM tb_mhs WHERE id = $id");

if (isset($_POST['edit']))
{
	if (edit($_POST) > 0) 
	{
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data Berhasil Diperbaharui!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>';
	}else{
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Data Gagal Diperbaharui!</strong!!!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>';
	}
}
?>
<div class="container mt-5">
	<h3>FORM EDIT MAHASISWA</h3>
	<div class="text-right">
		<a class="btn btn-secondary px-5 my-3" href="index.php">Back to table</a>
	</div>
	<form action="" method="POST" enctype="mulitipart/form-data">
		<input type="hidden" name="id" value="<?= $m['id'] ;?>">
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="nama">Nama</label>
				<input type="text" name="nama" class="form-control" id="nama" value="<?= $m['nama'] ;?>">
			</div>
			<div class="col-md-6 form-group">
				<label for="npm">NPM</label>
				<input type="text" name="npm" class="form-control" id="npm" value="<?= $m['npm'] ;?>">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="kelas">Kelas</label>
				<input type="text" name="kelas" class="form-control" id="kelas" value="<?= $m['kelas'] ;?>">
			</div>
			<div class="col-md-6 form-group">
				<label for="jurusan">Jurusan</label>
				<input type="text" name="jurusan" class="form-control" id="jurusan" value="<?= $m['jurusan'] ;?>">
			</div>
			<div class="col-md-6 form-group">
				<label for="email">Email address</label>
				<input type="text" name="email" class="form-control" id="email" placeholder="johndoe@example.com" value="<?= $m['email'] ;?>">
			</div>
		</div>
		<button type="submit" name="edit" class="btn btn-primary px-5">Save changes</button>
	</form>
</div>
<?php require_once("../layouts/footer.php"); ?>