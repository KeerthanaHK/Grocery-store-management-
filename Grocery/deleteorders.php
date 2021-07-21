<?php

include ("db.php");

$getorder_id = $_GET['deleteorder_id'];



$sel = "DELETE FROM `orders` WHERE `order_id` = '$getorder_id'";

$qry = mysqli_query($db, $sel);



if($qry) {

header("location: displayorders.php");
 

}

?>