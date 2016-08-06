<html>
<head></head>
<body>
        <?php echo validation_errors(); ?>

        <?php echo form_open('home_patient'); ?>
        <button type="button">Find clinics in my area</button>
        Search for a Clinic<input name="clinic" type="text">
        <button type="button">Search</button>

        </form>
</body>
</html>