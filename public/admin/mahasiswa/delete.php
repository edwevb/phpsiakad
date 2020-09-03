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
}
?>