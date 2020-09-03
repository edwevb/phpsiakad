<?php 
require_once("../../config/koneksi.php");
$mahasiswa = cari($_GET['keyword']);
?>

<table class="table table-borderless table-responsive-xl">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nama</th>
			<th scope="col">NPM</th>
			<th scope="col">KELAS</th>
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
				<td><?php echo $m['kelas']; ?></td>
				<td class="text-center">
					<a class="btn btn-success col-md" href="detail.php?id=<?= $m['id']; ?>">Detail</a>
				</td>
				<td class="text-center">
					<a class="btn btn-warning col-md" href="edit.php?id=<?= $m['id']; ?>">Edit</a>
				</td>
				<td class="text-center">
					<a class="btn btn-danger col-md" href="delete.php?id=<?= $m['id']; ?>" onclick="return confirm('Hapus data?');">Delete</a>
				</td>
			</tr>
		<?php endforeach;  ?>
	</tbody>
</table>