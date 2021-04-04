<?php
$servername = "localhost";
$username = "root";
$password = "";

// membuat koneksi 
$conn = mysqli_connect($servername, $username, $password);
// cek koneksi
if (!$conn) {
	die("Connectien Failed : ".mysqli_connect_error());
}
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
	echo "Database Created Successfully";
} else {
	echo "Error Creating Database : ".mysqli_error($conn);
}
mysqli_close($conn);
?>