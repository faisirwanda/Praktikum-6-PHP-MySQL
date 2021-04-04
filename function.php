<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root","","tugas");
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $row;
}

function tambah($data){
	global $conn;
	//ambil data dari peagawai
$nama = $data["nama"];
$email = $data["email"];
$divisi = $data["divisi"];
$alamat = $data["alamat"];
$nohp = $data["nohp"];

//menambah data yang diinputkan
$query = "INSERT INTO buku_tamu values ('$id','$nama','$email','$divisi','$alamat','$nohp')";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function hapus ($id){
	global $conn;
	 mysqli_query($conn, "DELETE FROM buku_tamu where id = $id"); //menghapus data di tabel yang diingnkan
	 return mysqli_affected_rows($conn);
}

?>