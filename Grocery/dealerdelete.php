<?php
	require('db.php');  
if(isset($_GET['id'])){    
$sql = "delete from dealer where id = '".$_GET['id']."'";    
$result = mysqli_query($con,$sql);    
}
header('Location:viewdealer.php');
?>