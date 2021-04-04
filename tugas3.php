<?php
//deklarasi servername, user name, password dan database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Tugas";

//membuat koneksi
$conn = mysqli_connect($servername,$username,$password,$dbname);
//cek kondisi koneksi
if (!$conn) {
	die("Connection Failed: ".mysqli_connect_error());
}

//mengambil data dari tabel buku tamu
$sql ="SELECT *FROM buku_tamu";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
	//cetak data dari kolom
	
} else{
	echo "0 result";
}
//menutup konesksi
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- Membuat Tabel -->
<table border="1" cellpadding="10" cellspacing="1">
	<tr>
		<th>ID</th>
		<th>Aksi</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Divisi</th>
		<th>Alamat</th>
		<th>No HP</th>
	</tr>

	<tr>
		<?php
			while ($row = mysqli_fetch_assoc($result)) :
		?>
	</tr>
	<tr>
		<td> <?= $row["id"] ; ?> </td>
		<td>
			<a href="edit.php?id=<?= $row["id"]; ?>">edit</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data Pegawai Ini ?')">hapus</a>
		</td>
		<!-- Mengisi tabel sesuai database-->
		<td> <?= $row["nama"] ; ?> </td> 
		<td> <?= $row["email"] ; ?> </td>
		<td> <?= $row["divisi"] ; ?> </td>
		<td> <?= $row["alamat"] ; ?> </td>
		<td> <?= $row["nohp"] ; ?> </td>
	</tr>
	<?php endwhile; ?>
</table>
<br>
<table cellspadding="10">
	<tr>
		<form action="tambah.php"> <!-- membuat buton tambah -->
			<button>tambah</button> 
		</form>
		</td>
</tr>
</table>
</body>
</html>