<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/styles/global.css">
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
				<div class="right-align nav-button">
					<input type="submit" class="global-button animate btn" value="LOG-OUT" />
				</div>
			</div>
		<form>
		<div class="card">
			<div class="card-title">
				Services
			</div>
			<div class="card-content">
				
				<div class="row">
					<div class="col leftmost">
						<div class="general-button btn middle-center">
							<div class="leftified">
								<a href="update_info">UPDATE YOUR MEDICAL INFORMATION</a>
							</div>
							<div class="rightified">
								<img class="button-icon" src="C:\Program Files\xampp\htdocs\xampp\htdocs\CAll\images\tablet.png">
							</div>
						</div>
					</div>
					<div class="col rightmost">
						<div class="general-button btn middle-center">
							<div class="leftified">
								<a href="schedule_checkup">SCHEDULE A CHECKUP</a>
							</div>
							<div class="rightified">
								<img class="button-icon" src="C:\Program Files\xampp\htdocs\xampp\htdocs\CAll\images\stethoscope.png">
							</div>						
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="general-button btn middle-center">
							<div class="leftified">
								<a href="view_chart">VIEW YOUR CHART</a>
							</div>
							<div class="rightified">
								<img class="button-icon" src="C:\Program Files\xampp\htdocs\xampp\htdocs\CAll\images\medical-history.png">
							</div>
						</div>
					</div>
				</div>
			</div>
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