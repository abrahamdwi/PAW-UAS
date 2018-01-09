<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<?php 

session_start();
if (!isset($_SESSION['username'])) {
	header("location:index.php");
}
include "head.php";
?>
<title>User</title>	
<div class="container">
<br><br>
<center>
	<table class="tb_customer">
		<tr>
			<th>No. </th>
			
			<th>Nama</th>
			<th>Tanggal lahir</th>
			
			<th>Alamat</th>
			<th>Telepon/HP</th>
			
			<th>username</th>
			<th>Email</th>
			
			<th>Password</th>
			<th width="100px">Aksi</th>
		</tr>
		<?php $data->tampil_customer() ?>
	</table>
<br><br>
</center>
</div>