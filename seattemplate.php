<?php
session_start();
?>

<div class="screen">
	<h1>Screen</h1>
</div><br/><br/>

<div>
	<ol class="cabin fuselage">
		<li class="row row--1">
			<ol class="seats" type="A">
				<li class="seat">
					<input type="checkbox" id="A1" ng-model="formData.A1.checked" ng-click="checking(formData.A1)" ng-disabled="!formData.A1.checked && counter === formData.totalTickets" />
					<label for="A1">A1</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="B1" ng-model="formData.B1.checked" ng-click="checking(formData.B1)" ng-disabled="!formData.B1.checked && counter === formData.totalTickets" />
					<label for="B1">B1</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="C1" ng-model="formData.C1.checked" ng-click="checking(formData.C1)" ng-disabled="!formData.C1.checked && counter === formData.totalTickets" />
					<label for="C1">C1</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="D1" ng-model="formData.D1.checked" ng-click="checking(formData.D1)" ng-disabled="!formData.D1.checked && counter === formData.totalTickets" />
					<label for="D1">D1</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="E1" ng-model="formData.E1.checked" ng-click="checking(formData.E1)" ng-disabled="!formData.E1.checked && counter === formData.totalTickets" />
					<label for="E1">E1</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="F1" ng-model="formData.F1.checked" ng-click="checking(formData.F1)" ng-disabled="!formData.F1.checked && counter === formData.totalTickets" />
					<label for="F1">F1</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="G1" ng-model="formData.G1.checked" ng-click="checking(formData.G1)" ng-disabled="!formData.G1.checked && counter === formData.totalTickets" />
					<label for="G1">G1</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="H1" ng-model="formData.H1.checked" ng-click="checking(formData.H1)" ng-disabled="!formData.H1.checked && counter === formData.totalTickets" />
					<label for="H1">H1</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="I1" ng-model="formData.I1.checked" ng-click="checking(formData.I1)" ng-disabled="!formData.I1.checked && counter === formData.totalTickets" />
					<label for="I1">I1</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="J1" ng-model="formData.J1.checked" ng-click="checking(formData.J1)" ng-disabled="!formData.J1.checked && counter === formData.totalTickets" />
					<label for="J1">J1</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="K1" ng-model="formData.K1.checked" ng-click="checking(formData.K1)" ng-disabled="!formData.K1.checked && counter === formData.totalTickets" />
					<label for="K1">K1</label>
				</li>
			</ol>
		</li>
		
		<li class="row row--2">
			<ol class="seats" type="A">
				<li class="seat">
					<input type="checkbox" id="A2" ng-model="formData.A2.checked" ng-click="checking(formData.A2)" ng-disabled="!formData.A2.checked && counter === formData.totalTickets" />
					<label for="A2">A2</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="B2" ng-model="formData.B2.checked" ng-click="checking(formData.B2)" ng-disabled="!formData.B2.checked && counter === formData.totalTickets" />
					<label for="B2">B2</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="C2" ng-model="formData.C2.checked" ng-click="checking(formData.C2)" ng-disabled="!formData.C2.checked && counter === formData.totalTickets" />
					<label for="C2">C2</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="D2" ng-model="formData.D2.checked" ng-click="checking(formData.D2)" ng-disabled="!formData.D2.checked && counter === formData.totalTickets" />
					<label for="D2">D2</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="E2" ng-model="formData.E2.checked" ng-click="checking(formData.E2)" ng-disabled="!formData.E2.checked && counter === formData.totalTickets" />
					<label for="E2">E2</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="F2" ng-model="formData.F2.checked" ng-click="checking(formData.F2)" ng-disabled="!formData.F2.checked && counter === formData.totalTickets" />
					<label for="F2">F2</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="G2" ng-model="formData.G2.checked" ng-click="checking(formData.G2)" ng-disabled="!formData.G2.checked && counter === formData.totalTickets" />
					<label for="G2">G2</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="H2" ng-model="formData.H2.checked" ng-click="checking(formData.H2)" ng-disabled="!formData.H2.checked && counter === formData.totalTickets" />
					<label for="H2">H2</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="I2" ng-model="formData.I2.checked" ng-click="checking(formData.I2)" ng-disabled="!formData.I2.checked && counter === formData.totalTickets" />
					<label for="I2">I2</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="J2" ng-model="formData.J2.checked" ng-click="checking(formData.J2)" ng-disabled="!formData.J2.checked && counter === formData.totalTickets" />
					<label for="J2">J2</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="K2" ng-model="formData.K2.checked" ng-click="checking(formData.K2)" ng-disabled="!formData.K2.checked && counter === formData.totalTickets" />
					<label for="K2">K2</label>
				</li>
			</ol>
		</li>
		
		<li class="row row--3">
			<ol class="seats" type="A">
				<li class="seat">
					<input type="checkbox" id="A3" ng-model="formData.A3.checked" ng-click="checking(formData.A3)" ng-disabled="!formData.A3.checked && counter === formData.totalTickets" />
					<label for="A3">A3</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="B3" ng-model="formData.B3.checked" ng-click="checking(formData.B3)" ng-disabled="!formData.B3.checked && counter === formData.totalTickets" />
					<label for="B3">B3</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="C3" ng-model="formData.C3.checked" ng-click="checking(formData.C3)" ng-disabled="!formData.C3.checked && counter === formData.totalTickets" />
					<label for="C3">C3</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="D3" ng-model="formData.D3.checked" ng-click="checking(formData.D3)" ng-disabled="!formData.D3.checked && counter === formData.totalTickets" />
					<label for="D3">D3</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="E3" ng-model="formData.E3.checked" ng-click="checking(formData.E3)" ng-disabled="!formData.E3.checked && counter === formData.totalTickets" />
					<label for="E3">E3</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="F3" ng-model="formData.F3.checked" ng-click="checking(formData.F3)" ng-disabled="!formData.F3.checked && counter === formData.totalTickets" />
					<label for="F3">F3</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="G3" ng-model="formData.G3.checked" ng-click="checking(formData.G3)" ng-disabled="!formData.G3.checked && counter === formData.totalTickets" />
					<label for="G3">G3</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="H3" ng-model="formData.H3.checked" ng-click="checking(formData.H3)" ng-disabled="!formData.H3.checked && counter === formData.totalTickets" />
					<label for="H3">H3</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="I3" ng-model="formData.I3.checked" ng-click="checking(formData.I3)" ng-disabled="!formData.I3.checked && counter === formData.totalTickets" />
					<label for="I3">I3</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="J3" ng-model="formData.J3.checked" ng-click="checking(formData.J3)" ng-disabled="!formData.J3.checked && counter === formData.totalTickets" />
					<label for="J2">J2</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="K3" ng-model="formData.K3.checked" ng-click="checking(formData.K3)" ng-disabled="!formData.K3.checked && counter === formData.totalTickets" />
					<label for="K3">K3</label>
				</li>
			</ol>
		</li>
		
		<li class="row row--4">
			<ol class="seats" type="A">
				<li class="seat">
					<input type="checkbox" id="A4" ng-model="formData.A4.checked" ng-click="checking(formData.A4)" ng-disabled="!formData.A4.checked && counter === formData.totalTickets" />
					<label for="A4">A4</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="B4" ng-model="formData.B4.checked" ng-click="checking(formData.B4)" ng-disabled="!formData.B4.checked && counter === formData.totalTickets" />
					<label for="B4">B4</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="C4" ng-model="formData.C4.checked" ng-click="checking(formData.C4)" ng-disabled="!formData.C4.checked && counter === formData.totalTickets" />
					<label for="C4">C4</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="D4" ng-model="formData.D4.checked" ng-click="checking(formData.D4)" ng-disabled="!formData.D4.checked && counter === formData.totalTickets" />
					<label for="D4">D4</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="E4" ng-model="formData.E4.checked" ng-click="checking(formData.E4)" ng-disabled="!formData.E4.checked && counter === formData.totalTickets" />
					<label for="E4">E4</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="F4" ng-model="formData.F4.checked" ng-click="checking(formData.F4)" ng-disabled="!formData.F4.checked && counter === formData.totalTickets" />
					<label for="F4">F4</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="G4" ng-model="formData.G4.checked" ng-click="checking(formData.G4)" ng-disabled="!formData.G4.checked && counter === formData.totalTickets" />
					<label for="G4">G4</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="H4" ng-model="formData.H4.checked" ng-click="checking(formData.H4)" ng-disabled="!formData.H4.checked && counter === formData.totalTickets" />
					<label for="H4">H4</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="I4" ng-model="formData.I4.checked" ng-click="checking(formData.I4)" ng-disabled="!formData.I4.checked && counter === formData.totalTickets" />
					<label for="I4">I4</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="J4" ng-model="formData.J4.checked" ng-click="checking(formData.J4)" ng-disabled="!formData.J4.checked && counter === formData.totalTickets" />
					<label for="J4">J4</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="K4" ng-model="formData.K4.checked" ng-click="checking(formData.K4)" ng-disabled="!formData.K4.checked && counter === formData.totalTickets" />
					<label for="K4">K4</label>
				</li>
			</ol>
		</li>
		
		<li class="row row--5">
			<ol class="seats" type="A">
				<li class="seat">
					<input type="checkbox" id="A5" ng-model="formData.A5.checked" ng-click="checking(formData.A5)" ng-disabled="!formData.A5.checked && counter === formData.totalTickets" />
					<label for="A5">A5</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="B5" ng-model="formData.B5.checked" ng-click="checking(formData.B5)" ng-disabled="!formData.B5.checked && counter === formData.totalTickets" />
					<label for="B5">B5</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="C5" ng-model="formData.C5.checked" ng-click="checking(formData.C5)" ng-disabled="!formData.C5.checked && counter === formData.totalTickets" />
					<label for="C5">C5</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="D5" ng-model="formData.D5.checked" ng-click="checking(formData.D5)" ng-disabled="!formData.D5.checked && counter === formData.totalTickets" />
					<label for="D5">D5</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="E5" ng-model="formData.E5.checked" ng-click="checking(formData.E5)" ng-disabled="!formData.E5.checked && counter === formData.totalTickets" />
					<label for="E5">E5</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="F5" ng-model="formData.F5.checked" ng-click="checking(formData.F5)" ng-disabled="!formData.F5.checked && counter === formData.totalTickets" />
					<label for="F5">F5</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="G5" ng-model="formData.G5.checked" ng-click="checking(formData.G5)" ng-disabled="!formData.G5.checked && counter === formData.totalTickets" />
					<label for="G5">G5</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="H5" ng-model="formData.H5.checked" ng-click="checking(formData.H5)" ng-disabled="!formData.H5.checked && counter === formData.totalTickets" />
					<label for="H5">H5</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="I5" ng-model="formData.I5.checked" ng-click="checking(formData.I5)" ng-disabled="!formData.I5.checked && counter === formData.totalTickets" />
					<label for="I5">I5</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="J5" ng-model="formData.J5.checked" ng-click="checking(formData.J5)" ng-disabled="!formData.J5.checked && counter === formData.totalTickets" />
					<label for="J5">J5</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="K5" ng-model="formData.K5.checked" ng-click="checking(formData.K5)" ng-disabled="!formData.K5.checked && counter === formData.totalTickets" />
					<label for="K5">K5</label>
				</li>
			</ol>
		</li>
		
		<li class="row row--6">
			<ol class="seats" type="A">
				<li class="seat">
					<input type="checkbox" id="A6" ng-model="formData.A6.checked" ng-click="checking(formData.A6)" ng-disabled="!formData.A6.checked && counter === formData.totalTickets" />
					<label for="A6">A6</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="B6" ng-model="formData.B6.checked" ng-click="checking(formData.B6)" ng-disabled="!formData.B6.checked && counter === formData.totalTickets" />
					<label for="B6">B6</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="C6" ng-model="formData.C6.checked" ng-click="checking(formData.C6)" ng-disabled="!formData.C6.checked && counter === formData.totalTickets" />
					<label for="C6">C6</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="D6" ng-model="formData.D6.checked" ng-click="checking(formData.D6)" ng-disabled="!formData.D6.checked && counter === formData.totalTickets" />
					<label for="D6">D6</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="E6" ng-model="formData.E6.checked" ng-click="checking(formData.E6)" ng-disabled="!formData.E6.checked && counter === formData.totalTickets" />
					<label for="E6">E6</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="F6" ng-model="formData.F6.checked" ng-click="checking(formData.F6)" ng-disabled="!formData.F6.checked && counter === formData.totalTickets" />
					<label for="F6">F6</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="G6" ng-model="formData.G6.checked" ng-click="checking(formData.G6)" ng-disabled="!formData.G6.checked && counter === formData.totalTickets" />
					<label for="G6">G6</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="H6" ng-model="formData.H6.checked" ng-click="checking(formData.H6)" ng-disabled="!formData.H6.checked && counter === formData.totalTickets" />
					<label for="H6">H6</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="I6" ng-model="formData.I6.checked" ng-click="checking(formData.I6)" ng-disabled="!formData.I6.checked && counter === formData.totalTickets" />
					<label for="I5">I5</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="J6" ng-model="formData.J6.checked" ng-click="checking(formData.J6)" ng-disabled="!formData.J6.checked && counter === formData.totalTickets" />
					<label for="J6">J6</label>
				</li>
				<li class="seat">
					<input type="checkbox" id="K6" ng-model="formData.K6.checked" ng-click="checking(formData.K6)" ng-disabled="!formData.K6.checked && counter === formData.totalTickets" />
					<label for="K6">K6</label>
				</li>
			</ol>
		</li>
	</ol>
</div>

<div class="form-group row">
	<div class="col-sm-6">
		<a ui-sref="template.quantity" class="btn btn-block btn-info">
		<span class="glyphicon glyphicon-circle-arrow-left"> Previous</a>
	</div>
	<div class="col-sm-6">
		<a ui-sref="template.payment" class="btn btn-block btn-primary">
		Next <span class="glyphicon glyphicon-circle-arrow-right"></a>
	</div>
</div>