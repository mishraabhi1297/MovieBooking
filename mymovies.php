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
			  <li><a href="booking.php">Booking</a></li>
			  <li class="active"><a href="mymovies.php">My Movies</a></li>
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

</body>

<?php

$cnum = $_SESSION['cnum'];

$DBConnection = @mysqli_connect("feenix-mariadb.swin.edu.au", "s100864950","120897", "s100864950_db")
Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ". 
mysqli_connect_errno().": ". mysqli_connect_error()). "</p>"; 
				
//run SQL query
$SQLstring = "select m.Name, b.date, t.Name, s.Name, b.ticket 
	from ECBooking b 
	inner join ECMovie m on m.Id=b.movieNum
	inner join ECTheatre t on t.Id=b.theatreNum
	inner join ECShows s on s.Id=b.showNum
	where b.cnum=$cnum";
$queryResult = @mysqli_query($DBConnection, $SQLstring) 
Or die ("<p>Unable to login.</p>");

//To count the number of requests on that particular day
$rowcount = mysqli_num_rows($queryResult);

//To count the number of requests on that particular day
$rowcount = mysqli_num_rows($queryResult);

if ($rowcount == 0)
{
	echo "<div class='container'>There are no records of any movie booked by you in our Database.</div>";
}

//fetched Data representation in tabular form
else
{				
	echo "<div class='container'><h3>List of movies booked with Essential Cinemas</h3>";
		
	echo "<table class='table table-striped table-hover'>";
	echo "<tr><th>Movie Name</th><th>Movie Date</th><th>Theatre Name</th><th>Show Time</th><th>Tickets</th></tr>";
	$row = mysqli_fetch_row($queryResult);
		
	while ($row) 
	{
		echo "<tr><td>{$row[0]}</td>";
		echo "<td>{$row[1]}</td>";
		echo "<td>{$row[2]}</td>";
		echo "<td>{$row[3]}</td>";
		echo "<td>{$row[4]}</td></tr>";
		$row = mysqli_fetch_row($queryResult);
	}
	echo "</table></div>";
	
	//Close Database
	mysqli_close($DBConnection);
}

?>

</html>
