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
	$edit = edit($_POST);
	if (!$edit['error']) 
	{
		header("location: index.php");
		exit;
	}
}
?>
<div class="container mt-5">
	<?php if (isset($edit['error'])) : ?>
		<div class="alert alert-danger alert-dismissible text-center fade show col-md-4	" role="alert">
			<strong><?= $edit['pesan'] ;?></strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif; ?>
	<?php if(empty($m)) { ?>
		<div class="text-center">
			<h1 class="text-danger font-weight-bolder">Data Mahasiswa tidak ada!</h1>
		</div>
	<?php }else{ ?>
		<h3>FORM EDIT ASISTEN</h3>
		<div class="text-right">
			<a class="btn btn-secondary px-5 my-3" href="index.php">Kembali</a>
		</div>
		<form action="" method="POST" enctype="mulitipart/form-data">
			<input type="hidden" name="id" value="<?= $m['id'] ;?>">
			<div class="row">
				<div class="col-md-6 form-group">
					<label for="nama">Nama</label>
					<input type="text" name="nama" class="form-control form-control-lg" id="nama" value="<?= $m['nama'] ;?>">
				</div>
				<div class="col-md-6 form-group">
					<label for="npm">NPM</label>
					<input type="text" name="npm" class="form-control form-control-lg" id="npm" value="<?= $m['npm'] ;?>">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group">
					<label for="kelas">Kelas</label>
					<input type="text" name="kelas" class="form-control form-control-lg" id="kelas" value="<?= $m['kelas'] ;?>">
				</div>
				<div class="col-md-6 form-group">
					<label for="jurusan">Jurusan</label>
					<input type="text" name="jurusan" class="form-control form-control-lg" id="jurusan" value="<?= $m['jurusan'] ;?>">
				</div>
				<div class="col-md-6 form-group">
					<label for="email">Email address</label>
					<input type="text" name="email" class="form-control form-control-lg" id="email" placeholder="johndoe@example.com" value="<?= $m['email'] ;?>">
				</div>
			</div>
			<button type="submit" name="edit" class="btn btn-info px-5">Save changes</button>
		</form>
	<?php } ?>
</div>
<?php require_once("../layouts/footer.php"); ?>