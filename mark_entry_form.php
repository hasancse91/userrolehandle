<?php
	session_start();
	include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
</head>

<body>

	<?php if($_SESSION['loginstatus']=="ok"){

		$studentUserRole = "student";

		$result = mysql_query("SELECT user_id FROM  `userinfo` WHERE user_role =  'student'");

		$count = mysql_num_rows($result);

		if($count>0){

			echo "Choose any student ID from this List: ";

			while($row = mysql_fetch_array($result))
					echo $row['user_id'].", ";

		}
		else
			echo "No student is registered in this system. Register at least 1 student.";


	?>

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

			<?php } else
				echo "<script>window.location='login.php'</script>"; ?>
		


</body>
</html>