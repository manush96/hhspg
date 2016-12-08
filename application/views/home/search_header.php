<style type="text/css">
	.border_block
	{
		border-left: 1px solid #ccc !important;
	}
	#search_header
	{
		padding: 0px;
		margin: 0px;
	}
	#search_header.col-sm-12
	{
		padding: 0px;
		margin: 0px;
	}
	#search_header .form-control
	{
		width: 100%;
		border-radius: 0px;
		height: 50px;
		border: 0px;
		font-size: 18px;
	}
	#search_header .btn_transparent
	{
		height: 50px;
		width: 100%;
		background: transparent;
		outline: none;
		border: 0px;
		font-size: 18px;
		transition: all 0.3s ease;
	}
	#search_header .btn_transparent:hover
	{
		background: #5a92ed;
		color: white;
	}
	#close_button
	{
		font-size: 120%;
	}
	#close_button:hover
	{
		color: #ccc !important;
	}
</style>
<script type="text/javascript" src="js/search_header.js"></script>
<div id="search_header" class="container-fluid">
	<div class="col-sm-12 lr0pad" style="height: 50px">
		<div class="col-sm-2 lr0pad">
			<select class="form-control" name="city" id="city" data-placeholder="City">
				<option value="Ahmedabad" <?php if($city=="Ahmedabad"):?>selected<?php endif;?>>Ahmedabad</option>
				<option value="Jaipur" <?php if($city=="Jaipur"):?>selected<?php endif;?>>Jaipur</option>
				<option value="Jodhpur" <?php if($city=="Jodhpur"):?>selected<?php endif;?>>Jodhpur</option>
			</select>
		</div>
		<div class="col-sm-4 lr0pad">
			<div class="form-group">
				<input type="search" class="form-control" name="area" id="area" placeholder="Search by locality..." autocomplete="off" autofocus="true" value="<?= $area;?>"/>
				<div id="search_header_list" class="pointer" style="display: none">
					
				</div>
			</div>
		</div>
		<div class="col-sm-5 lr0pad">
			<div class="col-sm-4 border_block lr0pad">
				<select class="form-control" name="range" id="range" placeholder="Price Range">
					<option value="1">&lt; 5000</option>
					<option value="2">5000-10000</option>
					<option value="3">10000-15000</option>
					<option value="4">&gt; 15000</option>
				</select>
			</div>	
			<div class="col-sm-4 border_block lr0pad">
				<select class="form-control" name="gender" id="gender" placeholder="Pg for..">
					<option value="male" <?php if($gender=="male"):?>selected<?php endif;?>>&#9794; Male</option>
					<option value="female" <?php if($gender=="female"):?>selected<?php endif;?>>&#9792; Female</option>
				</select>
			</div>
			<div class="col-sm-4 border_block lr0pad">
				<select class="form-control" name="type" id="type" placeholder="PG type">
					<option value="Executive">Executive</option>
					<option value="Premium">Premium</option>
					<option value="Backpacker">Backpacker</option>
				</select>
			</div>
			
		</div>
		<div class="col-sm-1 border_block lr0pad">
			<button class="btn_transparent" id="search_ajax_result">
				<span class="glyphicon glyphicon-search"></span>
				 Search
			</button>
		</div>
	</div>
</div>