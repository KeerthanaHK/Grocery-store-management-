<?php
	require('db.php');  
	$a=$_GET['id'];
if(isset($_GET['id'])){    
$sql = "delete from worker where id=$a";    
$result = mysqli_query($con,$sql);    
}
header('Location:viewworker.php');
?>