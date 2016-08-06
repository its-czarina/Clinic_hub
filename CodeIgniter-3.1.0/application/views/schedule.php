<html>
<head></head>
<body>
        <?php echo validation_errors(); ?>

        <?php echo form_open('schedule'); ?>
            Date: <br>
            <input name="username" type="date"> <br>
            Query: <br>
            <input name="query" type="textarea">
            <button type="button">Search</button> <br>
            <button type="button">Find me a Doctor!</button>

            <div><input type="submit" value="Submit" /></div>
        </form>
</body>
</html>