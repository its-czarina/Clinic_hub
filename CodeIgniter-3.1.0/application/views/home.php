<html>
<head>
	<link rel="stylesheet" type="css" href="\xampp\htdocs\CAll\CodeIgniter-3.1.0\application\assets\styles">
</head>
<body>
		<?php echo validation_errors(); ?>

		<?php echo form_open('home'); ?>
		<nav>
			<div class="nav-container">
				<div class="col">
					ClinicAll
				</div>
			</div>
		</nav>
		<div class="hidden-container">
		<div class="card">
			<div class="card-title">
				Personal Information
			</div>
			<div class="card-content">
			<form>
			<div class="row">
				<div class="col leftmost">
					<label>First Name: </label>
					<input name="firstname" type="text"> 
				</div>
				<div class="col rightmost">
					<label>Last Name: </label>
					<input name="lastname" type="text"> 
				</div>
			</div>
			<div class="row">
				<label>Username: </label>
				<input name="username" type="text"> 
			</div>
			<div class="row">
				<div class="col leftmost">
					<label>Password: </label>
					<input name="password" type="password"> 
				</div>
				<div class="col rightmost">
					<label>Confirm Password: </label>
					<input name="confpassword" type="password"> 
				</div>
			</div>
			<div class="row">
				<div class="col leftmost">
					<label>E-mail Address: </label>
					<input name="email" type="text"> 
				</div>
				<div class="col rightmost">
					<label>Date of Birth: </label>
					<input name="birthday" type="date"> 
				</div>
				<div class="col rightmost">
					<label>Sex: </label>
					<select name="sex">
						<option name="m">Male</option>
						<option name="f">Female</option>
					</select> 
				</div>
			</div>
			</div>
		</div>
		<div class="right-align">
			<input type="submit" class="global-button animate btn" value="SUBMIT" />
		</div>
		</form>
	</div>
</body>
</html>