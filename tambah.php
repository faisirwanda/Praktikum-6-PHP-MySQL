<?php
require 'function.php';
//cek sudah disimpan apa belum
if(isset($_POST["submit"])){
	if (tambah($_POST)> 0){
		echo "
			<script>
			alert('Data Berhasil ditambahkan!');
			document.location.href='tugas3.php';
			</script>
		";
	}else {
		echo "
			<script>
			alert('Data Gagal ditambahkan!');
			document.location.href='tugas3.php';
			</script>
		";
	}
//cek data berhasil ditambah atau tidak
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Pegawai</title>
</head>
<body>

<h1>Tambah Data</h1>
<form method="POST" action="">
	
<table cellpadding="5">
	<tr>
		<td><label for=nama> Nama : </label></td>
		<td>
		<input type="text" name="nama" id="nama" required=""></td>
	</tr>
	<tr>
		<td><label for=EMAIL> Email : </label></td>
		<td>
		<input type="text" name="email" id="email" required=""></td>
	</tr>
		<tr>
			<td><label for=divisi> Divisi : </label></td>
			<td>
		<input type="text" name="divisi" id="divisi" required=""></td>
		</tr>
		<tr>
			<td><label for=alamat> Alamat : </label></td>
			<td>
		<input type="text" name="alamat" id="alamat" required=""></td>
		</tr>
		<tr>
			<td><label for=nohp> No Hp : </label></td>
			<td>
		<input type="text" name="nohp" id="nohp" required=""></td>
		</tr>
</table>
<br>
<button type="submit" name="submit">Simpan</button>
</form>

</body>
</html>