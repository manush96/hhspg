<?php

/*[0] => Array ( [id] => 1 [search_count] => 0 [list_count] => 0 ) */
?>
<div>
					<table width="700" border="1" align="left">
					<tr><td>id</td><td>search count</td><td>list count</td> </tr>
						<?php
						#username,email,password,status,phone,shortlist

						foreach ($result as $k) 
						{		
							?>

							<tr>
								<td>
									<?= $k['id'] ?>
								</td>
								<td>
									<?= $k['search_count'] ?>
								</td>
								<td>
									<?= $k['list_count'] ?>
								</td>
							</tr> 

					
						<?php
							}

						?>
				</table>
		</div>
