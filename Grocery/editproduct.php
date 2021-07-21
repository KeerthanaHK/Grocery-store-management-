<?php

include ("db.php");

$getproduct_id = $_GET['edit'];



$seledittwo = "SELECT * FROM `product` WHERE `product_id` = '$getproduct_id'";


$qry = mysqli_query($db, $seledittwo);



$selassoc = mysqli_fetch_assoc($qry);



$product_id = $selassoc['product_id'];

$name = $selassoc['name'];

$description = $selassoc['description'];

$price = $selassoc['price'];

$exp_date = $selassoc['exp_date'];


if(isset($_POST['updateedit'])) {

 $product_id =  $_POST['product_id'];

 $name =  $_POST['name'];

 $description =  $_POST['description'];

 $price =  $_POST['price'];

 $exp_date =  $_POST['exp_date'];


 $seleditt = "UPDATE `product` SET `name`='$name',`description`='$description',`price`='$price', `exp_date`='$exp_date' WHERE `product_id` = '$product_id'";

 $qry = mysqli_query($db, $seleditt);



 if($qry) {

  header("location: displayproduct.php");

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

 <input type="text" name="product_id" value="<?php echo $product_id; ?>"><br><br>

 <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
 <input type="text" name="description" value="<?php echo $description; ?>"><br><br>

 <input type="text" name="price" value="<?php echo $price; ?>"><br><br>

 <input type="text" name="exp_date" value="<?php echo $exp_date; ?>"><br><br>

 <input type="submit" name="updateedit" value="Update">



</form>

</body>

</html>
