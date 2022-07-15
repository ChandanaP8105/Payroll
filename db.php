<?php
	$conn = mysqli_connect("localhost", "root", "", "payroll");

	if (mysqli_connect_errno())
	{
		echo "Database Connection Failed" . mysqli_connect_error();
	}
?>