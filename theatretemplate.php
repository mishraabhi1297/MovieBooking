<?php
session_start();
?>

<div class="form-group">
	<label for="date">Please select a Date:</label>
	<input type="date" class="form-control" name="date" ng-model="formData.date">
</div>

<?php

// Open the Database connection
$DBConnection = @mysqli_connect("feenix-mariadb.swin.edu.au", "s100864950","120897", "s100864950_db")
Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ". 
mysqli_connect_errno().": ". mysqli_connect_error()). "</p>"; 

//Display the list of theatres
$result = $DBConnection->query("select Id, Name from ECTheatre");

echo "<div class='form-group'>
	<label for='theatre'>Select Theatre:</label>
	<select name='theatre' class='form-control' ng-model='formData.theatre'>";
	
	while($row = $result->fetch_assoc())
	{
		unset($id, $name);
		$id = $row['Id'];
		$name = $row['Name'];
		echo "<option value='$id'>$name</option>";
	}
	
echo "</select>
	</div>";

//Display the radio buttons for show times	
$result1 = $DBConnection->query("select Id, Name from ECShows");

echo "<div class='form-group'>
	<label for='show'>Select Show Timing:</label>";
	
	while($row1 = $result1->fetch_assoc())
	{
		unset($id1, $name1);
		$id1 = $row1['Id'];
		$name1 = $row1['Name'];
		//echo "<option value='$id1'>$name1</option>";
		echo "<div class='radio'>
			<label>
			<input type='radio' ng-model='formData.show' value='$id1'>$name1
			</label>
			</div>";
	}
	
echo "</div>";

?>

<div class="form-group row">
	<div class="col-sm-6">
		<a ui-sref="template.movie" class="btn btn-block btn-info">
		<span class="glyphicon glyphicon-circle-arrow-left"> Previous</a>
	</div>
	<div class="col-sm-6">
		<a ui-sref="template.quantity" class="btn btn-block btn-primary">
		Next <span class="glyphicon glyphicon-circle-arrow-right"></a>
	</div>
</div>