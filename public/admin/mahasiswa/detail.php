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
	<?php if(empty($m)) { ?>
		<div class="text-center">
			<h1 class="text-danger font-weight-bolder">Data Mahasiswa tidak ada!</h1>
		</div>
	<?php }else{ ?>
		<div class="card col-lg-6 mx-auto">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-6">
						<img class="detailImage col bg-dark p-1 rounded-lg shadow" src="../../assets/img/<?=$m['img'];?>" alt="<?= 'image-'.$m['nama'] ;?>">
						<div class="my-4 text-center">
							<a href="edit.php?id=<?= $m['id'] ;?>" class="badge">Edit</a>
							<a href="delete.php?id=<?= $m['id'] ;?>" class="badge text-danger">Delete</a>
						</div>
					</div>
					<div class="col-lg-6">
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
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="text-center">
		<a class="btn btn-secondary px-5 my-3" href="index.php">Kembali</a>
	</div>
</div>
<?php require_once("../layouts/footer.php"); ?>