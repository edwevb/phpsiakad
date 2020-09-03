<?php 
require_once("../config/koneksi.php");
session_start();
if (!isset($_SESSION['login']))
{
	header("location: ../../auth/login.php"); 
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="../../assets/img/labamen.png">
	<title>Page Title</title>
	<link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php">
			<img height="50" width="250" src="../../assets/img/labamen.png" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="outline: 0;border: 0;box-shadow: 0;">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto font-weight-bold align-items-center">
				<li class="nav-item">
					<a class="nav-link" href="https://ak-menengah.com/"><i class="fas fa-external-link-alt"></i> Official Labamen Site</a>
				</li>
				|
				<li class="nav-item">
					<a class="nav-link" href="../../auth/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
				</li>
			</ul>
		</div>
	</nav>