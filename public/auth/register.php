<?php
session_start();

if (isset($_SESSION['login']))
{
	header("location: ../admin/mahasiswa/index.php");
}

require_once("../admin/config/koneksi.php");
if (isset($_POST['register'])) 
{
	$register = register($_POST);
}
?>	

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Registrasi Akun</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<?php if (isset($register['success'])) : ?>
			<div class="alert alert-success alert-dismissible fade show col-md-4	" role="alert">
				<strong><?= $register['pesan'];?></strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<?php if (isset($register['error'])) : ?>
			<div class="alert alert-danger alert-dismissible fade show col-md-4	" role="alert">
				<strong><?= $register['pesan'] ;?></strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<form action="" method="POST">
			<div class="form-group col-md-4">
				<label for="username">Username</label>
				<input type="text" name="username" id="username" autocomplete="off" autofocus class="form-control">
			</div>
			<div class="form-group col-md-4">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			<div class="form-group col-md-4">
				<label for="confirm_pwd">Confirm Password</label>
				<input type="password" name="confirm_pwd" id="confirm_pwd" class="form-control">
			</div>
			<div class="col-md-4">
				<button type="submit" class="btn btn-primary px-5" name="register">Confirm</button>
			</div>
		</form>
		<p class="lead mt-4">Sudah memiliki akun? <a href="login.php"><strong>Sign in</strong></a></p>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>