<script type="text/javascript" src="js/index.js"></script>
<div class=" col-sm-10" id="center">
	<div class="col-sm-4">
		<select class="form-control" name="city" id="city" data-placeholder="City">
			<option value="Ahmedabad" selected>Ahmedabad</option>
			<option value="Jaipur">Jaipur</option>
			<option value="Jodhpur">Jodhpur</option>
		</select>
	</div>
	<div class="col-sm-6">
		<input type="search" class="form-control" name="area" id="area" placeholder="Area" value="Jodh" autocomplete="off"/>
		<div id="search_list" style="display: none">
			
		</div>
	</div>
	<div class="col-sm-2">
		<button type="button" id="search_pgs" class="btn btn-primary">
			<span class="glyphicon glyphicon-search"></span>
			 Search
		</button>
	</div>
</div>