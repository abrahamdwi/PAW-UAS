<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<?php 
session_start();
if (!isset($_SESSION['username'])) {
	header("location:index.php");
}
include "head.php";
?>
<title>Barang</title>
<div class="container">
	<a href="tambah.php" class="tombol">Tambah barang</a>
	<br><br>
<center>
	<table class="tb_customer">
		<tr>
			<th width="10px">No</th>
			<th width="100px">Foto Barang</th>
			<th width="100px">Nama Barang</th>
			<th>Usia barang</th>
			<th width="100px">Harga</th>

			
			<th>Keterangan</th>
			<th width="100px">Aksi</th>

		</tr>
		<?php $data->tampil_barang() ?>
	</table>
<br><br>
</center>

</div>