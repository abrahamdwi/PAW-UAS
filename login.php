<!-- <link rel="stylesheet" type="text/css" href="css/index.css"> -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assts/js/bootstrap.js"></script>
	<script type="text/javascript" src="asses/js/jquery-ui/jquery-ui.js"></script>
<style type="text/css">
	.kotak{	
		margin-top: 150px;
	}

	.kotak .input-group{
		margin-bottom: 20px;
	}
	</style>
<title>Login</title>	
<div class="login">
<body style="background-image:url(img/7.jpg) ">
	<div class="panel panel-default">
			<form action="hand.php?act=login" method="post">
				<div class="col-md-4 col-md-offset-4 kotak">
					<h3>Silahkan Login ..</h3>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<div class="input-group">			
						<input type="submit" class="btn btn-primary" value="Login">
					</div>
				</div>
			</form>
		</div>
</body>
	<!--  <form action="hand.php?act=login" method="post">
	 	<input type="text" name="username" placeholder="Username">
	 	<input type="password" name="password" placeholder="Password">
	 	<input type="submit" value="Login"> -->

	 	
	 <!-- </form> -->
</div>