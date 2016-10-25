<!DOCTYPE html>
<html>
<head>
</head>

<body>
	<div style='width:400px; height:300px; margin:auto; background:#eee;'>
		<form action='registration_process.php' method='post'>
			Name: 
			<input type='text' name='name'><br>
			Email: 
			<input type='email' name='emailid'><br>
			Password: 
			<input type='password' name='password'><br>
			
			User Type:
			  <input type="radio" checked="checked" name="user_role" <?php if (isset($user_role) && $user_role=="student") echo "checked";?> value="student">Student
			  <input type="radio" name="user_role" <?php if (isset($user_role) && $user_role=="teacher") echo "checked";?> value="teacher">Teacher
			  <br><br>
			<input type='submit'>
		</form>

	</div>

</body>
</html>

