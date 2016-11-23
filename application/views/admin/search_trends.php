<?php

$area = json_encode(array_column($result, 'area'));
$count = implode(',',array_column($result, 'count'));
$i = count($result);

?>
<script type="text/javascript" src="js/chart.js"></script>
<canvas id="myChart" width="600" height="300"></canvas>
	<script>
		var colors = ['rgba(255, 99, 132, 0.4)', 'rgba(54, 162, 235, 0.4)', 'rgba(255, 206, 86, 0.4)',
		                'rgba(75, 192, 192, 0.4)', 'rgba(153, 102, 255, 0.4)', 'rgba(255, 159, 64, 0.4)']
		var ctx = document.getElementById("myChart");
		var config = {
			    type: 'bar',
			    data: {
			        labels: <?= $area;?>,
			        datasets: [{
			            label: '# of Votes',
			            data: [<?= $count;?>],
			            backgroundColor: [
			              <?php 
			              for($p=0; $p<$i; $p++)
			              {
			            	echo "colors[".($p%6)."],";
			              }
			              ?>
			            ],
			            borderColor: [
						<?php 
			              for($p=0; $p<$i; $p++)
			              {
			            	echo "colors[".($p%6)."],";
			              }
			              ?> 
			            ],
			            borderWidth: 1,
			        }]
			    },
			    options: {
			        scales: {
			        	xAxes:[{
			        		barThickness: 30
			        	}],
			            yAxes: [{
			                ticks: {
			                    beginAtZero:true
			                }
			            }]
			        }
			    }
			};
		var temp = jQuery.extend(true, {}, config);
		var myChart = new Chart(ctx, temp);
	</script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$("#graph_type").change(function()
			{
				if (myChart) {
				    myChart.destroy();
				  }
				var temp = jQuery.extend(true, {}, config);
				temp.type = $(this).val();
				myChart = new Chart(ctx, temp);
			});
		});
	</script>