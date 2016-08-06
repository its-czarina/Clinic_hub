<html>
<head></head>
<body>
		<?php echo validation_errors(); ?>

		<?php echo form_open('home'); ?>
			Username: <br>
			<input name="username" type="text"> <br>
			Password: <br>
			<input name="password" type="password"> <br>
			Confirm Password: <br>
			<input name="confpassword" type="password"> <br>
			First Name: <br>
			<input name="firstname" type="text"> <br>
			Last Name: <br>
			<input name="lastname" type="text"> <br>
			E-mail Address: <br>
			<input name="email" type="text"> <br>
			Date of Birth: <br>
			<input name="birthday" type="date"> <br>
			Sex: <br>
			<select name="sex">
				<option name="m">Male</option>
				<option name="f">Female</option>
			</select> <br>
			
			<div><input type="submit" value="Submit" /></div>
		</form>
</body>
</html>