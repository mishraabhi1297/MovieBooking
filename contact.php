<?php
session_start();
?>

<style>
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
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
			  <li><a href="about.php">About Us</a></li>
			  <li><a href="booking.php">Booking</a></li>
			  <li><a href="mymovies.php">My Movies</a></li>
			  <li class="active"><a href="contact.php">Contact Us</a></li>
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
        <div class="col-sm-6 col-md-4 col-md-offset-4">
			<h1 class="text-center login-title">Contact Us by filling out this form</h1>
            <div class="account-wall">
                <img class="profile-img" src="images/ec.jpg" alt="">
				<form class="form-signin" method="post" action="contact.php">
					<label>What is it regarding?</label>
					<div class="radio">
						<label><input type="radio" name="regarding" value="service" checked>Service</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="regarding" value="staff members">Staff Members</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="regarding" value="cleanliness">Cleanliness</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="regarding" value="work environment">Work Environment</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="regarding" value="other">Other</label>
					</div>
					<textarea class="form-control" rows="7" cols="20" name="enquiry" placeholder="Enquiry" ></textarea><br/>
					<input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit" />
				</form>
			</div>
		</div>
	</div>
</div>

<!--</div>-->
<!-- jQuery - required for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap plug-ins file -->
<script src="js/bootstrap.min.js"></script>
<!--<script src="js/angular.min.js"></script>
<script src="js/angular-route.min.js"></script>-->
</body>

<?php

//if all fields filled out
if(isset($_POST['regarding']) && isset($_POST['enquiry']) )
{	
	//assign variables
	$regarding = $_POST['regarding'];
	$enquiry = $_POST['enquiry'];
	$cnum = $_SESSION['cnum'];
	
	if ($regarding == "" || $enquiry == "")
	{
		$message = "Make sure none of the fields are empty";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else
	{
		// Open the Database connection
		$DBConnection = @mysqli_connect("feenix-mariadb.swin.edu.au", "s100864950","120897", "s100864950_db")
		Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ". 
		mysqli_connect_errno().": ". mysqli_connect_error()). "</p>"; 
		
		// Set up of SQL strings and Execution
		$Query = "insert into ECContact values ('$cnum', '$regarding', '$enquiry')";
		$Results = mysqli_query($DBConnection, $Query);
		
		$message1 = "Thank you for Contacting Us!! We will get back to you within 3 business days.";
		echo "<script type='text/javascript'>alert('$message1');</script>";
		
		//Close the Database Connection
		mysqli_close($DBConnection);
	}
}

?>

</html>
