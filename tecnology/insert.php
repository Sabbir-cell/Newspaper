<?php
	$x="localhost";
	$y="root";
	$z="";
	$db="newspaper";
	$m= new mysqli($x,$y,$z,$db);
	if ($m->connect_error) {
		echo ("not connect.$m->connect_error");
	}else{
		$w=$_POST['b'];
		$e=$_POST['c'];
		$dir="upload/";
		$imgs=$_FILES['pic']['name'];
		$target=$dir.basename($imgs);
		if (move_uploaded_file($_FILES['pic']['tmp_name'], $target)) {
			$sql="INSERT INTO tech(img,caption,deatils) VALUES('$imgs','$w','$e')";
			if ($m->query($sql)===TRUE) {
				header('location:form.php');
			}else{
				echo $m->error;
			}
		}else{
			echo "wrong";
		}
	}
?>