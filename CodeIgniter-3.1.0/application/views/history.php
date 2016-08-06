<html>
<head></head>
<body>
        <?php echo validation_errors(); ?>

        <?php echo form_open('home/update_info'); ?>
            What is your blood type? <br>
            <input type="text" value="<?php echo set_value('bloodtype') ?>" name="bloodtype"><br>
            Height in centimeters: <br>
            <input type="text" value="<?php echo set_value('height') ?>" name="height"><br>
            Weight in kg: <br>
            <input type="text" value="<?php echo set_value('weight') ?>" name="weight"><br>
            Do you have a physician? <br>
            <select name="hasphysician">
                <option selected="true">Yes</option>
                <option selected="false">No</option>
            </select> <br>
            When was your last checkup? <br>
            <input name="lastcheckup" value="<?php echo set_value('lastcheckup') ?>" type="date"> <br>
            Do you smoke? <br>
            <select name="doessmoke">
                <option selected="true">Yes</option>
                <option selected="false">No</option>
            </select> <br>
            Have you ever been hospitalized or had any serious illness? <br>
            <select name="havehospitalized">
                <option selected="true">Yes</option>
                <option selected="false">No</option>
            </select> <br>
            Have you had any reactions to any medications? <br>
            <select name="hasreactions">
                <option selected="true">Yes</option>
                <option selected="false">No</option>
            </select> <br>
            Are you taking any medication at present? <br>
            <select name="takingmedication">
                <option selected="true">Yes</option>
                <option selected="false">No</option>
            </select> <br>
            If you are taking any medication, please list them here: <br>
            <input name="medications" type="textarea" value="<?php echo set_value('medications') ?>"> <br>
            Have you ever had heart disease, high blood pressure, diabetes, kidney, hepatitis ABC, epilepsy?
            <select name="takingmedication">
                <option selected="true">Yes</option>
                <option selected="false">No</option>
            </select> <br>
            Have you experienced any chest pains, dizzines or fainting?
            <select name="haveexperienced">
                <option selected="true">Yes</option>
                <option selected="false">No</option>
            </select> <br>
            Have you had any injury, surgery, or radiation to the face or jaws?
            <select name="haveinjuries">
                <option selected="true">Yes</option>
                <option selected="false">No</option>
            </select> <br>

            <div><input type="submit" value="Submit" /></div>
        </form>
</body>
</html>