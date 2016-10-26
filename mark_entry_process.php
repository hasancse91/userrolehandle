<?php
session_start();
include "db.php";

	if($_SESSION['loginstatus']=="ok"){

		$userId = $_POST['user_id'];
		$totalMarks = $_POST['total_marks'];

		mysql_query("INSERT INTO `marks_table` (user_id, total_marks) VALUES('$userId','$totalMarks')");

		echo "<script>window.location='mark_entry_form.php'</script>";

	}
	else
		echo "<script>window.location='login.php'</script>";

?>