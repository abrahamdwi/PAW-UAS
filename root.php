<?php 
include "koneksi.php";
Class bigdata
{
	
	function __construct()
	{
		$conn=mysqli_connect("localhost","root","");
		$a = mysqli_select_db($conn,"tokobaju");
	}
	function login($username,$password){
		include "koneksi.php";
		$query=mysqli_query($conn,"select * from user where username='$username' and password='$password'");
		$check=mysqli_num_rows($query);
		if ($check > 0) {
			$data=mysqli_fetch_array($query);
			session_start();
			$_SESSION['id_cust']=$data['id'];
			$_SESSION['nama_cust']=$data['nama'];
			$_SESSION['username_cust']=$data['username'];
			header("location:index.php");
		}
		else{
			?>
			<script type="text/javascript">
				alert("Login gagal, username atau password salah");
				window.location.href="login.php";
			</script>
			<?php
		}
	}
	function daftar($nama,$tanggal_lahir,$alamat,$tlp,$username,$email,$password){
		include "koneksi.php";
		$query=mysqli_query($conn,"SELECT * from user where username='$username'");
		$check=mysqli_num_rows($query);
		if ($check == 0) {
			$q=mysqli_query($conn,"INSERT into user set nama='$nama',tanggal_lahir='$tanggal_lahir',alamat='$alamat',tlp='$tlp',username='$username',email='$email',password='$password'");
					if ($q) {
						?>
						<script type="text/javascript">
							alert("Pendaftaran berhasil, silahkan login");
						window.location.href="login.php";
						</script>
						<?php
					}else{
						echo "gagal daftar";
					}
		}else{
					?>
					<script type="text/javascript">
						alert("Username sudah digunakan, silahkan gunakan yang lainnya");
						window.location.href="daftar.php";
					</script>
					<?php
		}
	}
	function tampil_barang(){

		include "koneksi.php";
		$query=mysqli_query($conn,"SELECT barang.id,barang.nama_barang,barang.usia,barang.harga,barang.keterangan,barang.gambar,kategori.nama_kategori FROM barang INNER JOIN kategori ON barang.kategori=kategori.id order by barang.id DESC");
		if ($query === FALSE) {
 		   die(mysqli_error($conn));
		}
		while ($data=mysqli_fetch_array($query)) {
			?>
				<div class="post">

					<img src="<?= $data['gambar'] ?>" >
					<h3><?= $data['nama_barang'] ?></h3>
					<span><?php echo "Kategori : "; echo $data['nama_kategori'] ?></span><br>
					<span><?php echo "Rp. ".number_format($data['harga'],0,',','.') ?></span><br>
					<a href="detail.php?id=<?= $data['id'] ?>">Detail</a>
				</div>
			<?php
		}
	}
	function tampil_cat(){
		include "koneksi.php";
				$q=mysqli_query($conn,"SELECT * from kategori");
		while ($data=mysqli_fetch_array($q)) {
			?>
						<li><a href="kategori.php?id=<?php echo $data['id'];?>"><?php echo $data['nama_kategori'];?></a></li>
						<?php
		}
	}
	function tampil_kategori1(){
		include "koneksi.php";
		$query=mysqli_query($conn,"select * from kategori");
		while ($data=mysqli_fetch_array($query)) {
			?><option value="<?php echo $data['id'] ?>"><?php echo $data['nama_kategori'] ?></option>
			<?php
		}
	}
	function tampil_barang_kategori($kategori){
		include "koneksi.php";
		$query=mysqli_query($conn,"SELECT barang.id,barang.nama_barang,barang.usia,barang.harga,barang.keterangan,barang.gambar,kategori.nama_kategori FROM barang INNER JOIN kategori ON barang.kategori=kategori.id where barang.kategori='$kategori'");
				while ($data=mysqli_fetch_array($query)) {
					?>
				<div class="post">
					<img src="<?= $data['gambar'] ?>">
					<h3><?= $data['nama_barang'] ?></h3>
					<span><?= $data['nama_kategori'] ?></span><br>
					<span><?php echo "Rp. ".number_format($data['harga'],0,',','.') ?></span><br>
					<a href="detail.php?id=<?= $data['id'] ?>">Detail</a>
				</div>
			<?php
		}
	}

	function detail($id){
		include "koneksi.php";
		$query=mysqli_query($conn,"SELECT barang.id,barang.nama_barang,barang.usia,barang.harga,barang.keterangan,barang.gambar,kategori.nama_kategori FROM barang INNER JOIN kategori ON barang.kategori=kategori.id where barang.id='$id'");
			$data=mysqli_fetch_array($query);
					?>
				<div class="postsingle">
					<img src="<?= $data['gambar'] ?>">
					<h3><?= $data['nama_barang'] ?></h3>
					<span>Kategori : <?= $data['nama_kategori'] ?></span><br>
					<span>Umur Barang : <?= $data['usia'] ?> Tahun</span><br>
					<span><?php echo "Rp. ".number_format($data['harga'],0,',','.') ?> ,-</span><br>
					<?php 
						if (isset($_SESSION['username_cust'])) {
							?>
								<form action="hand.php?act=tambah_keranjang" method="post">
									<input type="hidden" name="id" value="<?= $data['id']; ?>"><br>
									<input type="hidden" name="id_customer" value="<?= $_SESSION['id_cust'] ?>">
									<!-- <input type="number" name="jumlah_beli" placeholder="jumlah beli"> -->
									<button type="submit">Tambah ke keranjang</button>
								</form>
							<?php		
						}else{
							?>
								<a href="login.php">Login</a>
							<?php
						}
					?>
					<div class="both"></div>
					<p>Keterangan : <?= $data['keterangan'] ?></p>
					
				</div>
			<?php
		
	}
	function tambah_keranjang($id,$id_cust/*,$jumlah_beli*/){
		include "koneksi.php";
		
		$query=mysqli_query($conn,"select * from barang where id='$id'");
		$data=mysqli_fetch_array($query);
		$total_bayar=$data["harga"]; /**$jumlah_beli*/
		$nama_barang=$data["nama_barang"];
		$harga=$data["harga"];
		$tkeranjang=mysqli_query($conn,"insert into keranjang set id_customer='$id_cust',nama_barang='$nama_barang',harga='$harga',total_harga='$total_bayar'");
		/*,jumlah_beli='$jumlah_beli'*/
		if ($tkeranjang) {	?>
						<script type="text/javascript">
							alert("berhasil ditambahkan ke keranjang");
						window.location.href="index.php";
						</script>
						<?php
					}else{
						echo mysqli_error($conn);
					}
	}
	function tampil_keranjang($id_cust){
		include "koneksi.php";
		$query=mysqli_query($conn,"select * from keranjang where id_customer='$id_cust'");
		while ($data=mysqli_fetch_array($query)) {
			?>
			<tr>
				<td><?php echo $data['id_customer'] ?></td>
				<td><?php echo $data['nama_barang'] ?></td>
				<td><span><?php echo "Rp. ".number_format($data['harga'],0,',','.') ?> ,-</span><br></td>
				
				<td><?php echo "Rp. ".number_format($data['total_harga'],0,',','.') ?></td>
				<td><a class="btn btn-warning" href="hand.php?act=hapus_keranjang&id=<?php echo $data['id'] ?>" class="b">Hapus</a></td>
			</tr>
			<?php
		}
		?>
			<tr>
			<?php 
			$sum=mysqli_query($conn,"SELECT SUM( harga ) AS harga FROM keranjang where id_customer='$id_cust'");
			$sum_array=mysqli_fetch_array($sum);
			 ?>
				<td colspan="3">Total : </td><td><?php echo "Rp. ".number_format($sum_array['harga'],0,',','.') ?></td>
				<td>
					<a style="color: black" href="Proses.php" target="_blank" class="btn btn-default pull-center"><span class='glyphicon glyphicon-print'></span>  Proses</a>
				</td>
				<td></td>
			</tr>
		<?php

	}
	function hapus_keranjang($id){
		include "koneksi.php";
		$query=mysqli_query($conn,"DELETE from keranjang where id='$id'");
		if ($query) {
			?>
			<script type="text/javascript">
				alert("data berhasil dihapus");
				window.location.href="keranjang.php";
			</script>
			<?php
		}else{

			?>
			<script type="text/javascript">
				alert("data gagal dihapus");
				window.location.href="keranjang.php";
			</script>
			<?php
		}

		/*header("location:keranjang.php");*/
	}
	function tambah_barang($nama_barang,$usia,$harga,$ket,$namagambar,$tmpgambar,$type_foto,$kategori){
		include "koneksi.php";
		if ($type_foto!="image/jpeg"&&$type_foto!="image/jpg"&&$type_foto!="image/png"&&$type_foto!="image/gif") {
					?>
		            <script type="text/javascript">
		            alert( "Gunakan file yang benar");
		            window.location.href="index.php";
		            </script>
		            <?php
		}else{
			$destination="foto_brg/$namagambar";
			move_uploaded_file($tmpgambar, $destination);
            $query=mysqli_query($conn,"INSERT into barang set nama_barang='$nama_barang',usia='$usia',harga='$harga',keterangan='$ket',gambar='$destination',kategori='$kategori'");

            /*,kategori=$kategori*/
            if ($query) {
					?>
		            <script type="text/javascript">
		            alert( "Barang Berhasil Ditambahkan");
		            window.location.href="index.php";
		            </script>
		            <?php
            }              

		}
	}

	function tampil_barang_user($id_cust){
		include "koneksi.php";
		$query=mysqli_query($conn,"select * from barang");
		$no=1;
		while ($data=mysqli_fetch_array($query)) {
			?>
			<tr>
				<td><?= $no ?></td>
				<td><img src="<?= $data['gambar'] ?>"></td>
				<td><?php echo $data['nama_barang'] ?></td>
				<td><?php echo $data['usia']; echo " Tahun"; ?></td>
				<td><?php echo "Rp. ";echo $data['harga']; echo " ,- " ?></td>
				<td><?php echo $data['keterangan'] ?></td>
				<td><a class="a" href="edit_barang.php?id=<?php echo $data['id'] ?>">edit</a> <a class="b" href="hand.php?act=hapus_barang&id=<?php echo $data['id'] ?>">Hapus</a></td>
			</tr>
			<?php
			$no++;
		}
	}

}
$data=new bigdata();
 ?>