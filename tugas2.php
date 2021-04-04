<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tugas";

//membuat koneksi
$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) { //cek koneksi apabila gagal
	die("Connection Failed: ".mysqli_connect_error());
}

$sql = "INSERT INTO buku_tamu (id, nama, email, divisi, alamat, nohp)
    VALUES ('', 'Fais', 'fais@gmail.com','Keuangan','Sampang','123456789'),('','Bagas','Bagas@.ac.id','Logistik','Surabaya','0812345678')"; //mengisi tabel

    if(mysqli_query($conn, $sql)){ 
            echo "Koneksi Berhasil"; //pesan apabila input data berhasil
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn); //pesan apabila input data gagal + pesan errornya 
        }
mysqli_close($conn);
?>
