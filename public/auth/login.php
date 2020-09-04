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
	<link rel="icon" href="../assets/img/labamen.jpg">
	<title>Login Page</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<style>
		body, html {
			background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),
			url(../assets/img/bg.jpg) no-repeat bottom fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			transition: filter 0.5s; 
			margin: 0;
			padding: 0;
		}
		.container {
			display: grid;
			height: 50vh;
			place-items: center;
		}
		label, p, h5{
			color: #eee;
		}
		.content{
			padding: 5em 5em;
		}
	</style>
</head>
<body>
	<div class="container mt-5">
		<?php if (isset($login['error'])) : ?>
			<div class="alert alert-danger alert-dismissible text-center fade show col-md-4	" role="alert">
				<strong><?= $login['pesan'] ;?></strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<div class="bg-dark content rounded-lg" style="opacity: 0.95;">
			<h5>Login Page</h5>
			<hr class="my-3 bg-light">
			<form action="" method="POST">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" autocomplete="off" autofocus class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" required>
				</div>
				<div>
					<button type="submit" class="btn btn-primary px-5" name="login">Sign in</button>
				</div>
			</form>
			<p class="lead mt-2">Tidak memiliki akun? <a href="register.php"><strong>Register</strong></a></p>
		</div>
		
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>