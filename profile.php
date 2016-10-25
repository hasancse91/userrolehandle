<?php 
session_start();
include "db.php";
if($_SESSION['loginstatus']=="ok")
{
	

	echo "Hello<br>";
	$userId = $_SESSION['id'];
	echo "user id is: ".$userId."<br>";

	$result = mysql_query("SELECT emailid FROM `userinfo` where id=$userId");

	$count = mysql_num_rows($result);
	
	echo "Count = ".$count."<br>";

	if($count==1){

		$row = mysql_fetch_array($result);
		echo "Email ID is: ".$row['emailid']."<br>";
	}
	else
		echo "ID not Found<br>";

	echo "<a href='logout.php'>Logout</a>";	
	
}


?>
