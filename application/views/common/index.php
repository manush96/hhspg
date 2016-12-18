<style type="text/css">
	body
	{
		background-image: url("/hhspg/img/banner.jpg"); 
		-webkit-background-size: 100% 100%;
		-moz-background-size: 100% 100%;
		-o-background-size: 100% 100%;
		background-size: 100% 100%;
	}
</style>
<script type="text/javascript" src="js/typed.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

<div class="container-fluid" id="center">
	<div id="intro_container">
		<h1 class="text-center welcome" style="color:black">Rent. Simply. Smartly.</h1>
		<h3 class="text-center" id="anim_header">
			<span id="type_anim_1"></span>
			<span id="type_anim_2"></span>
		</h3>
	</div>
	<div id="search_container">
		<form action="home/search" method="GET" id="search_form">
			<div id="city_div" class="pull-left">
				<select class="center_input" name="city" id="city" data-placeholder="City">
					<option value="Ahmedabad" selected>Ahmedabad</option>
					<option value="Jaipur">Jaipur</option>
					<option value="Kota">Kota</option>
				</select>
			</div>
			<div id="area_div" class="pull-left">
				<input type="search" class="center_input" name="area" id="area" placeholder="Search by locality..." autocomplete="off" autofocus="true" />
				<div id="search_list" style="display: none">
					
				</div>
			</div>
			<div id="gender_div" class="pull-left">
				<select class="center_input" name="gender" id="gender" placeholder="Homes for..">
					<option value="">Homes for..</option>
					<option value="male">&#9794; Male</option>
					<option value="female">&#9792; Female</option>
				</select>
			</div>
			<div id="search_btn_div" class="pull-left">
				<button type="button" id="search_pgs" class="btn center_input" style="background:#2e64ba">
					<span class="glyphicon glyphicon-search"></span>
					 Search
				</button>
			</div>
		</form>
	</div>
</div>
<div class="clearfix"></div><br/>
	<div class="pull-right">	
		<h3>
			<a class="" href="owner" style="color: white">
				<img src="img/owner_img.png" style="height: 100px; width: 250px;"/> 
			</a>
		</h3>
	</div>
</div>