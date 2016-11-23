<?php

if($this->session->userdata('user_check')==true)
{
	?>
	You have registered successfully verify your email.
	<?php
}
else
{
	?>
	This email address already exists please verify you details.
	<a href="login">Go back</a>
	<?php

}
?>