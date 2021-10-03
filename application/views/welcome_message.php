<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form input</title>
</head>
<body>
	<form action="/ecp/employee/resign" method="post">
		<p>emp_number</p>
		<input type="text" name="emp_number"/>
		<p>leave date</p>
		<input type="date" name="leave_date"/>
		<br><input type="submit" value="submit"/>
	</form>
</body>
</html>
