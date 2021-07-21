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

$sel = "SELECT * FROM `product` ";

$qrydisplay = mysqli_query($db, $sel);

while($row = mysqli_fetch_array($qrydisplay)){

 $product_id  =  $row['product_id'];

 $name =  $row['name'];

 $description  =  $row['description'];

 $price  =  $row['price'];

 $exp_date  =  $row['exp_date'];


 echo "<tr><td>".$product_id."</td><td>".$name."</td><td>".$description."</td><td>".$price."</td><td>".$exp_date."</td><td><a href='editproduct.php?edit=$product_id' >Edit</a></td><td><a href='deleteproduct.php?deleteproduct_id=$product_id' >Delete</a></td></tr>";





}



?>



</tr>

</table>

</body>

</html>