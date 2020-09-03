<?php
function koneksi()
{
	return mysqli_connect("localhost","root","","kuliah");
}

//Read Mahasiswa
function query($query)
{
	$conn = koneksi();
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result))
	{
		$rows[] = $row;
	}
	return $rows;
}

function detail($query)
{
	$conn = koneksi();
	$result = mysqli_query($conn, $query);
	return mysqli_fetch_assoc($result);
}

//Add Mahasiswa
function tambah($data)
{
	$conn    = koneksi();

	$nama    = htmlspecialchars($data['nama']);
	$npm     = htmlspecialchars($data['npm']);
	$kelas   = htmlspecialchars($data['kelas']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$email   = htmlspecialchars($data['email']);

	$query 	 = "INSERT INTO tb_mhs(nama,npm,kelas,jurusan,email)
	VALUES('$nama','$npm','$kelas','$jurusan','$email')
	";
	mysqli_query($conn, $query) or die(mysqli_error($conn));
	mysqli_affected_rows($conn);
	return [
		'success' => true,
		'pesan' => 'Data berhasil ditambahkan!'
	];
}

//Delete Mahasiswa
function hapus($data)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM tb_mhs WHERE id = $data") or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}

//Edit Mahasiswa
function edit($data)
{
	$conn    = koneksi();
	$id	     = $data['id'];

	$nama    = htmlspecialchars($data['nama']);
	$npm     = htmlspecialchars($data['npm']);
	$kelas   = htmlspecialchars($data['kelas']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$email   = htmlspecialchars($data['email']);

	$query 	 = "UPDATE tb_mhs SET
	nama    = '$nama',
	npm     = '$npm',
	kelas   = '$kelas',
	jurusan = '$jurusan',
	email   = '$email'
	WHERE id = $id";
	mysqli_query($conn, $query) or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}

//Search data index
function cari($data)
{
	$conn = koneksi();

	$query = "SELECT * FROM tb_mhs
	WHERE nama LIKE '%$data%' OR
	npm LIKE '%$data%' OR
	kelas LIKE '%$data%'
	";

	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result))
	{
		$rows[] = $row;
	}
	return $rows;
}

//login
function login($data)
{
	$conn = koneksi();

	$username = htmlspecialchars($data['username']);
	$password = htmlspecialchars($data['password']);

	$check		= query("SELECT * FROM user WHERE username ='$username'
		&& password = '$password'");
	if ($check)
	{
		$_SESSION['login'] = true;
		header("location: ../admin/mahasiswa/index.php");
		exit;
	}else{
		return[
			'error'	=> true,
			'pesan' => 'Username / Password tidak terdaftar'
		];
	}
}

//Register
function register($data)
{
	$conn = koneksi();

	$username    = htmlspecialchars($data['username']);
	$password    = mysqli_escape_string($conn, $data['password']);
	$confirm_pwd = mysqli_escape_string($conn, $data['confirm_pwd']);

	$check_username = query("SELECT username FROM user WHERE username = '$username'");

	//Validate
	if (empty($username) || empty($password) || empty($confirm_pwd))
	{
		return[
			'error'	=> true,
			'pesan' => 'Username & Password tidak boleh kosong!'
		];
	}
	elseif ($check_username)
	{
		return[
			'error'	=> true,
			'pesan' => 'Username sudah digunakan!'
		];
	}
	elseif ($password != $confirm_pwd)
	{
		return[
			'error'	=> true,
			'pesan' => 'Password tidak sama!'
		];
	}
	elseif (strlen($username) < 4)
	{
		return[
			'error'	=> true,
			'pesan' => 'Username minimal 4 digit!'
		];
	}
	elseif (strlen($password) < 6)
	{
		return[
			'error'	=> true,
			'pesan' => 'Password minimal 6 digit!'
		];
	}else{
		//INSERT
		$new_password = password_hash($password, PASSWORD_DEFAULT);
		$query = "INSERT INTO user
		VALUES(null,'$username','$password',null)";

		mysqli_query($conn, $query) or die(mysqli_error($conn));
		mysqli_affected_rows($conn);

		return[
			'success'	=> true,
			'pesan' => 'Berhasil registrasi! Silahkan <a href="login.php">login</a>'
		];
	}
}