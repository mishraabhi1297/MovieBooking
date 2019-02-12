<?php
session_start();
?>

<br/><br/>
<div class="form-group">
	<div class="row" style="border:1px solid black;padding:10px;background-color:#8c8c8c">
		<div class="col-sm-2" style="padding:10px">
			<label>Adult (18-60):</label>
		</div>
		<div class="col-sm-6" style="padding:10px">
			<div class="input-group">
				<span class="input-group-btn">
					<button type="button" class="quantity-left-minus btn btn-danger btn-number" ng-if="formData.quantityAdult>0" ng-click="formData.quantityAdult = formData.quantityAdult-1">
						<span class="glyphicon glyphicon-minus"></span>
					</button>
				</span>
				<input type="number" id="quantityAdult" name="quantityAdult" class="form-control" ng-model="formData.quantityAdult" value="10" min="1" max="100">
				<span class="input-group-btn">
					<button type="button" class="quantity-right-plus btn btn-success btn-number" ng-click="formData.quantityAdult = formData.quantityAdult+1">
						<span class="glyphicon glyphicon-plus"></span>
					</button>
				</span>
			</div>
		</div>
		<div class="col-sm-4" style="padding:10px">
			<p>Cost: AUD18 per person</p>
		</div>
	</div>
	
	<div class="row" style="border:1px solid black;padding:10px;background-color:#8c8c8c">
		<div class="col-sm-2" style="padding:10px">
			<label>Children (Under 18):</label>
		</div>
		<div class="col-sm-6" style="padding:10px">
			<div class="input-group">
				<span class="input-group-btn">
					<button type="button" class="quantity-left-minus btn btn-danger btn-number" ng-if="formData.quantityChildren>0" ng-click="formData.quantityChildren = formData.quantityChildren-1">
						<span class="glyphicon glyphicon-minus"></span>
					</button>
				</span>
				<input type="number" id="quantityChildren" name="quantityChildren" class="form-control" ng-model="formData.quantityChildren" value="10" min="1" max="100">
				<span class="input-group-btn">
					<button type="button" class="quantity-right-plus btn btn-success btn-number" ng-click="formData.quantityChildren = formData.quantityChildren+1">
						<span class="glyphicon glyphicon-plus"></span>
					</button>
				</span>
			</div>
		</div>
		<div class="col-sm-4" style="padding:10px">
			<p>Cost: AUD15 per person</p>
		</div>
	</div>
	
	<div class="row" style="border:1px solid black;padding:10px;background-color:#8c8c8c">
		<div class="col-sm-2" style="padding:10px">
			<label>Senior Citizen (Over 60):</label>
		</div>
		<div class="col-sm-6" style="padding:10px">
			<div class="input-group">
				<span class="input-group-btn">
					<button type="button" class="quantity-left-minus btn btn-danger btn-number" ng-if="formData.quantitySenior>0" ng-click="formData.quantitySenior = formData.quantitySenior-1">
						<span class="glyphicon glyphicon-minus"></span>
					</button>
				</span>
				<input type="number" id="quantitySenior" name="quantitySenior" class="form-control" ng-model="formData.quantitySenior" value="10" min="1" max="100">
				<span class="input-group-btn">
					<button type="button" class="quantity-right-plus btn btn-success btn-number" ng-click="formData.quantitySenior = formData.quantitySenior+1">
						<span class="glyphicon glyphicon-plus"></span>
					</button>
				</span>
			</div>
		</div>
		<div class="col-sm-4" style="padding:10px">
			<p>Cost: AUD10 per person</p>
		</div>
	</div>
	
	<div class="row" style="border:1px solid black;padding:10px;background-color:#8c8c8c">
		<div class="col-sm-2" style="padding:10px">
			<label>Concession:</label>
		</div>
		<div class="col-sm-6" style="padding:10px">
			<div class="input-group">
				<span class="input-group-btn">
					<button type="button" class="quantity-left-minus btn btn-danger btn-number" ng-if="formData.quantityConcession>0" ng-click="formData.quantityConcession = formData.quantityConcession-1">
						<span class="glyphicon glyphicon-minus"></span>
					</button>
				</span>
				<input type="number" id="quantityConcession" name="quantityConcession" class="form-control" ng-model="formData.quantityConcession" value="10" min="1" max="100">
				<span class="input-group-btn">
					<button type="button" class="quantity-right-plus btn btn-success btn-number" ng-click="formData.quantityConcession = formData.quantityConcession+1">
						<span class="glyphicon glyphicon-plus"></span>
					</button>
				</span>
			</div>
		</div>
		<div class="col-sm-4" style="padding:10px">
			<p>Cost: AUD12 per person</p>
		</div>
	</div>
</div>

<div ng-if="!formData.quantityAdult">
	<div ng-init="formData.quantityAdult=0"></div>
</div>

<div ng-if="!formData.quantityChildren">
	<div ng-init="formData.quantityChildren=0"></div>
</div>

<div ng-if="!formData.quantitySenior">
	<div ng-init="formData.quantitySenior=0"></div>
</div>

<div ng-if="!formData.quantityConcession">
	<div ng-init="formData.quantityConcession=0"></div>
</div>

<div>
	<div ng-model="formData.totalTickets=formData.quantityAdult+formData.quantityChildren+formData.quantitySenior+formData.quantityConcession"></div>
	<h3 ng-model="formData.totalPrice=calculateTotalPrice(formData.quantityAdult, formData.quantityChildren, formData.quantitySenior, formData.quantityConcession)">Total Price: AUD{{calculateTotalPrice(formData.quantityAdult, formData.quantityChildren, formData.quantitySenior, formData.quantityConcession)}}</h3>
</div>

<div class="form-group row">
	<div class="col-sm-6">
		<a ui-sref="template.theatre" class="btn btn-block btn-info">
		<span class="glyphicon glyphicon-circle-arrow-left"> Previous</a>
	</div>
	<div class="col-sm-6">
		<a ui-sref="template.seat" class="btn btn-block btn-primary">
		Next <span class="glyphicon glyphicon-circle-arrow-right"></a>
	</div>
</div>