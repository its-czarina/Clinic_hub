<html>
<head>
    <link rel="stylesheet" type="css" href="/xampp/htdocs/CAll/CodeIgniter-3.1.0/application/assets/styles/global.css">
</head>
<body>
        <?php echo validation_errors(); ?>

        <?php echo form_open('clinic/add_doctor'); ?>
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
                Register a Doctor
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
                <div class="col leftmost">
                    <label>Specialization: </label>
                    <input name="specialization" type="text">
                </div>
                <div class="col rightmost">
                    <label>Email Address: </label>
                    <input name="email" type="text">
                </div>
            </div>

            <div class="row">
                <div class="col leftmost">
                    <label>Consultation Start: </label> <br> <br>
                    <input name="consultationstart" type="time">
                </div>
                <div class="col rightmost">
                    <label>Consultation End: </label> <br> <br>
                    <input name="consultationend" type="time">
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