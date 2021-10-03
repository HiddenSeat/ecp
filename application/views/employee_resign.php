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
		<p>emp number : <?= $employee->emp_number?></p>
		<p>leave date : <?= $employee->leave_date ?></p>
		
	<br><br>

	<form action="/ecp/owning-company" method="post" enctype="multipart/form-data">
		<input type="hidden" name="emp_number" value="<?= $employee->emp_number ?>"/>
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
