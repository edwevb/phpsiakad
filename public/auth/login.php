<?php
session_start();

if (isset($_SESSION['login']))
{
	header("location: ../admin/mahasiswa/index.php");
}

require_once("../admin/config/koneksi.php");

if (isset($_POST['login']))
{
	$login = login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login Page</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<?php if (isset($login['error'])) : ?>
			<div class="alert alert-danger alert-dismissible fade show col-md-4	" role="alert">
				<strong><?= $login['pesan'] ;?></strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<form class="" action="" method="POST">
			<div class="form-group col-md-4">
				<label for="username">Username</label>
				<input type="text" name="username" id="username" autocomplete="off" autofocus class="form-control" required>
			</div>
			<div class="form-group col-md-4">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control" required>
			</div>
			<div class="col-md-4">
				<button type="submit" class="btn btn-primary px-5" name="login">Sign in</button>
			</div>
		</form>
		<p class="mt-4 lead">Tidak memiliki akun? <a href="register.php">Register</a></p>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>