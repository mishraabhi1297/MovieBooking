<?php
session_start();
?>

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
    <div class="col-xs-6 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a href="#sample/12strong">
          <img src="images/12strong.jpg" alt="12 Strong" style="width:100%">
          <div class="caption">
            <p>12 Strong</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a href="#sample/tomb">
          <img src="images/tomb.jpg" alt="Tomb" style="width:100%">
          <div class="caption">
            <p>Tomb Raider</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a href="#sample/rampage">
          <img class="img-responsive" src="images/rampage.jpg" alt="Rampage" style="width:100%">
          <div class="caption">
            <p>Rampage</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a href="#sample/redsparrow">
          <img src="images/redsparrow.jpg" alt="Red Sparrow" style="width:100%">
          <div class="caption">
            <p>Red Sparrow</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a href="#sample/avengers">
          <img src="images/avengers.jpg" alt="Avengers" style="width:100%">
          <div class="caption">
            <p>Avengers: Infinity War</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a href="#sample/wolf">
          <img src="images/wolf.jpg" alt="Wolf of Wall Street" style="width:100%">
          <div class="caption">
            <p>Wolf of Wall Street</p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-6 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a href="#sample/blockers">
          <img src="images/blockers.jpg" alt="Blockers" style="width:100%">
          <div class="caption">
            <p>Blockers</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a href="#sample/thor">
        <img src="images/thor.jpg" alt="Thor" style="width:100%">
          <div class="caption">
            <p>Thor: Ragnarok</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a href="#sample/spiderman">
          <img src="images/spiderman.jpg" alt="Spiderman Homecoming" style="width:100%">
          <div class="caption">
            <p>Spiderman: Homecoming</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a href="#sample/black">
          <img src="images/black.jpg" alt="Black Panther" style="width:100%">
          <div class="caption">
            <p>Black Panther</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a href="#sample/doctor">
          <img src="images/doctor.jpg" alt="Doctor Strange" style="width:100%">
          <div class="caption">
            <p>Doctor Strange</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-2">
      <div class="thumbnail">
        <a href="#sample/deadpool">
          <img src="images/deadpool.jpg" alt="Deadpool" style="width:100%">
          <div class="caption">
            <p>Deadpool</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  
  <div class="row" data-ng-view="">
  </div><br/><br/>
</div>

<div class="row" style="background-color: black">
  <div class="col-md-3">
    <p style="color: white">Copyright</p>
  </div>
  <div class="col-md-3">
    <p style="color: white">Opening Hours</p>
  </div>
  <div class="col-md-3">
    <p style="color: white">News and Upcoming Movies</p>
  </div>
  <div class="col-md-3">
    <p style="color: white">Countdown</p>
  </div>
</div>

<!--</div>-->
<!-- jQuery - required for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap plug-ins file -->
<script src="js/bootstrap.min.js"></script>
<script src="js/angular.min.js"></script>
<script src="js/angular-route.min.js"></script>
<script src="home.js"></script>
</body>

<?php

$cnum = $_SESSION['cnum'];

?>

</html>
