<head>
<script type="text/javascript" src="js/visited.js"></script>
</head>
			<div>
					<table width="700" border="1" align="left">
						<?php
						#id,owner_id,address,landmark,contact

						foreach ($details as $k) 
						{		
							?>

							<tr>
								<td>
									<?= $k['id'] ?>
								</td>
								<td>
									<?= $k['owner_id'] ?>
								</td>
								<td>
									<?= $k['address'] ?>
								</td>
								<td>
									<?= $k['landmark'] ?>
								</td>
								<td>
									<?= $k['contact'] ?>
								</td>
								<td>
									<div col-sm-12>
										<button class="btn btn-success visited" id="visited" rel="<?=$k['id']?>">
											Visited...
										</button>
									</div>
								<td>

							</tr> 

					
						<?php
							}

						?>
				</table>
		</div>