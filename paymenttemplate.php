<?php
session_start();
$cnum = $_SESSION['cnum'];
$quest = "<div ng-model='formData.cnum=$cnum'></div>";
echo $quest;
?>

<div class="form-group">
	<label for="card_type">Card Type:</label>
	<select name="card_type" class="form-control" ng-model="formData.cardType">
		<option value="visa">VISA</option>
		<option value="master_card">MasterCard</option>
		<option value="american_express">American Express</option>
	</select>
</div>

<div class="form-group">
    <label for="card_name">Name on Card:</label>
    <input type="text" class="form-control" name="card_name" ng-model="formData.cardName">
</div>

<div class="form-group">
    <label for="card_number">Card Number:</label>
    <input type="number" class="form-control" name="card_number" ng-model="formData.cardNumber">
</div>

<div class="form-group">
	<label for="valid_till">Valid Till:</label>
	<input type="date" class="form-control" name="valid_till" ng-model="formData.validTill">
</div>

<div class="form-group row">
	<div class="col-sm-6">
		<a ui-sref="template.seat" class="btn btn-block btn-info">
		<span class="glyphicon glyphicon-circle-arrow-left"> Previous</a>
	</div>
	<div class="col-sm-6">
		<button type="submit" class="btn btn-block btn-success">Submit</button>
	</div>
</div>