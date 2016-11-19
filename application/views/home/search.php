<?php
	$lat = array_column($search_result, 'latitude');
	$long = array_column($search_result, 'longitude');

	$myLat = implode(',', $lat);
	$myLong = implode(',', $long);
?>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBBRNM1pWrb94tlegwrj9LbZQcGGmotNl4"></script>
<script>
	var lat = [<?= $myLat;?>];
	var long = [<?= $myLong;?>];

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
                    infowindow.setContent("Hello : " +i);
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

<div class="col-sm-4" style="overflow-y: scroll; height: 500px">
<?php foreach($search_result as $pg):?>
	<div class="col-sm-12 pg_result">

		<h4>
			<img src="img/img.jpg" style="height: 80px; width: 100px;"/><?= $pg['name'];?>
		</h4>
		<h4><?= $pg['owner'];?></h4>
		<h4><?= $pg['address'];?></h4>
	</div>
<?php endforeach;?>

</div>
<div class="col-sm-8">
	<div  id="googleMap" style="width:800px;height:500px"></div>
</div>
