<?php
	session_start();
	if (!isset($_COOKIE['one'])) {
		header("location:login.php");
	}
	echo "<a href='logout.php'>logout</a>";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<h1>Welcome</h1>
</body>
</html>