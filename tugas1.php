<?php
$servername = "localhost";
$username = "root";
$password = "";

// membuat koneksi 
$conn = mysqli_connect($servername, $username, $password);
// cek koneksi
if (!$conn) {
	die("Connectien Failed : ".mysqli_connect_error());//jika kondisi tidak terkoneksi
}
$sql = "CREATE DATABASE Tugas"; //membuat database
if (mysqli_query($conn, $sql)) {
	echo "Database Created Successfully"; //pesan jika terkoneksi
} else {
	echo "Error Creating Database : ".mysqli_error($conn); //pesan jika eror
}
mysqli_close($conn);
?>