<?php
session_start();
$x="localhost";
$y="root";
$z="";
$db="newspaper";
$a= new mysqli($x,$y,$z,$db);
if ($a->connect_error) {
	echo ("not connect.$a->connect_error");
}else{
	$username=$_POST['a'];
	$password=$_POST['b'];
	$sql="SELECT * FROM login WHERE username='$username'";
	$result=$a->query($sql);
		if ($result->num_rows>0) {
			while ($b=$result->fetch_assoc()) {
				$pass=$b['password'];
			}
			if ($password===$pass) {
				$_SESSION['news']="paper";
				setcookie("one","two",time()+7200,"/");
				header('location:session.php');
			}else{
				header('location:login.php');
			}
		}else{
			echo "wrong";
		}
	}



?>