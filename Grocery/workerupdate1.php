<?php
$a=$_POST['p2'];
$b=$_POST['p3'];
$c=$_POST['p4'];
$d=$_POST['p5'];
$e=$_POST['p6'];
$f=$_POST['p7'];
	require('db.php');  
   
$sql = "UPDATE `worker` SET `name`='$a',`phone`='$b',`salary`='$c',`address`='$d',`joined`='$e' WHERE id=$f";    
$result = mysqli_query($con,$sql);    

header('Location:viewworker.php');
?>