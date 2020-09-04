<?php
	require_once("../layouts/header.php");

	if (isset($_POST['tambah']))
	{
		$tambah = tambah($_POST);
		if (!$tambah['error']) 
		{
			header("location: index.php");
			exit;
		}
	}
	?>
	<div class="container mt-5">
		<?php if (isset($tambah['error'])) : ?>
			<div class="alert alert-danger  alert-dismissible text-center fade show col-md-4	" role="alert">
				<strong><?= $tambah['pesan'] ;?></strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<h3>FORM INPUT ASISTEN</h3>
		<div class="text-right">
			<a class="btn btn-secondary px-5 my-3" href="index.php">Kembali</a>
		</div>
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6 form-group">
					<label for="nama">Nama</label>
					<input type="text" name="nama" class="form-control form-control-lg" id="nama">
				</div>
				<div class="col-md-6 form-group">
					<label for="npm">NPM</label>
					<input type="text" name="npm" class="form-control form-control-lg" id="npm">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group">
					<label for="kelas">Kelas</label>
					<input type="text" name="kelas" class="form-control form-control-lg" id="kelas">
				</div>
				<div class="col-md-6 form-group">
					<label for="jurusan">Jurusan</label>
					<input type="text" name="jurusan" class="form-control form-control-lg" id="jurusan">
				</div>
				<div class="col-md-6 form-group">
					<label for="email">Email address</label>
					<input type="text" name="email" class="form-control form-control-lg" id="email" placeholder="johndoe@example.com">
				</div>
			</div>
			<div class="col-md-4 custom-file my-4">
				<input type="file" name="img" class="custom-file-input" accept="image/*" id="myInput">
				<label class="custom-file-label" for="myInput">Choose file</label>
			</div>
			<br>
			<button type="submit" name="tambah" class="btn btn-info px-5">Submit</button>
		</form>
	</div>

	<script>
		//show file name
		document.querySelector('.custom-file-input')
		.addEventListener('change',function(e){
		  var fileName = document.getElementById("myInput").files[0].name;
		  var nextSibling = e.target.nextElementSibling
		  nextSibling.innerText = fileName
		});
	</script>
	<?php require_once("../layouts/footer.php"); ?>