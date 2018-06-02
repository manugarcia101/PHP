	<HEAD>
		<meta charset="utf-8">
		
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</HEAD>
		<table align="center">
		<td>
		<form action="<?php echo base_url()?>index.php/user/register" method="post">
		
			<img class="mb-4" src=<?php echo asset_url().'images/users/profile.png'?> alt="" width="150" height="150">
		
			<input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus><br>
			
			<input type="password" name="password1" id="inputPassword1" class="form-control" placeholder="Password" required><br>
			
			<input type="password" name="password2" id="inputPassword2" class="form-control" placeholder="Repeat Password" required><br>
			
			<input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email" required><br>
			
			<input type="text" name="name" id="inputName" class="form-control" placeholder="Name"><br>
			
			<input type="text" name="surname" id="inputSurname" class="form-control" placeholder="Surname"><br>
			
			<input type="number" name="age" value="" id="inputAge" class="form-control" placeholder="Age"><br>
			
			<div class="g-recaptcha" data-sitekey="6LeS91cUAAAAAEzLVZKpPPW--DvjaH6Qq2bvj1FM"></div><br>
			
			<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
			
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
		</form>
		</td>
		</table>
		<br>
		<font color="white">Already with an account? </font><a href="<?php echo base_url()?>index.php/user/login">Sign in now</a>