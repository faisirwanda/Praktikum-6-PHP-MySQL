<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	//deklarasi servername,usename,password, dan nama database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//membuat koneksi
$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
	die("Connection Failed: ".mysqli_connect_error());
}
//mengambil data dari tabel
$sql ="SELECT kode, negara, champion FROM liga";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
	//cetak data dari kolom
	while ($row = mysqli_fetch_assoc($result)) {
		echo "kode: ".$row ["kode"]."- Negara:".$row["negara"]."".$row["champion"]."<br>";
	}
} else{
	echo "0 result";
}
//menutup koneksi
mysqli_close($conn);
?>

</body>
</html>
