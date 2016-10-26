<?php 
session_start();
include "db.php";

	if($_SESSION['loginstatus']=="ok")
	{
		

		echo "<h2>Your Profile</h2><br><br>";
		$userId = $_SESSION['user_id'];
		
		$result = mysql_query("SELECT * FROM `userinfo` where user_id=$userId");

		$count = mysql_num_rows($result);
		
		

		if($count==1){

			$row = mysql_fetch_array($result);
			echo "Name: ".$row['name']."<br>";
			echo "Email: ".$row['emailid']."<br>";
			echo "User Type: ".$row['user_role']."<br>";
		}
		else
			echo "Information not found!<br>";

		echo "<br><br>";

		if($row['user_role']=="student")
			echo "<a href='student_dashboard.php'>Go to Dashboard</a>";
		else
			echo "<a href='teacher_dashboard.php'>Go to Dashboard</a>";

		echo "<br><br>";

		echo "<a href='logout.php'>Logout</a>";	
		
	}
	else
		echo "<script>window.location='login.php'</script>";


?>
