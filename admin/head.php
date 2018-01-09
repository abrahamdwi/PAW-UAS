<?php include "root.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../asset/css/style.css">
<div class="contaier">

	<nav class="con">
		<ul class="left-ad">
			<li><a href="home.php">Home</a></li>
			<li><a href="customer.php">User</a></li>
			<li><a href="barang.php">Barang</a></li>
			<li><a href="kategori.php">Kategori</a></li>
			<li><a href="Transaksi.php">Transaksi</a></li>

		</ul>
		<ul class="right-ad">
			<li><a id="pesan_sedia" href="#" data-toggle="modal" data-target="#modalpesan"><span class='glyphicon glyphicon-comment'></span>  Pesan</a></li>
			
			<li><a href="hand.php?act=logout"><?= $_SESSION['username'] ?> (Logout)</a></li>
		</ul>
		<div class="both"></div>
	</nav>


<div class="container">	
	<header style="border-bottom:1px solid #f1f1f1">
		<h1><span class="glyphicon glyphicon-briefcase"></span> BECOLLECTORS</h1>
		<p> WELCOME TO DASHBOARD <?php echo $_SESSION['nama']; ?></p>
	</header>

</div>