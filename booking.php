<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" data-ng-app="myApp">
<head>
<title>Template that uses Bootstrap and AngularJS</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,
initial-scale=1.0" />
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/normalize.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<!-- HTML5 Shim and Respond.js IE8 support of HTML5
elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the
page via file:// -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
  
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="home.php">Essential Cinemas</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
			  <li><a href="about.php">About Us</a></li>
			  <li class="active"><a href="booking.php">Booking</a></li>
			  <li><a href="mymovies.php">My Movies</a></li>
			  <li><a href="contact.php">Contact Us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
					if(! empty($_SESSION['custName']))
					{
						$loggedInCust = $_SESSION['custName'];
						
						echo "<li class='dropdown'>
						<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Welcome, $loggedInCust
						<span class='caret'></span></a>
						<ul class='dropdown-menu'>
						<li><a href='logout.php'>Logout</a></li>
						</ul>
						</li>";
					}
					else
					{
						echo "<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
						<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
					}
				?>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div ui-view></div>
</div>

<!-- jQuery - required for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- All Bootstrap plug-ins file -->
<script src="js/bootstrap.min.js"></script>
<!-- Basic AngularJS -->
<!-- <script src="js/angular.min.js"></script> -->
<script src="js/angular.js"></script>
<script src="js/angular-animate.min.js"></script>
<script src="js/angular-ui-router.min.js"></script>
<script src="js/modernizr.min.js"></script>
<!-- My App JS -->
<script src="booking.js"></script>

</body>

<?php

$cnum = $_SESSION['cnum'];

?>

</html>
