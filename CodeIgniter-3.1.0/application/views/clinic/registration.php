<html>
<head></head>
<body>
        <?php echo validation_errors(); ?>

        <?php echo form_open('clinic'); ?>
            Clinic Name: <br>
            <input name="name" type="text"> <br>
            Address: <br>
            <input name="address" type="text"> <br>
            Telephone Number: <br>
            <input name="contactnum" type="text"> <br>
            Email Address: <br>
            <input name="email" type="text"> <br>
            Username: <br>
            <input name="username" type="text"> <br>
            Password: <br>
            <input name="password" type="password"> <br>
            Confirm Password: <br>
            <input name="confpassword" type="password"> <br>

            <div><input type="submit" value="Submit" /></div>

        </form>

</body>
</html>