<?php

include ("db.php");

$getsupplier_id = $_GET['deletesupplier_id'];



$sel = "DELETE FROM `supplier` WHERE `supplier_id` = '$getsupplier_id'";

$qry = mysqli_query($db, $sel);



if($qry) {

header("location: displaysuppliers.php");
 

}

?>