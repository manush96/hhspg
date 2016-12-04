<link rel="stylesheet" type="text/css" href="css/rating.css"/>
<script type="text/javascript" src="js/search.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBBRNM1pWrb94tlegwrj9LbZQcGGmotNl4"></script>
<script type="text/javascript" src="js/rating.js"></script>
<script>
$( document ).ready(function() {
    $(".pg_result_div").click(function()
    {	
    	$.ajax({
    		type: 'POST',
    		url: "home/get_modal_pg", 
    		data: {id:$(this).attr('id')},
    		success: function(result){
        		$("#tar").html(result);
    		}});
    	$("#disp").show();
    });
    $("#close_button").click(function()
    {
    	$("#disp").hide();
    	$("#tar").html("");
    });
});
</script>
<?php
	$name = array_column($search_result, 'name');
	$contact = array_column($search_result, 'contact');
	$lat = array_column($search_result, 'latitude');
	$long = array_column($search_result, 'longitude');
	$myNames = json_encode($name);
	$contact = json_encode($contact);
	$myLat = implode(',', $lat);
	$myLong = implode(',', $long);
?>
<script>
	var lat = [<?= $myLat;?>];
	var long = [<?= $myLong;?>];
	var names = <?= $myNames;?>;
	var contact = <?= $contact;?>;
	var lat_sum = lat.reduce(add, 0);
	var long_sum = long.reduce(add, 0);
	var lat_len = lat.length;
	var long_len = long.length;
	function add(a, b) {
	    return a + b;
	}
	var infowindow;
	var lat_avg = lat_sum/lat_len;
	var long_avg = long_sum/long_len;
	
	function initialize()
	{
		var mapProp = {
			center:new google.maps.LatLng(lat_avg, long_avg),
			zoom:21,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		
		var image = new google.maps.MarkerImage(
			'http://i.imgur.com/3YJ8z.png',
			new google.maps.Size(19,25),    // size of the image
			new google.maps.Point(0,0), // origin, in this case top-left corner
			new google.maps.Point(9, 25)    // anchor, i.e. the point half-way along the bottom of the image
		);
		var infowindow = new google.maps.InfoWindow();
		for(var i=0; i<lat_len; i++)
		{
			var mylocation=new google.maps.LatLng(lat[i], long[i]);
		  
			var marker=new google.maps.Marker({
				position:mylocation,
				icon: image,	 
			});
			
        	google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent("<img src="+"\"img/img.jpg\""+" /><h5>" + names[i] + "</h5><h5>"
                    	+ contact[i] + "</h5>");
                    infowindow.open(map, marker);                	
                }
            })(marker, i));
			marker.setMap(map);
		}
		function attachSecretMessage(marker, secretMessage)
		{
    		
    	}
		map.setZoom(14); 
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php $i=0;?>
<div id="main_div" style="position: relative">
	<div class="col-sm-12 lr0pad">
		<div class="col-sm-4" id="results_pane" style="overflow-y: scroll; height: 520px">
		<?php foreach($search_result as $pg):?>
			<?php
				if(in_array($pg['id'], $wishlist))
					$wish = "remove_from_wishlist";
				else
					$wish = "add_to_wishlist";
			?>
			<div class="col-sm-12 pg_result_div" id=<?= $i;?>>
				<div class="col-sm-4 img_div">
					<img src="img/img.jpg" class="img-responsive pull-left" style="height: 90px; width: 100%;"/>
				</div>
				<div class="col-sm-8 data_div">
					<span class="pg_name"  ><?= $pg['name'];?></span>
					<span class="wishlist_icon <?= $wish;?>" rel="<?= $pg['id'];?>" title="Add to wishlist">
						<i class="fa fa-heart"></i>
					</span>
					<br>
			
					<phr/>

					<h4>Located near <?= $pg['area'];?></h4>


					<!-- <ul class="c-rating"></ul> -->
				</div>
			</div>
		<?php 
			$i++;
			endforeach;
		?>

		</div>
		<div class="col-sm-8">
			<div  id="googleMap" style="width:100%;height:510px;"></div>
		</div>
	</div>
	<div class="col-sm-12 lr0pad" style="position: absolute;display:none" id="disp">
		<div class="col-sm-offset-4 col-sm-3" style="position: absolute; background: #fff">
			
			<div class="pull-right"><span class="glyphicon glyphicon-remove pointer" id="close_button"></span></button></div>
			<br>
			<div id="tar"></div>


		</div>
	</div>
</div>
<div id="test_div"></div>
<!-- <script type="text/javascript">
    var rat = document.querySelector('.c-rating');
    var currentRating = 3;
    var maxRating= 5;
    var rating;
    var callback =  function(x)
                    {
                        
                    };
    var myRating = rating(rat, currentRating, maxRating, callback);
</script> -->