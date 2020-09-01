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

	if (mysqli_num_rows($result) == 1) 
	{
		return mysqli_fetch_assoc($result);
	}else{
		$rows = [];
		while ($row = mysqli_fetch_assoc($result))
		{
			$rows[] = $row;
		}
		return $rows;
	}
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
	mysqli_query($conn, $query);
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}