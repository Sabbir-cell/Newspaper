<?php
	$x="localhost";
	$y="root";
	$z="";
	$db="newspaper";
	$m= new mysqli($x,$y,$z,$db);
	if ($m->connect_error) {
		echo ("not connect.$m->connect_error");
	}else{

		$q=$_POST['a'];
		$w=$_POST['b'];
		$e=$_POST['c'];

			$sql="INSERT INTO contact(name,email,message) VALUES('$q','$w','$e')";
			if ($m->query($sql)===TRUE) {
				header('location:form.php?success=successfuly');
				//echo "success";
			}else{
				//echo $m->error;
				header('location:form.php?error=fail');
			}
		}
?>