<?php 
$e=$_POST['p11'];
$a=$_POST['p2'];
$b=$_POST['p3'];
$c=$_POST['p4'];
$d=$_POST['p5'];
require('db.php');

 $sql = "UPDATE `grocery` SET name='$a', quantity='$b', price='$c', about='$d' where id=$e";
        
	
	 $result = mysqli_query($con,$sql);

        if($result){
			header("Location: view.php");
           ?>
		<script type="text/javascript">
            window.alert("update successfully");
            window.location="view.php";
            </script>
			<?php 
           
    
}else{
	echo"connection error";
}

?>