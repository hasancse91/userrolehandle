<?php
session_start();
include "db.php";

$name = $_POST['name'];
$emailId = $_POST['emailid'];
$password = md5($_POST['password']);
$userRole = $_POST['user_role'];

mysql_query("INSERT INTO `userinfo` (user_role, name, emailid, password) VALUES('$userRole','$name', '$emailId', '$password')");

echo "<script>window.location='login.php'</script>";

?>