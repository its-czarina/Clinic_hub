<html>
<head>
    <link rel="stylesheet" type="text/css" href="/xampp/htdocs/CAll/CodeIgniter-3.1.0/application/assets/styles/global.css">
</head>
<body>
        <?php echo validation_errors(); ?>

        <?php echo form_open('home/update_info'); ?>
        <nav>
            <div class="nav-container">
                
            </div>
        </nav>

        <div class="hidden-container">
        <div>
            <a href="home"><div class="logo">
                <img src="\xampp\htdocs\CAll\images\logo_y.png">
            </div></a>
            <div class="right-align nav-button">
                <input type="button" class="global-button animate btn" value="LOG-OUT" onclick="location.href='logout';"/>
            </div>
            <div class="right-align nav-button">
                <input type="button" class="global-button animate btn" value="HOME" onclick="location.href='./';"/>
            </div>
        </div>

        <div class="card">
            <div class="card-title">
                Medical History
            </div>
            <div class="card-content">
                <div class='row'>
                    <label>What is your blood type?</label>
                    <input type="text" value="<?php echo set_value('bloodtype') ?>" name="bloodtype">
                </div>
                <div class='row'>
                    <div class='col leftmost'>
                        <label>Height in centimeters:</label>
                        <input type="text" value="<?php echo set_value('height') ?>" name="height">
                    </div>
                    <div class='col rightmost'>
                        <label>Weight in kg:</label>
                        <input type="text" value="<?php echo set_value('weight') ?>" name="weight">
                </div>
                
                    <div class='row'>
                        <label>Do you have a physician?</label>
                        <select name="hasphysician">
                            <option selected="true">Yes</option>
                            <option selected="false">No</option>
                        </select> <br>
                    </div>
                    <div class='row'>
                        <label>When was your last checkup?</label>
                        <input name="lastcheckup" value="<?php echo set_value('lastcheckup') ?>" type="date">
                    </div>
                
                    <div class='row'>
                        <label>Do you smoke?</label>
                        <select name="doessmoke">
                            <option selected="true">Yes</option>
                            <option selected="false">No</option>
                        </select> <br>
                    </div>
                    <div class='row'>
                       <label>Have you ever been hospitalized or had any serious illness?</label>
                        <select name="havehospitalized">
                            <option selected="true">Yes</option>
                            <option selected="false">No</option>
                        </select>
                    </div>
                
                
                    <div class='row'>
                        <label>Have you had any reactions to any medications?</label>
                        <select name="hasreactions">
                            <option selected="true">Yes</option>
                            <option selected="false">No</option>
                        </select>
                    </div>
                    <div class='row'>
                        <label>Are you taking any medication at present?</label>
                        <select name="takingmedication">
                            <option selected="true">Yes</option>
                            <option selected="false">No</option>
                        </select> <br>
                    </div>
                
                <div class='row'>
                        <label>If you are taking any medication, please list them here: </label>
                        <input name="medications" type="text" value="<?php echo set_value('medications') ?>"> <br>
                </div>
                <div class='row'>
                        Have you ever had heart disease, high blood pressure, diabetes, kidney, hepatitis ABC, epilepsy?
                        <select name="takingmedication">
                            <option selected="true">Yes</option>
                            <option selected="false">No</option>
                        </select>
                </div>
                    <div class='row'>
                        Have you experienced any chest pains, dizzines or fainting?
                        <select name="haveexperienced">
                            <option selected="true">Yes</option>
                            <option selected="false">No</option>
                        </select> <br>
                    </div>
                    <div class='row'>
                        Have you had any injury, surgery, or radiation to the face or jaws?
                        <select name="haveinjuries">
                            <option selected="true">Yes</option>
                            <option selected="false">No</option>
                        </select> <br>
                    </div>
            </div>
        </div>
        </form>
        </div>
            <div class="right-align">
                <input type="submit" class="global-button animate btn" value="SUBMIT" />
            </div>
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