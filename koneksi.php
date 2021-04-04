<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h1>Demo Koneksi Database MySQL</h1>
	<?php
	$con = mysqli_connect("localhost","root","","tes");
	//cek koneksi
	if (mysqli_connect_error()){
		echo "Failed to connect to MySQL : ".mysqli_connect_error(); //output jika koneksi gagal dan erornya 
		exit();
	}
	?>
</body>
</html>