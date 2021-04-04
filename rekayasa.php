<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//membuat koneksi
$conn = mysqli_connect($servername,$username,$password,$dbname);
//cek koneksi
if (!$conn) {
	die("Connection Failed: ".mysqli_connect_error());
}

$sql = "INSERT INTO liga (kode, negara, champion)
    VALUES ('Jer', 'Jerman', '4'), ('Spa', 'Spanyol', '3'), ('Eng', 'English', '3')"; //isi tabel
    if(mysqli_query($conn, $sql)){ 
            echo "New record created successfully"; //pesan apabila tabel data tabel sukses 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn); //pesan apabila gagal 
        }
mysqli_close($conn);
?>