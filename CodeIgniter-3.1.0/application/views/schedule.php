<html>
<head></head>
<body>
        <?php echo validation_errors(); ?>

        <?php echo form_open('home/schedule_checkup'); ?>
            Date: <br>
            <input name="date" type="date"> <br>
            Query: <br>
            <textarea name="query"></textarea>
            <br>
            <div id="search">
            Doctor: <br>
            <select>
                <option>Dentist</option>
                <option>OB-GYN</option>
                <option>Oncologist</option>
            </select>
            <input type="text" id="search"><button type="button" onclick="document.getElementById('search').value='Heavenly Librando'">Search</button> <br>
            </div>
            <button type="button" onclick="document.getElementById('clinic_name').style.visibility='visible';document.getElementById('search').style.visibility='hidden';">Find me a Doctor!</button><br>
            <select type="hidden" style="visibility:hidden;" id="clinic_name" size = 5>
                <option title="Dr. Marlou Lumapas Clinic">Dr. Marlou Lumapas</option>
                <option title="Dr. Repro Optima Clinic">Repro Optima</option>
                <option title="Aventus Medical Clinic">Aventus Medical Clinic</option>
            </select>
            <div style="margin-top:20px"><input type="Submit" value="Submit" /></div>
        </form>
</body>
</html>