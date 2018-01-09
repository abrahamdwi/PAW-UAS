<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<?php 
session_start();
if (!isset($_SESSION['username'])) {
	header("location:index.php");
}
include "head.php";
?>
<title>Kategori</title>
<div class="container">
<br><br>

	<a href="tambah_kategori.php" class="tombol">Tambah kategori</a>
<center>
	<table class="tb_customer">
		<tr>
			<th>Nama Kategori</th>
			<th>Aksi</th>
		</tr>
		<?php $data->tampil_kategori() ?>
	</table>
<br><br>
</center>
</div>