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
		$query=mysqli_query($conn,"select * from admin where username='$username' and password='$password'");
		$check=mysqli_num_rows($query);
		if ($check > 0) {
			$data=mysqli_fetch_array($query);
			session_start();
			$_SESSION['id']=$data['id'];
			$_SESSION['nama']=$data['nama'];
			$_SESSION['username']=$data['username'];
			header("location:home.php");
		}
		else{
			?>
			<script type="text/javascript">
				alert("Login gagal, username atau password salah");
				window.location.href="index.php";
			</script>
			<?php
		}
	}
	function tampil_customer(){
		include "koneksi.php";
		$query=mysqli_query($conn,"select * from user");
		$no=1;
		while ($data=mysqli_fetch_array($query)) {
			?>
			<tr>
				<td><?= $no ?></td>
				<td><?php echo $data['nama'] ?></td>
				<td><?php echo $data['tanggal_lahir'] ?></td>

				<td><?php echo $data['alamat'] ?></td>
				<td><?php echo $data['tlp'] ?></td>
				
				<td><?php echo $data['username'] ?></td>
				<td><?php echo $data['email'] ?></td>

				<td><?php echo $data['password'] ?></td>

				<td>
					<a class="btn btn-warning" href="edit_cust.php?id=<?php echo $data['id'] ?>">edit</a>
					<a class="btn btn-danger" href="hand.php?act=hapus_cust&id=<?php echo $data['id'] ?>">Hapus</a>
				</td>
			</tr>
			<?php
			$no++;
		}
	}
	function simpan_edit_cust($id,$nama,$tanggal_lahir,$alamat,$tlp,$username,$email,$password){
		include "koneksi.php";
	

            $query=mysqli_query($conn,"UPDATE user set nama = '$nama', tanggal_lahir='$tanggal_lahir', alamat = '$alamat', tlp = '$tlp', username = '$username', email='$email', password='$password' where id='$id' ");
            if ($query) {
					?>
		            <script type="text/javascript">
		            alert( "Data customer Berhasil Disimpan");
		            window.location.href="customer.php";
		            </script>
		            <?php
            }else{
            		echo mysql_error();
            }               

		
	}	
	function hapus_cust($id){
		include "koneksi.php";
		$query=mysqli_query($conn,"delete from user where id='$id'"); 
		if ($query) {
			?>
			<script type="text/javascript">
				alert("data berhasil dihapus");
				window.location.href="customer.php";
			</script>
			<?php
		}else{

			?>
			<script type="text/javascript">
				alert("data gagal dihapus");
				window.location.href="customer.php";
			</script>
			<?php
		}
	}
	function tampil_kategori(){
		include "koneksi.php";
		$query=mysqli_query($conn,"select * from kategori");
		while ($data=mysqli_fetch_array($query)) {
			?>
			<tr>
				<td><?php echo $data['nama_kategori'] ?></td>
				<td><a class="btn btn-danger" href="hand.php?act=hapus_cat&id=<?php echo $data['id'] ?>">Hapus</a></td>
			</tr>
			<?php
		}
	}
	
	function tambah_cat($nama_cat){

		include "koneksi.php";
		$query=mysqli_query($conn,"insert into kategori set nama_kategori='$nama_cat'");
		if ($query) {
			?>
			<script type="text/javascript">
				alert("data berhasil ditambahkan");
				window.location.href="kategori.php";
			</script>
			<?php
		}else{

			?>
			<script type="text/javascript">
				alert("data gagal ditambahkan");
				window.location.href="kategori.php";
			</script>
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

	function tambah_barang($nama_barang,$usia,$harga,$ket,$namagambar,$tmpgambar,$type_foto,$kategori){
		include "koneksi.php";
		if ($type_foto!="image/jpeg"&&$type_foto!="image/jpg"&&$type_foto!="image/png"&&$type_foto!="image/gif") {
					?>
		            <script type="text/javascript">
		            alert( "Gunakan file yang benar");
		            window.location.href="barang.php";
		            </script>
		            <?php
		}else{
			$destination="../foto_brg/$namagambar";
			move_uploaded_file($tmpgambar, $destination);
            $query=mysqli_query($conn,"insert into barang set nama_barang='$nama_barang',usia='$usia',harga='$harga',keterangan='$ket',gambar='$destination',kategori='$kategori'");

            /*,kategori=$kategori*/
            if ($query) {
					?>
		            <script type="text/javascript">
		            alert( "Barang Berhasil Ditambahkan");
		            window.location.href="barang.php";
		            </script>
		            <?php
            }              

		}
	}
	/*function tambah_barang($nama_barang,$tgl_barang,$harga_brg,$brg_deskripsi,$nama_foto,$tmp_foto,$type_foto,$kategori){
		include "koneksi.php";
		if ($type_foto!="image/jpeg"&&$type_foto!="image/jpg"&&$type_foto!="image/png"&&$type_foto!="image/gif") {
					?>
		            <script type="text/javascript">
		            alert( "Gunakan file yang benar");
		            window.location.href="barang.php";
		            </script>
		            <?php
		}else{
			$destination="foto_brg/$nama_foto";
			move_uploaded_file($tmp_foto, $destination);
            $query=mysqli_query($conn,"insert into upload_barang set nama_barang='$nama_barang',tgl_barang='$tgl_barang',harga_brg='$harga_brg',brg_deskripsi='$brg_deskripsi',foto_brg='$destination',kategori=$kategori");
            if ($query) {
					?>
		            <script type="text/javascript">
		            alert( "Barang Berhasil Ditambahkan");
		            window.location.href="barang.php";
		            </script>
		            <?php
            }else{
            		echo mysqli_error();
            }               

		}
	}*/
	function tampil_barang(){
		include "koneksi.php";
		$query=mysqli_query($conn,"select * from barang order by id DESC");
		$no=1;
		while ($data=mysqli_fetch_array($query)) {
			?>
			<tr>
				<td><?= $no ?></td>
				<td><img src="../foto_brg/<?= $data['gambar'] ?>"></td>
				<td><?php echo $data['nama_barang'] ?></td>
				<td><?php echo $data['usia']; echo " Tahun"; ?></td>
				<td><?php echo "Rp. ";echo $data['harga']; echo " ,- " ?></td>
				<td><?php echo $data['keterangan'] ?></td>
				<td><a class="btn btn-warning" href="edit_barang.php?id=<?php echo $data['id'] ?>">edit</a> <a class="btn btn-danger" href="hand.php?act=hapus_barang&id=<?php echo $data['id'] ?>">Hapus</a></td>
			</tr>
			<?php
			$no++;
		}
	}

	function simpan_edit_barang($id,$nama_barang,$usia,$harga,$ket,$namagambar,$tmpgambar,$type_foto,$kategori){
		include "koneksi.php";
		if ($type_foto!="image/jpeg"&&$type_foto!="image/jpg"&&$type_foto!="image/png"&&$type_foto!="image/gif") {
					?>
		            <script type="text/javascript">
		            alert( "Gunakan file yang benar");
		            window.location.href="barang.php";
		            </script>
		            <?php
		}else{
			$destination="../foto_brg/$namagambar";
			move_uploaded_file($tmpgambar, $destination);
            $query=mysqli_query($conn,"UPDATE barang set nama_barang='$nama_barang',usia='$usia',harga='$harga',keterangan='$ket',gambar='$destination',kategori='$kategori' where id='$id'");

            /**/
            if ($query) {
					?>
		            <script type="text/javascript">
		            alert( "Barang Berhasil Disimpan");
		            window.location.href="barang.php";
		            </script>
		            <?php
            }/*else{
            		echo mysqli_error();
            }*/               

		}
	}
	
	function hapus_barang($id){
		include "koneksi.php";
		$query=mysqli_query($conn,"delete from barang where id='$id'");
            if ($query) {
					?>
		            <script type="text/javascript">
		            alert( "Barang Berhasil Dihapus");
		            window.location.href="barang.php";
		            </script>
		            <?php
            }else{
            		echo mysql_error();
            }
	}
	function hapus_cat($id){
		include "koneksi.php";
		$query=mysqli_query($conn,"delete from kategori where id='$id'");
            if ($query) {
					?>
		            <script type="text/javascript">
		            alert( "Kategori Berhasil Dihapus");
		            window.location.href="kategori.php";
		            </script>
		            <?php
            }else{
            		echo mysql_error();
            }  
	}
	function transaksi(){
		include "koneksi.php";
		$query=mysqli_query($conn,"select * from keranjang");
		$no=1;
		while ($data=mysqli_fetch_array($query)) {
			?>
			<tr>
				<td><?= $no ?></td>
				<td><?php echo $data['id_customer'] ?></td>
				
				<td><?php echo $data['nama_barang'] ?></td>
				<td><span><?php echo "Rp. ".number_format($data['harga'],0,',','.') ?> ,-</span><br></td>
				
				<td><?php echo "Rp. ".number_format($data['total_harga'],0,',','.') ?></td>
				<td><a class="btn btn-warning" href="hand.php?act=hapus_keranjang&id=<?php echo $data['id'] ?>" class="b">Hapus</a></td>
			</tr>
			<?php
			$no++;
		}
	}
	function hapus_keranjang($id){
		include "koneksi.php";

		$query=mysqli_query($conn,"DELETE from keranjang where id='$id'");
		if ($query) {
			?>
			<script type="text/javascript">
				alert("data berhasil dihapus");
				window.location.href="transaksi.php";
			</script>
			<?php
		}else{

			?>
			<script type="text/javascript">
				alert("data gagal dihapus");
				window.location.href="transaksi.php";
			</script>
			<?php
		}

		/*header("location:keranjang.php");*/
	}
}
$data=new bigdata();
 ?>