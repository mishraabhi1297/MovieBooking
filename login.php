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
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
			<h1 class="text-center login-title">Sign into Essential Cinemas</h1>
            <div class="account-wall">
                <img class="profile-img" src="images/ec.jpg" alt="">
				<form class="form-signin" method="post">
					<input class="form-control" type="number" name="cnum" placeholder="Customer Number" />
					<input class="form-control" type="password" name="pswrd" placeholder="Password" />
					<input class="btn btn-lg btn-primary btn-block" type="submit" value="Login" />
				</form>
			</div>
			<a href="signup.php" class="text-center new-account">Create new account </a>
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

//Abhishek Mishra (100864950)
//This page is used for login purposes once a user is registered into the system

//if all fields filled out
if(isset($_POST['cnum']) && isset($_POST['pswrd']) )
{	
	//assign variables
	$cnum = $_POST['cnum'];
	$password = $_POST['pswrd'];
	$_SESSION['cnum'] = "$cnum";
	
	// Open the Database connection
	$DBConnection = @mysqli_connect("feenix-mariadb.swin.edu.au", "s100864950","120897", "s100864950_db")
	Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ". 
	mysqli_connect_errno().": ". mysqli_connect_error()). "</p>"; 
					
	//run SQL query
	$SQLstring = "select * from ECRegister where Id = '".$_POST['cnum']."' and Password = '".$_POST['pswrd']."'";
	$queryResult = @mysqli_query($DBConnection, $SQLstring) 
		Or die ("<p>Unable to login.</p>");
	$rowcount = mysqli_num_rows($queryResult);
	
	//if the query result bring 1 row then redirect
	if($rowcount == 1)
	{
		$SQLstring1 = "select Name from ECRegister where Id = '".$_POST['cnum']."' and Password = '".$_POST['pswrd']."'";
		$queryResult1 = @mysqli_query($DBConnection, $SQLstring1) 
		Or die ("<p>Unable to login.</p>");
		$getCustName = mysqli_fetch_assoc($queryResult1);
		$_SESSION['custName'] = $getCustName['Name'];
		header("Location: home.php");
	}
	
	//if the query result brings 0 rows then invalid detail entered
	else
	{	
		$message = "Invalid Customer Number or Password";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	
	//Close the Database Connection
	mysqli_close($DBConnection);
}
 
?> 

</html>
