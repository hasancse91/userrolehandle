<?php 
session_start();
if($_SESSION['loginstatus']=="ok")
{
	echo "This is a secret message\n\n";
	
echo "<br><br>";
echo "<a href='profile.php'>Profile</a>";
echo "<br><br>";
echo "<a href='logout.php'>Logout</a>";	
	
}

?>
