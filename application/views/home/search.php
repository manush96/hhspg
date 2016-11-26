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
<script type="text/javascript" src="js/search.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBBRNM1pWrb94tlegwrj9LbZQcGGmotNl4"></script>
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

<div class="col-sm-4" id="results_pane" style="overflow-y: scroll; height: 520px">
<?php foreach($search_result as $pg):?>
	<div class="col-sm-12 pg_result_div">
		<div class="col-sm-4">
			<img src="img/img.jpg" class="img-responsive pull-left" style="height: 90px; width: 100%;"/>
		</div>
		<div class="col-sm-8">
			<span class="pg_name"><?= $pg['name'];?></span>
			<span class="wishlist_icon" rel="<?= $pg['id'];?>">
				<i class="fa fa-plus-square-o"></i>
			</span>
			<phr/>
			<h4><?= $pg['amenities'];?></h4>
		</div>
	</div>
<?php endforeach;?>

</div>
<div class="col-sm-8">
	<div  id="googleMap" style="width:100%;height:510px;"></div>
</div>
