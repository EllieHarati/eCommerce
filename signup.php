<?php
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Biara</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <script src="jquery/jquery.js"></script>

  </head>
  <body>
	<!-- Header -->
	<nav class="navbar navbar-default" style = "margin-bottom: 10px;">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="biara.php"><span class = "glyphicon glyphicon-gift"></span> Biara</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="dropdown style-text-color-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Homewares <span class="caret"></span></a>
				<ul class="dropdown-menu homewares style-text-color">
					<ul class="list-unstyled col-sm-6 homewares-col1">
							<li><a href="products.php">Decor</a></li>
							<li><a href="products.php">Bed & Bath</a></li>
							<li><a href="products.php">Tableware</a></li>
							<li><a href="products.php">Kitchen</a></li>
							<li><a href="products.php">Lighting</a></li>
						</ul>
						<ul class="list-unstyled col-sm-6 homewares-col2">
							<li><a href="products.php">All Homewares categories</a></li>
							<li><a href="products.php">New Arivals</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="products.php">Sale</a></li>
							<li role="separator" class="divider"></li>
					</ul>
				</ul>
			</li>
			<li class="dropdown style-text-color-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Baby & Kids <span class="caret"></span></a>
				<ul class="dropdown-menu kids style-text-color">
					<ul class="list-unstyled col-sm-6 kids-col1">
						<li><a href="products.php">Kids Furniture</a></li>
						<li><a href="products.php">Kids Decor</a></li>
						<li><a href="products.php">Kids Rugs</a></li>
						<li><a href="products.php">Outdoor Play</a></li>
						<li><a href="products.php">Toys & Gifts</a></li>
					</ul>
					<ul class="list-unstyled col-sm-6 kids-col2">
						<li><a href="products.php">All Baby & Kids categories</a></li>
						<li><a href="products.php">New Arivals</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="products.php">Sale</a></li>
						<li role="separator" class="divider"></li>
					</ul>
				</ul>
			</li>	
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>	
	<!--End Header -->
	<!--Container -->
	<div class = "container">
		<div class = "row">
			<div class = "col-md-6 col-xs-12 ">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Sign up</h3>
					</div>
					<div class="panel-body">
						<div class = "row">
							<div class = "col-md-12 colxs-12">
								<form class="form-horizontal" name="form1" method="post" action="register.php">
									<div class="form-group has-default has-feedback">
										<label for="first_name" class="col-sm-2 control-label">Name</label>
										<div class="col-sm-10">
										  <input  class="form-control" type="text" name = "first_name" id="first_name" placeholder="First Name">
										  <span class = "glyphicon glyphicon-user form-control-feedback"></span>
										</div>
									</div>
									<div class="form-group has-default has-feedback">
										<label for="last_name" class="col-sm-2 control-label">SurName</label>
										<div class="col-sm-10">
										  <input  class="form-control" id="last_name" name = "last_name" type="text" placeholder="Last Name">
										  <span class = "glyphicon glyphicon-user form-control-feedback"></span>
										</div>
									</div>
								  <div class="form-group has-default has-feedback">
									<label for="email" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
									  <input type="email" class="form-control" name = "email" id="email" placeholder="Email">
									  <span class = "glyphicon glyphicon-envelope form-control-feedback"></span>
									</div>
								  </div>
									<div class="form-group has-default has-feedback">
										<label for="phone" class="col-sm-2 control-label">phone</label>
										<div class="col-sm-10">
										  <input  class="form-control" id="phone" name = "phone" type="text" placeholder="phone">
										  <span class = "glyphicon glyphicon-earphone form-control-feedback"></span>
										</div>
									</div>
								  <div class="form-group has-default has-feedback">
									<label for="password" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-10">
									  <input type="password" class="form-control" name = "password" id="password" placeholder="Password">
									  <span class = "glyphicon glyphicon-lock form-control-feedback"></span>
									</div>
								  </div>
								  <div class="form-group has-default has-feedback">
									<label for="repassword" class="col-sm-2 control-label">Re-Password</label>
									<div class="col-sm-10">
									  <input type="password" class="form-control" name = "repassword" id="repassword" placeholder="Re-Password">
									  <span class = "glyphicon glyphicon-lock form-control-feedback"></span>
									</div>
								  </div>
								  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
									  <button type="submit" class="btn btn-default">Register</button>
									</div>
								  </div>
								</form>
								<?php
									//session_start();
									if (isset ($_SESSION['first_name']) && isset ($_SESSION['last_name'])) {
										echo "<p class = 'text-success'><span class= 'glyphicon glyphicon-ok'></span> Thank you " . $_SESSION['first_name'] . " " . $_SESSION['last_name'] . " for your registration. </p>";
										echo "<p class = 'text-success'><span class= 'glyphicon glyphicon-flag'></span> Copy of your information have been sent to your email address. (Have not been activated yet)</p>";
										echo "<a href = 'biara.php'><span class= 'glyphicon glyphicon-shopping-cart'></span> Start shopping</a>";
										session_destroy(); 			
									} if (isset ($_SESSION['msg_signin']))
									{
										echo "<p class = 'text-danger'><span class= 'glyphicon glyphicon-remove'></span>" . " " . $_SESSION['msg_signin'] .  "</p>";
										session_destroy();
									}
								?>
							</div>
						</div>				
					</div>
				</div>		
			</div>
		</div>
	</div>
	<!--End Container -->
	<!--Footer -->
	<div class = "container">
		<hr>
		<footer>
			<div class - "row">
				<div class = "col-md-12">
					<p class = "pull-right"><a href = "#">Back To Top</a>
					<p>Copyright &copy; 2016. <a href = "http://www.elhamharati.com/profile/biara/biara.php"> Biara </a><br/>Designed By <a href = "http://www.elhamharati.com" target="_blank"> Ellie Harati </a></p>
				</div>
			</div>
		</footer>
	</div>
	<!--End Footer -->		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>