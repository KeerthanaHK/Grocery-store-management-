<?php

include ("db.php");

$getorder_id = $_GET['edit'];



$seledittwo = "SELECT * FROM `orders` WHERE `order_id` = '$getorder_id'";





$qry = mysqli_query($db, $seledittwo);



$selassoc = mysqli_fetch_assoc($qry);



$order_id = $selassoc['order_id'];

$customer_id = $selassoc['customer_id'];

$product_id = $selassoc['product_id'];

$quantity = $selassoc['quantity'];

$Price = $selassoc['Price'];

$date = $selassoc['date'];


if(isset($_POST['updateedit'])) {

 $order_id =  $_POST['order_id'];

 $customer_id =  $_POST['customer_id'];

 $product_id =  $_POST['product_id'];

 $quantity =  $_POST['quantity'];

 $Price =  $_POST['Price'];

 $date =  $_POST['date'];


 $seleditt = "UPDATE `orders` SET `customer_id`='$customer_id',`product_id`='$product_id',`quantity`='$quantity', `Price`='$Price', `date`='$date' WHERE `order_id` = '$order_id'";

 $qry = mysqli_query($db, $seleditt);



 if($qry) {

  header("location: displayorders.php");

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

   <input type="text" name="order_id" value="<?php echo $order_id; ?>"><br><br>

 <input type="text" name="customer_id" value="<?php echo $customer_id; ?>"><br><br>
 <input type="text" name="product_id" value="<?php echo $product_id; ?>"><br><br>

 <input type="text" name="quantity" value="<?php echo $quantity; ?>"><br><br>

 <input type="text" name="Price" value="<?php echo $Price; ?>"><br><br>

 <input type="text" name="date" value="<?php echo $date; ?>"><br><br>

 <input type="submit" name="updateedit" value="Update">



</form>

</body>

</html>
