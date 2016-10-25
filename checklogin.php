<?php
session_start();
include "db.php";

$emailid=$_POST['emailid'];
$password=md5($_POST['password']);

$sql="select * from userinfo where emailid='$emailid' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1)
{
	$_SESSION['loginstatus']="ok";
	$row = mysql_fetch_array($result);
	$_SESSION['user_id'] = $row['user_id'];
	$_SESSION['user_role'] = $row['user_role'];

	if($_SESSION['user_role']=="student")
		echo "<script>window.location='student_dashboard.php'</script>";
	else if($_SESSION['user_role']=="teacher")
		echo "<script>window.location='teacher_dashboard.php'</script>";
}
else
{
	echo "<script>window.location='login.php'</script>";
}

?>