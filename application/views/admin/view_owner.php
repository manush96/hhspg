<?php

/*[id] => 1
            [name] => Aman
            [email] => amankhan7900@gmail.com
            [contact] => 7048005600
            [password] => ccda1683d8c97f8f2dff2ea7d649b42c
            [status] => 1*/
?>
<div>
					<table width="700" border="1" align="left">
						<?php
						#name,email,password,contact

						foreach ($result as $k) 
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
									<?= $k['email'] ?>
								</td>
								<td>
									<?= $k['password'] ?>
								</td>
								<td>
									<?= $k['contact'] ?>
								</td>
							</tr> 

					
						<?php
							}

						?>
				</table>
		</div>