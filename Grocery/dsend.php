<?php 

$a=$_POST['p1'];
require('db.php');
	
	$sql="DELETE FROM `grocery` WHERE `id`=$a";
	
	 $result = mysqli_query($con,$sql);

        if($result){
			header("Location: view.php");
           ?>
		<script type="text/javascript">
            window.alert("delete successfully");
            window.location="view.php";
            </script>
			<?php 
           
    
}else{
	echo"connection error";
}

?>