<!DOCTYPE html>
<html>
<head>
	<base href="<?= $this->config->item('base_url');?>/"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/stylesheet.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<title>HHS PG</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<div id="header">
        <nav class="navbar navbar-default navigation-clean-button navbar-head">
            <div class="container_div">
                <div class="navbar-header"><a class="navbar-brand" href="">HHSPG</a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <!-- <ul class="nav navbar-nav">
                        <li class="active" role="presentation"><a href="#">First Item</a></li>
                        <li role="presentation"><a href="#">Second Item</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="#">First Item</a></li>
                                <li role="presentation"><a href="#">Second Item</a></li>
                                <li role="presentation"><a href="#">Third Item</a></li>
                            </ul>
                        </li>
                    </ul> -->
                    <?php if($this->session->userdata('user_id')==null):?>	
	                    <p class="navbar-text navbar-right actions">
		                    <a class="navbar-link login" href="owner">Owner</a>
		                    <a class="btn btn-default action-button" role="button" href="user">User</a>
		                </p>
	                <?php else: ?>
						<p class="navbar-text navbar-right actions">
						<a class="btn btn-default action-button" role="button" href="user/logout">Logout</a>
						</p>
					<?php endif;?>
                </div>
            </div>
        </nav>
    </div>
	
	<div id="body">
