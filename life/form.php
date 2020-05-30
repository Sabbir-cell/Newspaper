<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Life style</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="tt">
		<form action="insert.php" method="post" enctype="multipart/form-data">
		Img:
		<input type="file" name="pic"><br><br>
		Caption:
		<textarea name="b" placeholder="Enter your Caption"></textarea><br><br>
		Deatils:
		<textarea name="c" placeholder="Enter your Deatils"></textarea><br><br>
		<input type="submit" name="" value="Submit">
		<input type="reset" name="" value="Clear">
		</form>
	</div>
</body>
</html>