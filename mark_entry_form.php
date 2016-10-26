<!DOCTYPE html>
<html>
<head>
</head>

<body>
	<div style='width:400px; height:300px; margin:auto; background:#eee;'>
		<form action='mark_entry_process.php' method='post'>
			Student ID: 
			<input type='text' name='user_id'><br>
			Marks: 
			<input type='text' name='total_marks'><br>
			<input type='submit'>
		</form>

		<?php
			echo "<br><br>";
			echo "<a href='profile.php'>Profile</a>";

			echo "<br><br>";
			echo "<a href='logout.php'>Logout</a>";	
		?>

	</div>



</body>
</html>