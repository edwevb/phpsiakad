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
	<link rel="icon" href="../../assets/img/labamen.jpg">
	<title>Page Title</title>
	<link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<style>
		@font-face {
			font-family: 'Poppins';
			src: url(../../assets/font/Poppins-Regular.ttf);
		}
		@font-face {
			font-family: 'Righteous';
			src: url(../../assets/font/Righteous-Regular.ttf);
		}
		body{
			font-family: 'Poppins', Sans-serif;
		}
		nav{
			background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),
			url(../../assets/img/bg.jpg) no-repeat bottom fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			transition: filter 0.5s;
		}
		.nav-link{
			font-family: 'Righteous', Sans-serif;
			font-size: 4vh;
			letter-spacing: 2.75px;
			margin:0 2px;
			color: #fff !important;
			transition: color 0.5s ease;
		}
		.nav-link:hover{
			border-bottom: 1px solid;
			margin-bottom: -1px;
			color: #DECBA4!important;
		}
		h3, th, td, label{
			color: #fff;
		}
	</style>
</head>
<body class="bg-dark">
	<nav class="navbar navbar-expand-lg navbar-dark">
		<a class="navbar-brand ml-2" href="index.php">
			<img class="rounded-lg" height="150" width="auto" src="../../assets/img/labamen.jpg" alt="logo labamen" style="opacity: 0.6;">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="outline: 0;border: 0;box-shadow: 0;">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="https://ak-menengah.com/"><i class="fas fa-external-link-alt"></i> Official Labamen</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../../auth/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
				</li>
			</ul>
		</div>
	</nav>