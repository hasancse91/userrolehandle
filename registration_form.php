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
			  <input type="radio" checked name="user_role" value="student">Student
			  <input type="radio" name="user_role" value="teacher">Teacher
			  <br><br>
			<input type='submit'>
		</form>

	</div>

</body>
</html>

