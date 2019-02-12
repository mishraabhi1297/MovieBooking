<?php
session_start();
?>

<style>

img {
    image-orientation: from-image;
}

</style>

<!DOCTYPE html>
<html lang="en" data-ng-app="myApp">
<head>
<title>Template that uses Bootstrap</title>
  <link rel="icon" type="image/jpg" href="images/ec.jpg" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
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
			  <li class="active"><a href="about.php">About Us</a></li>
			  <li><a href="booking.php">Booking</a></li>
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
	<div class="row">
		<h2>About the Owner</h2>
	</div>
	<div class="row">
		<div class="col-md-2 col-sm-4 col-xs-12">
			<div class="thumbnail">
				<img src="images/owner.jpg" width="100%" alt="Abhishek">
			</div>
		</div>
		<div class="col-md-10 col-sm-8 col-xs-12">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec finibus ultrices nulla sed lacinia. Ut pharetra accumsan tristique. Phasellus accumsan massa sit amet nunc 
			viverra dignissim. Quisque sed ligula tempus, imperdiet ipsum at, feugiat neque. Integer nec lectus dignissim, fringilla libero nec, commodo eros. Vestibulum mattis at 
			lectus sit amet ultrices. Mauris ipsum mi, ultricies non velit in, facilisis condimentum quam. Donec eu quam nec ante sagittis suscipit sed ac lectus. Interdum et malesuada 
			fames ac ante ipsum primis in faucibus. Nunc consectetur, augue sed blandit iaculis, dui risus accumsan risus, quis cursus est massa vitae eros. Nulla facilisi. Maecenas 
			quis justo lobortis, posuere ipsum sed, dignissim nulla.</p>
			<p>Nullam feugiat suscipit metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer id vestibulum eros, at suscipit neque. 
			Integer in arcu at turpis porttitor viverra a et risus. Vivamus et laoreet augue. Etiam bibendum ornare ex, ut pellentesque nulla. Vivamus consequat, tellus at vestibulum 
			pellentesque, mi odio fringilla nisi, molestie sollicitudin libero sem ac nulla. Etiam posuere risus sed facilisis facilisis. Fusce ullamcorper sed leo ut feugiat. Donec 
			interdum enim vitae nulla consequat sagittis. Integer mattis justo rutrum est luctus faucibus. Suspendisse aliquet lorem lectus. Suspendisse vehicula imperdiet erat, a 
			fringilla tortor. Sed fermentum semper faucibus. Integer vel molestie sapien. Proin posuere felis quis lacus laoreet ultrices.</p>
		</div>
	</div>
	
	<div class="row">
		<h2>About our Services</h2>
	</div>
	<div class="row">
		<div class="col-md-6 col-sm-4 col-xs-12">
			<div class="thumbnail">
				<img src="images/service.jpg" width="100%" alt="Service">
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec finibus ultrices nulla sed lacinia. Ut pharetra accumsan tristique. Phasellus accumsan massa sit amet nunc 
			viverra dignissim. Quisque sed ligula tempus, imperdiet ipsum at, feugiat neque. Integer nec lectus dignissim, fringilla libero nec, commodo eros. Vestibulum mattis at 
			lectus sit amet ultrices. Mauris ipsum mi, ultricies non velit in, facilisis condimentum quam. Donec eu quam nec ante sagittis suscipit sed ac lectus. Interdum et malesuada 
			fames ac ante ipsum primis in faucibus. Nunc consectetur, augue sed blandit iaculis, dui risus accumsan risus, quis cursus est massa vitae eros. Nulla facilisi. Maecenas 
			quis justo lobortis, posuere ipsum sed, dignissim nulla.</p>
			<p>Nullam feugiat suscipit metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer id vestibulum eros, at suscipit neque. 
			Integer in arcu at turpis porttitor viverra a et risus. Vivamus et laoreet augue. Etiam bibendum ornare ex, ut pellentesque nulla. Vivamus consequat, tellus at vestibulum 
			pellentesque, mi odio fringilla nisi, molestie sollicitudin libero sem ac nulla. Etiam posuere risus sed facilisis facilisis. Fusce ullamcorper sed leo ut feugiat. Donec 
			interdum enim vitae nulla consequat sagittis. Integer mattis justo rutrum est luctus faucibus. Suspendisse aliquet lorem lectus. Suspendisse vehicula imperdiet erat, a 
			fringilla tortor. Sed fermentum semper faucibus. Integer vel molestie sapien. Proin posuere felis quis lacus laoreet ultrices.</p>
		</div>
	</div>
	
	<div class="row">
		<h2>About our Staff</h2>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="thumbnail">
				<img src="images/staff.jpg" width="100%" alt="Staff">
			</div>
		</div>
		<div class="col-md-8 col-sm-8 col-xs-12">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec finibus ultrices nulla sed lacinia. Ut pharetra accumsan tristique. Phasellus accumsan massa sit amet nunc 
			viverra dignissim. Quisque sed ligula tempus, imperdiet ipsum at, feugiat neque. Integer nec lectus dignissim, fringilla libero nec, commodo eros. Vestibulum mattis at 
			lectus sit amet ultrices. Mauris ipsum mi, ultricies non velit in, facilisis condimentum quam. Donec eu quam nec ante sagittis suscipit sed ac lectus. Interdum et malesuada 
			fames ac ante ipsum primis in faucibus. Nunc consectetur, augue sed blandit iaculis, dui risus accumsan risus, quis cursus est massa vitae eros. Nulla facilisi. Maecenas 
			quis justo lobortis, posuere ipsum sed, dignissim nulla.</p>
			<p>Nullam feugiat suscipit metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer id vestibulum eros, at suscipit neque. 
			Integer in arcu at turpis porttitor viverra a et risus. Vivamus et laoreet augue. Etiam bibendum ornare ex, ut pellentesque nulla. Vivamus consequat, tellus at vestibulum 
			pellentesque, mi odio fringilla nisi, molestie sollicitudin libero sem ac nulla. Etiam posuere risus sed facilisis facilisis. Fusce ullamcorper sed leo ut feugiat. Donec 
			interdum enim vitae nulla consequat sagittis. Integer mattis justo rutrum est luctus faucibus. Suspendisse aliquet lorem lectus. Suspendisse vehicula imperdiet erat, a 
			fringilla tortor. Sed fermentum semper faucibus. Integer vel molestie sapien. Proin posuere felis quis lacus laoreet ultrices.</p>
		</div>
	</div>
</div>

<!--</div>-->
<!-- jQuery - required for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap plug-ins file -->
<script src="js/bootstrap.min.js"></script>
<script src="js/angular.min.js"></script>
<script src="js/angular-route.min.js"></script>
</body>

<?php
?>

</html>
