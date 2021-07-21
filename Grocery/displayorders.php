<?php

include ("db.php");

?>


<!DOCTYPE html>

<html>

<head>

 <title></title>



 <style type="text/css">

table {

 border:1px solid black;

 border-collapse: collapse;

}



td{

 border:1px solid black;

 padding: 10px;

}

 </style>



</head>

<body>

<table>



<tr>



<?php

$sel = "SELECT * FROM `orders` ";

$qrydisplay = mysqli_query($db, $sel);

while($row = mysqli_fetch_array($qrydisplay)){

 $order_id  =  $row['order_id'];

 $customer_id  =  $row['customer_id'];

 $product_id  =  $row['product_id'];

 $quantity  =  $row['quantity'];

 $Price  =  $row['Price'];

 $date  =  $row['date'];

 echo "<tr><td>".$order_id."</td><td>".$customer_id."</td><td>".$product_id."</td><td>".$quantity."</td><td>".$Price."</td><td>".$date."</td><td><a href='editorders.php?edit=$order_id' >Edit</a></td><td><a href='deleteorders.php?deleteorder_id=$order_id' >Delete</a></td></tr>";





}



?>



</tr>

</table>

</body>

</html>