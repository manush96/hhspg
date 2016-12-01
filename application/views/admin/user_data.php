<?php

/*[id] => 2
            [username] => admin
            [password] => 5d41402abc4b2a76b9719d911017c592
            [email] => admin@mydomain.com
            [status] => active
            [phone] => 
            [shortlist] => 2,4,6,6*/
?>
<div>
					<table width="700" border="1" align="left">
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
									<?= $k['username'] ?>
								</td>
								<td>
									<?= $k['email'] ?>
								</td>
								<td>
									<?= $k['password'] ?>
								</td>
								<td>
									<?= $k['phone'] ?>
								</td>
								<td>
									<?= $k['status'] ?>
								</td>
								<td>
									<?= $k['phone'] ?>
								</td>
								<td>
									<?= $k['shortlist'] ?>
								</td>
							</tr> 

					
						<?php
							}

						?>
				</table>
		</div>
