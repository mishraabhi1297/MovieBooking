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
				<li class="active"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
			<h1 class="text-center login-title">Register into Essential Cinemas</h1>
            <div class="account-wall">
                <img class="profile-img" src="images/ec.jpg" alt="">
				<form class="form-signin" method="post">
					<input class="form-control" type="text" name="name" placeholder="Full Name" />
					<input class="form-control" type="text" name="email" placeholder="Email Address" />
					<input class="form-control" type="password" name="pswrd" placeholder="Password" />
					<input class="form-control" type="password" name="cpswrd" placeholder="Confirm Password" />
					<input class="btn btn-lg btn-primary btn-block" type="submit" value="Register" />
				</form>
			</div>
			<a href="login.php" class="text-center new-account">Already have a account? Login here </a>
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

if(isset($_POST['name']) && isset($_POST['pswrd']) && isset($_POST['cpswrd']) && isset($_POST['email']))
{
	// Assignment of different inputs provided by the User
	$name = $_POST['name'];
	$password = $_POST['pswrd'];
	$cpassword = $_POST['cpswrd'];
	$email = $_POST['email'];
		
	// To check if all the fields have been filled out or not
	if($name == "" || $password == "" || $cpassword == "" || $email == "")
	{
		$message1 = "Please make sure that none of the input fields are empty";
		echo "<script type='text/javascript'>alert('$message1');</script>";
	}
	
	else
	{	
		// Once proceed if both the password and confirm password match
		if($password == $cpassword)
		{
			// Open the Database connection
			$DBConnection = @mysqli_connect("feenix-mariadb.swin.edu.au", "s100864950","120897", "s100864950_db")
			Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ". 
			mysqli_connect_errno().": ". mysqli_connect_error()). "</p>"; 
			
			$SQLstring = "select * from ECRegister where Email = '".$_POST['email']."'";
			$queryResult = @mysqli_query($DBConnection, $SQLstring);
			$rowcount = mysqli_num_rows($queryResult);
				
			//Unique Email Address Check
			if ($rowcount == 1)
			{
				$message3 = "The Email Address you have entered already exists in the Database.";
				echo "<script type='text/javascript'>alert('$message3');</script>";
			}
			else
			{
				$sqlString = "SELECT * FROM ECRegister";
				$queryResult = @mysqli_query($DBConnection, $sqlString);
				$numRows = mysqli_num_rows($queryResult);
				
				$assign_cno = $numRows + 101;
				$_SESSION['cnumber'] = $assign_cno;
						
				// Set up of SQL strings and Execution
				$Query = "insert into ECRegister values ('$assign_cno', '$name', '$email', '$password')";
				$Results = mysqli_query($DBConnection, $Query);
				
				$message = "Dear $name, your are successfully registered into Essential Cinemas. Your Customer ID is $assign_cno, which will be used during login. We hope you enjoy watching movies at Essential Cinemas.";
				echo "<script type='text/javascript'>alert('$message');</script>";
				
				mail($email, "Essential Cinemas Registration Conformation", $message, "From: donotreply@essentialcinemas.com");
			
				// Closing the Database Connection
				mysqli_close($DBConnection);
			}
		}
		
		else 
		{
			$message2 = "Please make sure that your passwords match";
			echo "<script type='text/javascript'>alert('$message2');</script>";
		}	
	}
}
		
?>

</html>
