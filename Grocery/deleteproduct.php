<?php

include ("db.php");

$getproduct_id = $_GET['deleteproduct_id'];



$sel = "DELETE FROM `product` WHERE `product_id` = '$getproduct_id'";

$qry = mysqli_query($db, $sel);



if($qry) {

header("location: displayproduct.php");
 

}

?>