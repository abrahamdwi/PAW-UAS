<?php 
include "root.php";
if (isset($_GET["act"])) {
	if ($_GET["act"]=="login") {
		$data->login($_POST['username'],$_POST['password']);
	}
	if ($_GET["act"]=="daftar") {
		$data->daftar($_POST['nama'],$_POST['tanggal_lahir'],$_POST['alamat'],$_POST['tlp'],$_POST['username'],$_POST['email'],$_POST['password']);
	}
	if ($_GET["act"]=="logout") {
		session_start();
		unset($_SESSION['id_cust'],$_SESSION['nama_cust'],$_SESSION['username_cust']);
		header("location:index.php");
	}
	if ($_GET["act"]=="tambah_keranjang") {
		$data->tambah_keranjang($_POST['id'],$_POST['id_customer']/*,$_POST['jumlah_beli']*/);		
	}
	if ($_GET["act"]=="hapus_keranjang") {
		$data->hapus_keranjang($_GET['id']);
	}
	if ($_GET["act"]=="tambah_barang") {
		$data->tambah_barang($_POST['nama_barang'],$_POST['usia'],$_POST['harga'],$_POST['ket'],$_FILES['foto']['name'],$_FILES['foto']['tmp_name'],$_FILES['foto']['type'],$_POST['kategori']);
		
	}
	
}
 ?>