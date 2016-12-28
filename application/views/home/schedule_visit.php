<script>
$document.ready(function() {
     $( "#date" ).datepicker({ dateFormat: 'dd-mm-yy'}); 
})
</script>
<div class="col-sm-5 col-sm-offset-3">
	<h2>
		<span class="glyphicon glyphicon-time"></span>
		Schedule Visit
	</h2><hr/>
	<form action="user/save_scheduled_visit" method="post">
	Contact no:<br>
		<input type="text" name="contact" class="form-control" required oninvalid="this.setCustomValidity('Please enter a valid phone number')" pattern="[0-9]{10}">
		<br>
		Date:
		<input type="date" id="date" name="date" required class="form-control">
		<br>
		Time:
		<input type="time" name="time" required class="form-control"></input>
		<br>
		<input type="hidden" name="pg_id" value="<?= $id;?>"/>
		<input type="submit" class="btn btn-success">
	</form>
</div>
