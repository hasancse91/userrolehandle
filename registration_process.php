<?php
session_start();
include "db.php";

$name = $_POST['name'];
$emailId = $_POST['emailid'];
$password = md5($_POST['password']);

mysql_query("INSERT INTO `userinfo` (name, emailid, password) VALUES('$name', '$emailId', '$password')");

echo "<script>window.location='login.php'</script>";

?>