<?php 
session_start();
if (!isset($_SESSION['username'])) {
	header("location:index.php");
}
include "head.php";
?>
<div class="container">
	<form class="ftambah" action="hand.php?act=tambah_barang" enctype="multipart/form-data" method="post">
		<input type="text" name="nama_barang" placeholder="Nama Barang"><br>
		<input type="text" name="usia" placeholder="Umur barang antik">Tahun<br>
		<input type="text" name="harga" placeholder="Harga"><br>
		<textarea name="ket" placeholder="Keterangan"></textarea><br>
		<input type="file" name="foto"> (foto)<br>
		<select name="kategori">
			<?php $data->tampil_kategori1() ?>
		</select><br>



		<!-- <input type="text" name="nama_barang" placeholder="Nama Barang"><br>
		<input type="date" name="tgl_barang" placeholder="Tahun Pembuatan"><br>
		<input type="text" name="harga_brg" placeholder="Harga"><br>
		<textarea name="brg_deskripsi" placeholder="Deskripsi"></textarea><br>

		<input type="file" name="file_img"> (foto)<br> -->
		
		<input type="submit" value="simpan">
	</form>
</div>