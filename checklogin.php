<?php
session_start();
include "db.php";
echo $emailid=$_POST['emailid'];
echo $password=md5($_POST['password']);

$sql="select * from userinfo where emailid='$emailid' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1)
{
	$_SESSION['loginstatus']="ok";
	$row = mysql_fetch_array($result);
	$_SESSION['id'] = $row['id'];
	echo "<script>window.location='dashboard.php'</script>";
}
else
{
	echo "<script>window.location='login.php'</script>";
}

?>