<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>⛔⛔⛔</title>
	<style>
		p.p_1{
			font-size: 3em;
			color: red;
		}
		p.p_2{
			font-size: 2em;
			color: blue;
		}
	</style>
</head>
<body>
	<?php
	require_once("../config/koneksi.php");
	if (!isset($_GET['id']))
	{
		header("location: index.php");
		exit;
	}
	$id = $_GET['id'];

	if (hapus($id)>0)
	{
		header("location: index.php");
		exit;
	}else{	
			$x = true;
			while ($x) {
		?>
		<div align="center">
			<p class="p_1">😈 Mau hapus apa sih gan? 😈</p>
			<p class="p_2">Enjoy infinite loop! 🤣</p>
		</div>
	<?php  }}?>
		</body>
	</html>


