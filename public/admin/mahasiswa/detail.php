<?php
require_once("../layouts/header.php");
if (!isset($_GET['id']))
{
	header("location: index.php");
	exit;
}
$id = $_GET['id'];
$m = detail("SELECT * FROM tb_mhs WHERE id = $id");
?>
<div class="container mt-5">
	<div class="card col-md-4 mx-auto">
		<div class="card-body">
			<h5 class="card-title"><?= $m['nama'] ;?></h5>
			<h6 class="card-subtitle mb-2 text-muted"><?= $m['email'] ;?></h6>
			<ul>
				<li><?= $m['npm'] ;?></li>
				<li><?= $m['kelas'] ;?></li>
				<li><?= $m['jurusan'] ;?></li>
			</ul>
			<small class="text-muted">
				<?php
				date_default_timezone_set("Asia/Jakarta");
				setlocale (LC_TIME, 'INDONESIA');
				$created = strtotime($m['created_at']);
				echo 'created at : '.date('d-m-Y',$created);
				?>
			</small>
			<div class="mt-2">
				<a href="edit.php?id=<?= $m['id'] ;?>" class="badge">Edit</a>
				<a href="delete.php?id=<?= $m['id'] ;?>" class="badge text-danger">Delete</a>
			</div>
		</div>
	</div>
	<div class="text-center">
		<a class="btn btn-secondary px-5 my-3" href="index.php">Kembali</a>
	</div>
</div>
<?php require_once("../layouts/footer.php"); ?>