<div id="ajax_load_result_div">
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
	<link rel="stylesheet" type="text/css" href="css/rating.css"/>
	<script type="text/javascript" src="js/search.js"></script>
	
	<?php if($map_load):?>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBBRNM1pWrb94tlegwrj9LbZQcGGmotNl4&callback=initialize"></script>
		<script type="text/javascript" src="js/rating.js"></script>
	<?php endif;?>

	<script type="text/javascript">
		var lat = [<?= $myLat;?>];
		var long = [<?= $myLong;?>];
		var names = <?= $myNames;?>;
		var contact = <?= $contact;?>;
	</script>
	<script type="text/javascript" src="js/map.js"></script>
	<div id="main_div" style="position: relative">
		<div class="col-sm-12 lr0pad">
			<div class="col-sm-3" id="results_pane" style="overflow-y: scroll; height: 530px">
			<?php foreach($search_result as $pg):?>
				<?php
					if(in_array($pg['id'], $wishlist))
						$wish = "remove_from_wishlist";
					else
						$wish = "add_to_wishlist";
				?>
				<div class="col-sm-12 pg_result_div" id=<?= $pg['id'];?>>
					<div class="col-sm-4 img_div">
						<img src="img/img.jpg" class="img-responsive pull-left" style="height: 80px; width: 100%;"/>
					</div>
					<div class="col-sm-8 data_div">
						<span class="pg_name"><?= $pg['name'];?></span>
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
				endforeach;
			?>

			</div>
			<div class="col-sm-9">
				<div  id="googleMap" style="width:100%;height:530px;"></div>
			</div>
		</div>
		<div class="col-sm-12 lr0pad" style="position: absolute;display:none;" id="disp">
			<div class="col-sm-offset-3 col-sm-4" style="position: absolute; background: #fff;  height: 530px; overflow-y: scroll;">
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
</div>