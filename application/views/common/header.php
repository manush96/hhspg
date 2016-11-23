<!DOCTYPE html>
<html>
<head>
	<base href="<?= $this->config->item('base_url');?>/"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/stylesheet.css">
	<title>HHS PG</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<div class="container-fluid navbar" id="header" style="background: #ccc">
		<h2 class="text-center">HHS PG</h2>
		<h2 class="text-right">
		<?php 
			if($this->session->userdata('user_id')!=null)
			{
		?>
				<a href="logout">Logout</a>
		<?php
			}					
			else
			{
		?>
			<a href="login">Login</a>
		<?php
			}
		?>
		</h2>
	</div>
	<div class="clearfix"></div>
	
	<div id="body" class="container-fluid">
