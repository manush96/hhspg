

<div>
					<table border="1" align="left">

<?php
#id,name,address,area,city,room_price,gender
				foreach ($details as $k) 
{		
	?>
			
							<tr>
							<td>
								<?= $k['id'] ?>
							</td>
							<td>
								<?= $k['name'] ?>
							</td>
							<td>
								<?= $k['address'] ?>
							</td>
							<td>
								<?= $k['area'] ?>
							</td>
							<td>
								<?= $k['city'] ?>
							</td>
							<td>
								<?= $k['room_price'] ?>
							</td>
							<td>
								<?= $k['gender'] ?>
							</td>
							</tr> 

					
	<?php
}

?>

</table>
			</div>
<div class="clearfix"></div>
<h2 align="center"><a href="add_pg">Click here to add pg</a></h2>
