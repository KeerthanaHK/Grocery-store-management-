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

$sel = "SELECT * FROM `supplier` ";

$qrydisplay = mysqli_query($db, $sel);

while($row = mysqli_fetch_array($qrydisplay)){

 $supplier_id  =  $row['supplier_id'];

 $product_id  =  $row['product_id'];

 $name  =  $row['name'];

 $date  =  $row['date'];

 $quantity  =  $row['quantity'];

 $phoneNo =  $row['phoneNo'];

 $address =  $row['address'];

 echo "<tr><td>".$supplier_id."</td><td>".$product_id."</td><td>".$name."</td><td>".$date."</td><td>".$quantity."</td><td>".$phoneNo."</td><td>".$address."</td><td><a href='editsupplier.php?edit=$supplier_id' >Edit</a></td><td><a href='deletesupplier.php?deletesupplier_id=$supplier_id' >Delete</a></td></tr>";





}



?>



</tr>

</table>

</body>

</html>