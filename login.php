<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div style='width:400px; height:300px; margin:auto; background:#eee;'>
<form action='checklogin.php' method='post'>
Email: 
<input type='email' name='emailid'>
<br>Password: 
<input type='password' name='password'>
<br>
<input type='submit'>
</form>

		<?php
			echo "<br><br>";
			echo "<a href='registration_form.php'>Registration</a>";
		?>

</div>

</body>
</html>

