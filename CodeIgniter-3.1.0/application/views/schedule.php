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
                Schedule an Appointment
            </div>
            <div class="card-content">
                
                <div class="row">
                    <div class="col leftmost">
                        <label>Date </label>
                        <input name="date" type="date">
                    </div>
                    <div class="col rightmost">
                        <label>Clinic Service </label>
                        <input name="lastname" type="text"> 
                    </div>
                </div>
                <div class="row">
                    <label>Tell the doctor something</label>
                    <textarea name="query"></textarea>
                </div>
                <div class="row">
                    <div class="col leftmost">
                        <label>Specialization </label>
                        <select>
                            <option>Dentist</option>
                            <option>OB-GYN</option>
                            <option>Oncologist</option>
                        </select>
                    </div>
                    <div class="col rightmost">
                        <label>Search a Doctor/Clinic </label>
                        <div class="search">
                            <div class="leftified tight">
                                <input type="text" id="search">
                            </div>
                            <div class="rightified absolute">
                                <img src="C:\Program Files\xampp\htdocs\xampp\htdocs\CAll\images\magnifying-glass.png" class="search-icon" onclick="document.getElementById('search').value='Heavenly Librando'">
                            </div>
                        </div>
            
                    </div>
                </div>
                
            </div>
        </div>
        <div class="right-align">
            <input type="submit" class="global-button animate btn" value="SCHEDULE" />
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