<?php
require_once("../layouts/header.php");
$mahasiswa = query("SELECT id, nama, npm FROM tb_mhs ORDER BY nama ASC");
if (isset($_POST['cari']))
{
	$mahasiswa = cari($_POST['keyword']);
}
?>
<div class="container mt-5">
	<a class="btn btn-info float-right" href="input.php"><i class="fas fa-plus"></i> Tambah Data Baru</a>
	<h3 class="my-5">Data Asisten Labamen</h3>
	<div class="mb-4">
		<form action="" method="POST">
			<div class="d-flex">
				<input class="form-control col-md-4 mr-2 keyword" type="text" name="keyword" placeholder="Search here.." autocomplete="off">
				<button class="btn btn-info align-items-center px-2 searchBtn" type="submit" name="cari">Search</button>
			</div>
		</form>
	</div>
	<div class="tableSection">
		<table class="table table-borderless table-responsive-xl">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">NPM</th>
				</tr>
				<?php if(empty($mahasiswa)) : ?>
					<tr>
						<td class="text-center" colspan="5">
							<p class="lead text-dark">Data Mahasiswa tidak ada!</p>
						</td>
					</tr>
				<?php endif; ?>
			</thead>
			<tbody>
				<?php 
				$nomor = 1;
				foreach ($mahasiswa as $m) : ?>
					<tr>
						<td><?php echo $nomor++; ?></td>
						<td><?php echo $m['nama']; ?></td>
						<td><?php echo $m['npm']; ?></td>
						<td class="text-center">
							<a class="btn btn-light col-md" href="detail.php?id=<?= $m['id']; ?>">Detail</a>
						</td>
						<td class="text-center">
							<a class="btn btn-light col-md" href="edit.php?id=<?= $m['id']; ?>">Edit</a>
						</td>
						<td class="text-center">
							<a class="btn btn-light col-md" href="delete.php?id=<?= $m['id']; ?>" onclick="return confirm('Hapus data?');">Delete</a>
						</td>
					</tr>
				<?php endforeach;  ?>
			</tbody>
		</table>
	</div>
</div>
<script src="../../assets/js/script.js"></script>
<?php 
require_once("../layouts/footer.php");
?>
