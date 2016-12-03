<script type="text/javascript" src="js/visited.js"></script>
<div class="col-sm-12" >
	<h4>
	<div class="col-sm-1 " >
		ID
	</div>
	<div class="col-sm-3">
		PG Name
	</div>
	<div class="col-sm-4">
		Descriptio	
	</div>
	<div class="col-sm-2">
		Contact
	</div>
	<div class="col-sm-2">
		Request handled
	</div>
	</h4>
</div>
<?php
foreach ($details as $k) 
{	?>	
	<div class="col-sm-12 owner_row">
		<div class="col-sm-1">
			<?= $k['id'] ?>
		</div>
		<div class="col-sm-3">
			<?= $k['pg'] ?>
		</div>
		<div class="col-sm-4">
			<?= $k['description'] ?>
		</div>
		<div class="col-sm-2">
			<?= $k['contact'] ?>
		</div>
		<div class="col-sm-2">
			<button class="handled" rel="<?= $k['id'] ?>"> Request handled</button>
		</div>
	</div>
<?php
}
?>
