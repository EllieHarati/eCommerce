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
	<script src="jquery/dropdownMenu.js"></script>

  </head>
  <body>
	<!-- Header -->
	<nav class="navbar navbar-default" style = "margin-bottom: 0px;">
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

		  <ul class="nav navbar-nav navbar-right">
			<li class="dropdown style-text-color-dropdown">
			<a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="loginDropdown"><span class = "glyphicon glyphicon-user"></span><?php if (!isset ($_SESSION['first_name']) && !isset ($_SESSION['last_name'])) {echo ' Login';} else {echo " " . $_SESSION['first_name'] . " " . $_SESSION['last_name'];}?></a>
			<ul class="dropdown-menu style-text-color" style = "padding: 10px; width: 300px;">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title" style = "text-transform: uppercase;letter-spacing: 2px;">Biara User Account</h3>
						</div>
						<div class="panel-body">
							<?php
							if (!isset ($_SESSION['first_name']) && !isset ($_SESSION['last_name'])) {
								echo "<form class='form-horizontal' method = 'post' action = 'admin_login.php'>
									<div class='form-group has-default has-feedback'>
										<div class='col-sm-12'>
											<input type='email' class='form-control' id='email' name = 'email' placeholder='Enter your email address'>
											<span class = 'glyphicon glyphicon-envelope form-control-feedback'></span>
										</div>
									</div>
									<div class='form-group has-default has-feedback'>
										<div class='col-sm-12'>
										  <input type='password' class='form-control' id='password' name = 'password' placeholder='Enter your Password'>
										  <span class = 'glyphicon glyphicon-lock form-control-feedback'></span>
										</div>
									</div>
									<div class='row'>
										<div class='col-md-12 col-sm-12 col-xs-12'>
											<button type='submit' class='btn btn-default col-md-12 col-sm-12 col-xs-12'>Log in</button>
										</div>
									</div>
								</form>
								<div class='row'>
									<div class='col-md-12'> 
										<p><a href='register.php' class='need-help'>New Customer? Create Account here</a></p>
									</div>
								</div>";								
							}
							?>

								<div class="row">
									<div class="col-md-12">
										<?php
											//session_start();
											if (isset ($_SESSION['first_name']) && isset ($_SESSION['last_name'])) {
												echo $_SESSION['msg'] ;
												echo $_SESSION['showLogoutBtn'];
											} if ((!isset ($_SESSION['first_name']) && !isset ($_SESSION['last_name'])) && (isset ($_SESSION['msg'])))
											{
												echo $_SESSION['msg'] ;
												session_destroy();
											} 
										?>
									</div>
								</div>
						</div>
					</div>
			  </ul>
			</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>	
	<!--End Header -->

	<div class="clearfix" style = "margin-bottom: 20px;"></div>

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
</html>