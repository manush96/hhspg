
<a href="owner/add_pg">Click here to add pg</a>

<?php
#id,name,address,area,city,room_price,gender

foreach ($details as $k) 
{		
	?>
			<div>
					<table border="1" align="left">
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

					</table>
			</div>
	<?php
}

?>




