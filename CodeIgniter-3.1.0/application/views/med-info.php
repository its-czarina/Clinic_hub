<html>
<head>
	<link rel="stylesheet" type="text/css" href="/xampp/htdocs/CAll/CodeIgniter-3.1.0/application/assets/styles/global.css">
</head>

		<nav>
            <div class="nav-container">
                
            </div>
        </nav>

        <div class="hidden-container">
            <div>
                <div class="logo">
                    <a href="home"><img src="\xampp\htdocs\CAll\images\logo_y.png"></a>
                </div>
                <div class="right-align nav-button">
                    <input type="button" class="global-button animate btn" value="LOG-OUT" onclick="location.href='logout';"/>
                </div>
            </div>
        <form>
        <div class="card">
            <div class="card-title">
                Medical Information
            </div>
            <div class="card-content">
                <div class="row">
                    Updated <?=$timestamp?>
                </div>
                <div class="row">
                	<label>Bloodtype:</label>
                	<div class="strong-text"><?=$bloodtype?></div>
                </div>
                <div class="row">
                	<label>Height:</label>
                	<div class="strong-text"><?=$height?></div>
                </div>
                <div class="row">
                	<label>Weight:</label>
                	<div class="strong-text"><?=$weight?></div>
                </div>
                <div class="row">
                	<label>Do you have a physician?</label>
                	<div class="strong-text"><?=$hasphysician?></div>
                </div>
                <div class="row">
                	<label>When was your last checkup?</label>
                	<div class="strong-text"><?=$lastcheckup?></div>
                </div>
                <div class="row">
                	<label>Do you smoke?</label>
                	<div class="strong-text"><?=$doessmoke?></div>
                </div>
                <div class="row">
                	<label>Have you ever been hospitalized or had any serious illness?</label>
                	<div class="strong-text"><?=$havehospitalized?></div>
                </div>
                <div class="row">
                	<label>Are you taking any medication at present? </label>
                	<div class="strong-text"><?=$takingmedication?></div>
                </div>
                <div class="row">
                	<label>Have you had any reactions to any medications? </label>
                	<div class="strong-text"><?=$hasreaction?></div>
                </div>
                <div class="row">
                	<label>Medication currently being taken in:</label>
                	<div class="strong-text"><?=$takingmedication?></div>
                </div>
                <div class="row">
                	<label>Have you experienced any chest pains, dizzines or fainting?</label>
                	<div class="strong-text"><?=$chestpains?></div>
                </div>
                <div class="row">
                	<label>Have you had any injury, surgery, or radiation to the face or jaws?</label>
                	<div class="strong-text"><?=$injurysurgery?></div>
                </div>
                <hr>
                Share To Doctor <input type="text">
            </div>
        </div>
    	</form>
    	</div>
<!-- Medication currently being taken in: <?=$takingmedication?><br>
Have you experienced any chest pains, dizzines or fainting? <?=$chestpains?><br>
Have you had any injury, surgery, or radiation to the face or jaws? <?=$injurysurgery?><br>
 -->
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

</html>