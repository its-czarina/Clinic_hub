<html>
<head>
	<link rel="stylesheet" type="text/css" href="/xampp/htdocs/CAll/CodeIgniter-3.1.0/application/assets/styles/global.css">
</head>
<body>
		<?php echo validation_errors(); ?>

		<?php echo form_open('home/login'); ?>
		<nav>
			<div class="nav-container">
				
			</div>
		</nav>

		<div class="hidden-container">
			<div>
				<div class="logo">
					<img src="\xampp\htdocs\CAll\images\logo_y.png">
				</div>
				<div class="right-align nav-button">
                    <input type="button" class="global-button animate btn" value="SIGN UP" onclick="location.href='./'"/>
                </div>
			</div>
		<form>
		<div class="card">
			<div class="card-title">
				User Log-in
			</div>
			<div class="card-content">
				<div class="row">
					<label>Username:</label>
					<input name="username" type="text">
				</div>
				<div class="row">
					<label>Password: </label>
					<input name="password" type="password"> 
				</div>
			
			</div>
		</div>
		</form>
					<div class="right-align">
		<input type="submit" class="global-button animate btn" value="SUBMIT" />
	</div>	
		</div>

</body>
</html>


