<?php
$a=$_POST['p2'];
$b=$_POST['p3'];
$c=$_POST['p4'];
$d=$_POST['p5'];
$f=$_POST['p7'];
	require('db.php');  
$sql = "UPDATE dealer SET name='$a',phone='$b',address='$c',no_items='$d' WHERE id='$f'";    
$result = mysqli_query($con,$sql);    

header('Location:viewdealer.php');
?>