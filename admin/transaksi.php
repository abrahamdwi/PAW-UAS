<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<?php 
session_start();
if (!isset($_SESSION['username'])) {
	header("location:index.php");
}
include "head.php";
?>
<div class="container">
<br><br>
<title>Transaksi</title>
<?php 

$jumlah_record=mysqli_query($conn,"SELECT COUNT(*) as id_customer from keranjang");
$f=mysqli_fetch_array($jumlah_record);
$jum=$f['id_customer'];
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Transaksi  : </td>		
			<td><?php echo $jum; ?></td>
		</tr>
		
	</table>
	<a style="margin-bottom:10px" href="lap_data_trans.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
</div>
	
<center>
	<table class="tb_customer">
		<tr>
			<th>No.</th>
			<th>id Costumer</th>
			<th>Nama barang</th>
			<th>Harga</th>
			<th>Total Harga</th>
			<th>Aksi</th>
		</tr>
		<?php $data->transaksi() ?>
	</table>
<br><br>
</center>
</div>