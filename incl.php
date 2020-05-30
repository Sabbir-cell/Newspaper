<?php
$x="localhost";
$y="root";
$z="";
$db="newspaper";
$m= new mysqli($x,$y,$z,$db);
if ($m->connect_error) {
	echo ("not connect.$m->connect_error");
}


?>