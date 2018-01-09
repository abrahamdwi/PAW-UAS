<?php 
session_start();
if (!isset($_SESSION['username'])) {
	header("location:index.php");
}
include "head.php";
include "koneksi.php";
$id=$_GET["id"];
$query=mysqli_query($conn,"select * from user where id='$id'");
$data_edit=mysqli_fetch_array($query);
?>
<div class="container">
	<form class="ftambah" action="hand.php?act=simpan_edit_cust" enctype="multipart/form-data" method="post">
	<input type="hidden" name="id" value="<?= $data_edit['id'] ?>">	
		<input type="text" name="nama" placeholder="Nama" value="<?= $data_edit['nama'] ?>"><br>
		<input type="text" name="tanggal_lahir" placeholder="tanggal lahir" value="<?= $data_edit['tanggal_lahir'] ?>"><br>
		<input type="text" name="alamat" placeholder="alamat" value="<?= $data_edit['alamat'] ?>"><br>
		<input type="text" name="tlp" placeholder="Telpon/HP" value="<?= $data_edit['tlp'] ?>"><br>
		<input type="text" name="username" placeholder="Username" value="<?= $data_edit['username'] ?>"><br>
		<input type="text" name="email" placeholder="Email" value="<?= $data_edit['email'] ?>"><br>
		<input type="text" name="password" placeholder="Password" value="<?= $data_edit['password'] ?>"><br>
		<input type="submit" value="simpan">
	</form>
</div>