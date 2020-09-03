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
	<div class="col-4 mx-auto">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"><?= $m['nama'] ;?></h5>
				<h6 class="card-subtitle mb-2 text-muted"><?= $m['email'] ;?></h6>
				<ul>
					<li><?= $m['npm'] ;?></li>
					<li><?= $m['kelas'] ;?></li>
					<li><?= $m['jurusan'] ;?></li>
				</ul>
				<div class="text-center">
					<a href="edit.php?id=<?= $m['id'] ;?>" class="card-link">Edit</a>
					<a href="delete.php?id=<?= $m['id'] ;?>" class="card-link">Delete</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once("../layouts/footer.php"); ?>