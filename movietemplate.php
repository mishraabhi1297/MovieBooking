<?php
session_start();
?>

<div class="form-group">
    <label for="email">Email (where the booking cofirmation will be sent):</label>
    <input type="text" class="form-control" name="email" ng-model="formData.email">
</div>

<?php

// Open the Database connection
$DBConnection = @mysqli_connect("feenix-mariadb.swin.edu.au", "s100864950","120897", "s100864950_db")
Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ". 
mysqli_connect_errno().": ". mysqli_connect_error()). "</p>"; 

$result = $DBConnection->query("select Id, Name from ECMovie");

echo "<div class='form-group'>
	<label for='movie'>Select Movie:</label>
	<select name='movie' class='form-control' ng-model='formData.movie'>";
	
	while($row = $result->fetch_assoc())
	{
		unset($id, $name);
		$id = $row['Id'];
		$name = $row['Name'];
		echo "<option value='$id'>$name</option>";
	}
	
echo "</select>
	</div>";

?>

<div class="form-group row">
	<div class="col-sm-6">
	</div>
	<div class="col-sm-6">
		<a ui-sref="template.theatre" class="btn btn-block btn-primary">
		Next <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
	</div>
</div>