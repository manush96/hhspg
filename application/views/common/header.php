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
		<h2 class="text-center"><a href="">HHS PG</a></h2>
		<h2 class="text-right">
			<?php if($this->session->userdata('user_id')!=null || $this->session->userdata('owner_id')!=null):?>
				<a href="user/logout">Logout</a>
			<?php else: ?>
				<a href="user">Login</a>
				 | 
				<a href="owner">Owner Login</a>
			<?php endif;?>
		</h2>
	</div>
	<div class="clearfix"></div>
	
	<div id="body" class="container-fluid">
