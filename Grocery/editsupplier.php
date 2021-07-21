<?php

include ("db.php");

$getsupplier_id = $_GET['edit'];



$seledittwo = "SELECT * FROM `supplier` WHERE `supplier_id` = '$getsupplier_id'";





$qry = mysqli_query($db, $seledittwo);



$selassoc = mysqli_fetch_assoc($qry);



$supplier_id = $selassoc['supplier_id'];

$product_id = $selassoc['product_id'];

$name = $selassoc['name'];

$date = $selassoc['date'];

$quantity = $selassoc['quantity'];

$phoneNo = $selassoc['phoneNo'];

$address = $selassoc['address'];

if(isset($_POST['updateedit'])) {

 $supplier_id =  $_POST['supplier_id'];

 $product_id =  $_POST['product_id'];

 $name =  $_POST['name'];

 $date =  $_POST['date'];

 $quantity =  $_POST['quantity'];

 $phoneNo =  $_POST['phoneNo'];

 $address =  $_POST['address'];


 $seleditt = "UPDATE `supplier` SET `product_id`='$product_id',`name`='$name',`date`='$date', `quantity`='$quantity', `phoneNo`='$phoneNo', `address`='$address' WHERE `supplier_id` = '$supplier_id'";

 $qry = mysqli_query($db, $seleditt);



 if($qry) {

  header("location: displaysuppliers.php");

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

   <input type="text" name="supplier_id" value="<?php echo $supplier_id; ?>"><br><br>

 <input type="text" name="product_id" value="<?php echo $product_id; ?>"><br><br>
 <input type="text" name="name" value="<?php echo $name; ?>"><br><br>

 <input type="text" name="date" value="<?php echo $date; ?>"><br><br>

 <input type="text" name="quantity" value="<?php echo $quantity; ?>"><br><br>

 <input type="text" name="phoneNo" value="<?php echo $phoneNo; ?>"><br><br>

  <input type="text" name="address" value="<?php echo $address; ?>"><br><br>

 <input type="submit" name="updateedit" value="Update">



</form>

</body>

</html>
