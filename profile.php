<?php 
session_start();
include "db.php";
if($_SESSION['loginstatus']=="ok")
{
	

	echo "Hello<br><br>";
	$userId = $_SESSION['user_id'];
	echo "user id is: ".$userId."<br><br>";

	$result = mysql_query("SELECT emailid FROM `userinfo` where user_id=$userId");

	$count = mysql_num_rows($result);
	
	echo "Count = ".$count."<br>";

	if($count==1){

		$row = mysql_fetch_array($result);
		echo "Email ID is: ".$row['emailid']."<br>";
	}
	else
		echo "ID not Found<br>";

	echo "User Role: ".$_SESSION['user_role']."<br><br>";

	echo "<a href='logout.php'>Logout</a>";	
	
}


?>
