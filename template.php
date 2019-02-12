<style>
/* form styling */
#form-container                { margin-bottom:20px;
    border-radius:5px; }
#form-container .page-header   { background:#262626; margin:0; padding:30px; 
    border-top-left-radius:5px; border-top-right-radius:5px; }

/* numbered buttons */
#status-buttons                 {  }
#status-buttons a               { color:#FFF; display:inline-block; font-size:12px; margin-right:10px; text-align:center; text-transform:uppercase; }
#status-buttons a:hover         { text-decoration:none; }

/* we will style the span as the circled number */
#status-buttons span            { background:#080808; display:block; height:30px; margin:0 auto 10px; padding-top:5px; width:30px; 
    border-radius:50%; }

/* active buttons turn light green-blue*/
#status-buttons a.active span   { background:#00BC8C; }
</style>

<div class="conatiner">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">

			<div id="form-container">

				<div class="page-header text-center">
					<h2 style="color:#ffffff">Book Your Movie Ticket</h2>

					<!-- the links to our nested states using relative paths -->
					<!-- add the active class if the state matches our ui-sref -->
					<div id="status-buttons" class="text-center">
						<a ui-sref-active="active" ui-sref=".movie"><span>1</span> Movie</a>
						<a ui-sref-active="active" ui-sref=".theatre"><span>2</span> Theatre</a>
						<a ui-sref-active="active" ui-sref=".quantity"><span>3</span> Quantity</a>
						<a ui-sref-active="active" ui-sref=".seat"><span>4</span> Seat</a>
						<a ui-sref-active="active" ui-sref=".payment"><span>5</span> Payment</a>
					</div>
				</div>

				<!-- use ng-submit to catch the form submission and use our Angular function -->
				<form id="signup-form" ng-submit="processForm()">

					<!-- our nested state views will be injected here -->
					<div id="form-views" ui-view></div>
				</form>

			</div>

			<!-- show our formData as it is being typed -->
			<!-- <pre>
				{{formData}}
				{{msg}}
			</pre> -->

		</div>
	</div>
</div>