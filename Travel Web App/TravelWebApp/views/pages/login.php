	<HEAD>
		<meta charset="utf-8">
	</HEAD>
		
		<table align="center">
		<td>
		<form class="form-signin" action="<?php echo base_url()?>index.php/user/login" method="post">
			<img class="mb-4" src=<?php echo asset_url().'images/users/profile.png'?> alt="" width="150" height="150">
			
			<input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus><br>
			
			<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required><br>
			
			<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
			
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
		</td>
		</table>
		<br>
		<font color="white">Still without an account? </font><a href="<?php echo base_url()?>index.php/user/register">Sign up now</a>