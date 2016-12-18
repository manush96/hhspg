<style type="text/css">
	body
	{
		background-image: url("/hhspg/img/banner.jpg"); 
		-webkit-background-size: 100% 40%;
		-moz-background-size: 100% 40%;
		-o-background-size: 100% 40%;
		background-size: 100% 40%;
		background-repeat: no-repeat;
	}
	#bottom_div
	{
		background: #fafafa;
		overflow-y: auto;
		padding: 20px 0px;

	}
	.why_div
	{
		padding-top: 20px;
		background: #fff;
		overflow-y: auto;
		padding-bottom: 10px;
	}
	.border-left
	{
		border-left:  1px solid #ccc;
	}
	.city_div
	{
		cursor: pointer;
	}
	.city_div:hover img
	{
		 opacity: 0.8;
	}
	.city_txt
	{
		color: white;
		position: absolute;
		z-index: 5;
		left: 15%;
		top: 20%;
	}
	.description
	{
		display: none;
	}
	.explore_div
	{
		display: none;
	}
	.why_people
	{
		text-align: center;
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
<div id="bottom_div" style="background: #fafafa">
	<h2 class="text-center">Our cities</h2>
	<br>

	<div class="col-sm-12">
		<div class="col-sm-offset-1 col-sm-3 city_div">
			<h1 class="city_txt">Ahmedabad</h1>
			<img src="img/ahmedabad.jpg" style="height: 200px; width: 250px;"/>
			<p class="description">
				Amongst the whistling packages of the IIM students, and the hustling midnight munchies of Manekchowk, in business capital state of the country (yes, Gujarat) resides the city of Karnavati. Wait, what? Well, that’s what the ace town of Ahmedabad was known by, until the 1400s, when Ahmed Shah I conquered the town and named it ‘Ahmedabad’. 

				Now, the stats that Ahmedabad is the 7th most populated city in the country. What you should know, is why should Ahmedabad be considered, or wait, known as the best city to live in India because its humble, authentic, modern, 
				divine, active, educational hub, alcohol free and beautiful.
				
				So if you are moving to Ahmedabad or planning to do so for any of reason we are here to serve you the right accommodation at right place at right price. 

			</p>
			<div class="explore_div">
				<br/>
				<div class="col-sm-offset-4 col-sm-4">
					<a href="home/search?city=Ahmedabad">
						<button class="btn btn-info">
							Explore 
							<span class="glyphicon glyphicon-share"></span>
						</button>
					</a>
				</div>
			</div>
		</div>
		<div class="col-sm-offset-1 col-sm-3 city_div">
			<h1 class="city_txt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jaipur</h1>
			<img src="img/jaipur.jpg" style="height: 200px; width: 250px;"/>
			<p class="description">
				Jaipur  founded by the king Maharaja Sawai Jai Singh which gave the city it’s name – JAIPUR. The capital of the largest state of India – Rajasthan, is not only famous for it’s rich history but also for it’s rich culture and heritage that included several palaces and forts. The largest city of Royal state of Rajasthan was painted for the British Royal visit. The walls of this classic holiday destination are enriched with the melodious art that speaks more about the richness of its history. What you should know, is why should Jaipur be considered, or wait, known as the best city to live in.
So if you are going for college or searching out a job, whether you are foodie or not, whether you love shopping or not. This city fits in all culture so if planning to move we are here to serve you right accommodation at right place at right price.

			</p>
			<div class="explore_div">
				<br/>
				<div class="col-sm-offset-4 col-sm-4">
					<a href="home/search?city=Jaipur">
						<button class="btn btn-info">
							Explore 
							<span class="glyphicon glyphicon-share"></span>
						</button>
					</a>
				</div>
			</div>	
		</div>
		<div class="col-sm-offset-1 col-sm-3 city_div">
			<h1 class="city_txt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kota</h1>
			<img src="img/kota.jpg" style="height: 200px; width: 250px;"/>
			<p class="description">
Kota stands in the first place when it comes to education. Apart from the coaching institutes, Kota is home for three distinctive universities which includes; University of Kota, Rajasthan Technical University and Vardhman Mahaveer Open University. Besides, it also consists of 1 private dental college, 1 government medical college, 15 general colleges, 6 engineering colleges and several MBA colleges.
All this happened in the last three decades. And needless to say, the best results of IIT, JEE, medical and engineering entrance exams are scored only by students from Kota. Kota’s coaching centers claim to have produced close to one-third of all students selected to the country’s IITs and every year at least a couple of students make it to the top ten of the all-important All India Rank or AIR.
If planning to move in this education hub we are here to serve you right accommodation at right place at right price.
			</p>
			<div class="explore_div">
				<br/>
				<div class="col-sm-offset-4 col-sm-4">
					<a href="home/search?city=Kota">
						<button class="btn btn-info">
							Explore 
							<span class="glyphicon glyphicon-share"></span>
						</button>
					</a>
				</div>
			</div>	
		</div>
	</div>
</div>

<div class="why_div col-sm-12 text-justify">
	<div class="col-sm-6 border-right">
	<img src="img/people.png" class="col-sm-offset-5"/>
	<h2 class="col-sm-offset-3">Why people love us?</h2>
	<ul class="" style="font-size:20px;">
	<li>Easiest way to find a right accommodation at right place at right price.</li>
	<li>No charges - free sign up.</li>
	<li>
	Real photographs of every paying guest and bagpackers.</li>
	<li>Hustle free services - Bed sharing, amenities, rules and regulation mentioned so if matches your requirement then choose it.
	</li>
	<li>Flexibility - Choose your time and date for visit.</li>

	</ul> 
	<br>
	</div>
	<div class="col-sm-6 border-left">
		<img src="img/owner.png" class="col-sm-offset-5"/>
		<h2 class="col-sm-offset-2">Why home owners love us?</h2>
		<ul style="font-size:20px;">
			<li>Easiest way to monetise your space whether it be paying guest or bagpackers.</li>
			<li>One month free trial - pay after your satisfaction.</li>
			<li>Handymen Services at lowest rate and fastest response time.</li>
			<li>Flexibility - You set your price and decide when you want to accommodate.</li>
			<li>Schedule Visit - No whole day worry of seeker, you will get notification of specific time and date when he will 	be coming to see your accommodation.</li>

		</ul> 

	</div>
</div>