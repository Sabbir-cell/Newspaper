<?php
session_start();
if (isset($_COOKIE['one'])) {
	header("location:session.php");	
}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="loginBox">
	<h2>log In Here</h2>
	<form method="post" action="select.php">
		<a>Username:</a>
		<input type="text" name="a" placeholder="Enter Username">
		<a>Password:</a>
		<input type="password" name="b" placeholder="Enter Password">
		<input type="submit" name="" value="LOGIN">
	</form>
	</div>
</body>
</html>
<?php
}
?>