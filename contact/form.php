<?php


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">	
</head>
<title>Contact Form</title>
<body>
	<div class="first">
	<?php
	if (isset($_GET['success'])) {
		echo $_GET['success'];
	}
	if (isset($_GET['error'])) {
		echo $_GET['error'];
	}

	?>
	<h1>Contact Us</h1>
		<form action="insert.php" method="post" enctype="multipart/form-data">
		Name:
		<input type="text" name="a" placeholder="Enter name"><br><br>
		Email:
		<input type="email" name="b" placeholder="Enter Email"><br><br>
		Message:
		<textarea name="c" placeholder="Message"></textarea><br><br>
		<input type="submit" name="" value="Submit">
		<input type="reset" name="" value="Clear">
		</form>
	</div>
	

</body>
</html>