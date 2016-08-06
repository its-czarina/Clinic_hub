<html>

    <?php echo validation_errors(); ?>

	<?php echo form_open('clinic/login'); ?>
		Username: <br>
		<input name="username" type="text"> <br>
		Password: <br>
		<input name="password" type="password"> <br>
		<input name="submit" type="submit">
	</form>
</html>