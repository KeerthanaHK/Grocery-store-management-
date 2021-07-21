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

$sel = "SELECT * FROM `customer` ";

$qrydisplay = mysqli_query($db, $sel);

while($row = mysqli_fetch_array($qrydisplay)){

 $customer_id  =  $row['customer_id'];

 $Name  =  $row['Name'];

 $phoneNo  =  $row['phoneNo'];

 $address  =  $row['address'];



 echo "<tr><td>".$customer_id."</td><td>".$Name."</td><td>".$phoneNo."</td><td>".$address."</td><td><a href='edit.php?edit=$customer_id' >Edit</a></td><td><a href='delete.php?deletecustomer_id=$customer_id' >Delete</a></td></tr>";





}



?>



</tr>

</table>

</body>

</html>