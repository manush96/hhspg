<script type="text/javascript" src="js/index.js"></script>
<div class=" col-sm-10" id="center">
	<form action="home/search" method="GET">
		<div class="col-sm-4">
			<select class="form-control" name="city" data-placeholder="City">
				<option value="Ahmedabad" selected>Ahmedabad</option>
				<option value="Jaipur">Jaipur</option>
				<option value="Jodhpur">Jodhpur</option>
			</select>
		</div>
		<div class="col-sm-6">
			<input type="text" class="form-control" name="area" placeholder="Area" value="Jodh"/>
		</div>
		<div class="col-sm-2">
			<button class="btn btn-primary">
				<span class="glyphicon glyphicon-search"></span>
				 Search
			</button>
		</div>
	</form>
</div>