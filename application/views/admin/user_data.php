<?php

/*[id] => 2
            [username] => admin
            [password] => 5d41402abc4b2a76b9719d911017c592
            [email] => admin@mydomain.com
            [status] => active
            [phone] => 
            [shortlist] => 2,4,6,6*/
?>
<link rel="stylesheet" type="text/css" href="css/tabular.css"/>
<script type="text/javascript" src="js/user_edit.js"></script>
<div id="user_data_div">
	<table class="table table-striped table-bordered table-hover pointer shadow_box">
		<thead>
			<tr>
				<th>Username</th>
				<th>Email</th>
				<th>Password</th>
				<th>Phone</th>
				<th>Shortlist</th>
			</tr>
		</thead>
		<?php foreach ($result as $row):?>
			<tr rel="<?= $row['id'];?>">
				<td>
					<div class="content_grp col-sm-3 lr0pad" rel="<?= 'username@'.$row['id'];?>">
						<div class="edit_btn_div col-sm-2 lr0pad">
							<button class="btn btn-info edit_btn col-sm-offset-1 col-sm-10" style="display: none">
								<span class="glyphicon glyphicon-pencil"></span>
							</button>
						</div>
						<div class="content_div col-sm-10 lr0pad">
							<p class="h4 content"><?= $row['username'] ?></p>
						</div>
					</div>		
				</td>
				<td>
					<div class="content_grp col-sm-3 lr0pad" rel="<?= 'email@'.$row['id'];?>">
						<div class="edit_btn_div col-sm-2 lr0pad">
							<button class="btn btn-info edit_btn col-sm-offset-1 col-sm-10" style="display: none">
								<span class="glyphicon glyphicon-pencil"></span>
							</button>
						</div>
						<div class="content_div col-sm-10 lr0pad">
							<p class="h4 content"><?= $row['email'] ?></p>
						</div>
					</div>
				</td>
				<td>
					<div class="content_grp col-sm-3 lr0pad" rel="<?= 'password@'.$row['id'];?>">
						<div class="edit_btn_div col-sm-2 lr0pad">
							<button class="btn btn-info edit_btn col-sm-offset-1 col-sm-10" style="display: none">
								<span class="glyphicon glyphicon-pencil"></span>
							</button>
						</div>
						<div class="content_div col-sm-10 lr0pad">
							<p class="h4 content"><?= $row['password'] ?></p>
						</div>
					</div>
				</td>
				<td>
					<div class="content_grp col-sm-3 lr0pad" rel="<?= 'phone@'.$row['id'];?>">
						<div class="edit_btn_div col-sm-2 lr0pad">
							<button class="btn btn-info edit_btn col-sm-offset-1 col-sm-10" style="display: none">
								<span class="glyphicon glyphicon-pencil"></span>
							</button>
						</div>
						<div class="content_div col-sm-10 lr0pad">
							<p class="h4 content"><?= $row['phone'] ?></p>
						</div>
					</div>
				</td>
				<td>
					<button class="btn btn-info" rel="<?= $row['shortlist'] ?>">
						View Shortlist
					</button>
				</td>
			</tr> 
		<?php endforeach;?>
	</table>
</div>
