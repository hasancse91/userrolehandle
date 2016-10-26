<?php
session_start();
include "db.php";

	if($_SESSION['loginstatus']=="ok"){

		$userId = $_SESSION['user_id'];

		if($_SESSION['user_role']=="student"){

			echo "<h2>Your marks</h2>";


			$result = mysql_query("SELECT total_marks from `marks_table` where user_id=$userId");

			//$count = mysql_num_rows($result);

			if(mysql_num_rows($result)>0){

				$row = mysql_fetch_array($result);

				echo "Your total marks: ".$row['total_marks'];
			}
			else
				echo "Your result is processing!";

		}
		else{

			echo "<h2>Marks inputted by you</h2>";

			$result = mysql_query("SELECT user_id, name, emailid, total_marks from `userinfo` INNER JOIN `marks_table` on userinfo.user_id=marks_table.user_id");

			if(mysql_num_rows($result)>0){

				echo "Name | Email | Total Marks<br>";

				while($row = mysql_fetch_array($result)){

					echo $row['name']." | ".$row['emailid']." | ".$row['total_marks']."<br>";

				}

				 
			}
			else
				echo "You don't input any marks!";


		}

		echo "<br><br>";

		echo "<a href='profile.php'>Profile</a>";
		echo "<br><br>";

		echo "<a href='see_marks.php'>See Marks</a>";
		echo "<br><br>";
		
		echo "<a href='logout.php'>Logout</a>";	
	}
	else
		echo "<script>window.location='login.php'</script>";


?>