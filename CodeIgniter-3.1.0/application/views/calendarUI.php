<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html>
<head>
	<link rel="stylesheet" type="text/css" href="/xampp/htdocs/CAll/CodeIgniter-3.1.0/application/assets/styles/global.css">
	<link rel="stylesheet" type="text/css" href="/xampp/htdocs/CAll/CodeIgniter-3.1.0/application/assets/styles/calendar.css">
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
				<div class="right-align nav-button">
					<input type="button" class="global-button animate btn" value="HOME" onclick="location.href='./';"/>
				</div>
				
			</div>
		<form>
		<div class="card">
			<div class="card-title">
				Your Schedule
			</div>
			<div class="card-content">
				
				<div class="row">
					<div id="cal">
						<div class="header">
							<span class="left button" id="prev"> &lang; </span>
							<span class="month-year" id="label"> August 2016 </span>
							<span class="right button" id="next"> &rang; </span>
						</div>
						<table id="days">
							<tr>
								<td>SUN</td>
								<td>MON</td>
								<td>TUE</td>
								<td>WED</td>
								<td>THU</td>
								<td>FRI</td>
								<td>SAT</td>
							</tr>
						</table>
						<div id="cal-frame">
							<table class="curr">
								<tr><td class="nil"></td><td class="nil"></td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
								<tr><td>6</td><td class="today">7</td><td>8</td><td class="has-appointment" onclick="popup()">9</td><td>10</td><td>11</td><td>12</td></tr>
								<tr><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td></tr>
								<tr><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td></tr>
								<tr><td>27</td><td>28</td><td>29</td><td>30</td><td class="nil"></td><td class="nil"></td><td class="nil"></td></tr>
							</table>
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
<script src="/xampp/htdocs/CAll/CodeIgniter-3.1.0/application/assets/scripts/jquery-1.11.3.js"></script>
	<script src="/xampp/htdocs/CAll/CodeIgniter-3.1.0/application/assets/scripts/calendar.js"></script>
	<script>
	var cal = CALENDAR();

	cal.init();
	</script>
</html>