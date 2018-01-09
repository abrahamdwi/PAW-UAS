

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<?php include "head.php"; ?>
<title>Keranjang</title>
<div class="container">
	<br><br>
<center>
	<header>
		<h1>BECOLLECTORS</h1>
		<p> Daftar Barang antik yang anda pesan..</p>
	</header>
	<table class="tb_customer">

		<tr>
			
			<th>id Costumer</th>
			<th>Nama barang</th>
			<th>Harga</th>
			<!-- <th>Jumlah beli</th> -->
			<th>Total Harga</th>
			<th>Aksi</th>
		</tr>
		<?php $data->tampil_keranjang($_SESSION["id_cust"]) ?>
	</table>
<br><br>
</div>