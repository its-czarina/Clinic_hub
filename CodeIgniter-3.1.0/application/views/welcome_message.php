<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html>
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
					<img src="\xampp\htdocs\CAll\images\logo_y.png">
				</div>
				<div class="right-align nav-button">
					<input type="button" class="global-button animate btn" value="LOG-OUT" onclick="location.href='logout';"/>
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
								<img class="button-icon" src="\xampp\htdocs\CAll\images\tablet.png">
							</div>
						</div>
					</div>
					<div class="col rightmost">
						<div class="general-button btn middle-center">
							<div class="leftified">
								<a href="schedule_checkup">SCHEDULE A CHECKUP</a>
							</div>
							<div class="rightified">
								<img class="button-icon" src="\xampp\htdocs\CAll\images\stethoscope.png">
							</div>						
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col leftmost">
						<div class="general-button btn middle-center">
							<div class="leftified">
								<a href="view_chart">VIEW YOUR CHART</a>
							</div>
							<div class="rightified">
								<img class="button-icon" src="\xampp\htdocs\CAll\images\medical-history.png">
							</div>
						</div>
					</div>
					<div class="col rightmost">
						<div class="general-button btn middle-center">
							<div class="leftified">
								<a href="view_calendar">CHECK YOUR CALENDAR</a>
							</div>
							<div class="rightified">
								<img class="button-icon" src="\xampp\htdocs\CAll\images\placeholder.png">
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
                    
                </div>
            </div>

                <div class="col footer-item">
                <div class="footer-title">
                    Credits
                </div>
                <div class="footer-content">
                    <a>Header photo "Long Love" by Sarawut Intarob</a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <a>ClinicAll 2016</a>
        Abella, Cahutay, Fernandez, Salvacion
    </div>
</body>
</html>