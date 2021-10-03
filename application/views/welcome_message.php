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
	<br><br>

	<form action="/ecp/owning-company" method="post" enctype="multipart/form-data">
		<p>emp_number</p>
		<input type="text" name="emp_number"/>
		<p>owned</p>
		<input type="radio" name="owned" value="0"/>FALSE
		<input type="radio" name="owned" value="1"/>TRUE
		<p>amount</p>
		<input type="number" name="amount"/>
		<p>Foto</p>
		<input type="file" name="image"/>
		<br><input type="submit" value="submit"/>
	</form>
</body>
</html>
