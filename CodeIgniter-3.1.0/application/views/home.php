<html>
<head>
	<link rel="stylesheet" type="text/css" href="/xampp/htdocs/CAll/CodeIgniter-3.1.0/application/assets/styles/global.css">
</head>
<body>
		<?php echo validation_errors(); ?>

		<?php echo form_open('home'); ?>
		<nav>
			<div class="nav-container">
				
			</div>
		</nav>

		<div class="hidden-container">
			<div>
				<div class="logo">
					<img src="C:\Program Files\xampp\htdocs\xampp\htdocs\CAll\images\logo_y.png">
				</div>
				
			</div>
		<form>
		<div class="card">
			<div class="card-title">
				Personal Information
			</div>
			<div class="card-content">
				
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
	<div class="footer">
			<div class="col footer-item">
				<div class="footer-title">
					About
				</div>
				<div class="footer-content">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</div>
			</div>
			<div class="col footer-item">
				<div class="footer-title">
					Contact
				</div>
				<div class="footer-content">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<a>ClinicAll 2016</a>
	</div>
</body>
</html>