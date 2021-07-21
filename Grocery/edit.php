<?php

include ("db.php");

$getcustomer_id = $_GET['edit'];



$seledittwo = "SELECT * FROM `customer` WHERE `customer_id` = '$getcustomer_id'";





$qry = mysqli_query($db, $seledittwo);



$selassoc = mysqli_fetch_assoc($qry);



$customer_id = $selassoc['customer_id'];

$Name = $selassoc['Name'];

$phoneNo = $selassoc['phoneNo'];

$address = $selassoc['address'];



if(isset($_POST['updateedit'])) {

 $customer_id =  $_POST['customer_id'];

 $Name =  $_POST['Name'];

 $phoneNo =  $_POST['phoneNo'];

 $address =  $_POST['address'];



 $seleditt = "UPDATE `customer` SET `Name`='$Name',`phoneNo`='$phoneNo',`address`='$address' WHERE `customer_id` = '$customer_id'";

 $qry = mysqli_query($db, $seleditt);



 if($qry) {

  header("location: display.php");

 }

}



//$seledit = "UPDATE `insertdeleteedittable` SET `id`=[value-1],`firstname`=[value-2],`lastname`=[value-3],`email`=[value-4] WHERE `id` = '$getid'";







?>





<!DOCTYPE html>

<html>

<head>

 <title></title>

</head>

<body>


<form method="POST" action="">

   <input type="text" name="customer_id" value="<?php echo $customer_id; ?>"><br><br>

 <input type="text" name="Name" value="<?php echo $Name; ?>"><br><br>
 <input type="text" name="phoneNo" value="<?php echo $phoneNo; ?>"><br><br>

 <input type="text" name="address" value="<?php echo $address; ?>"><br><br>

 <input type="submit" name="updateedit" value="Update">



</form>

</body>

</html>
