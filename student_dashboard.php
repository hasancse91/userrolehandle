<?php 
session_start();

	if($_SESSION['loginstatus']=="ok")
	{
		echo "<h2>Student Dashboard</h2>";

		echo "<a href='profile.php'>Profile</a>";
		echo "<br><br>";

		echo "<a href='see_marks.php'>See Marks</a>";
		echo "<br><br>";


		echo "<a href='logout.php'>Logout</a>";	
		
	}
	else
		echo "<script>window.location='login.php'</script>";


?>
