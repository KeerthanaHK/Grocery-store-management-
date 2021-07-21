<?php 
include ("db.php");


if (isset($_POST['grocery_stores'])) {

  $supplier_id = $_POST['supplier_id'];
  $product_id = $_POST ['product_id'];
  $name = $_POST ['name'];
  $date = $_POST ['date'];
  $quantity = $_POST ['quantity'];
  $phoneNo = $_POST ['phoneNo'];
  $address = $_POST ['address'];


if(!empty($supplier_id) && !empty($product_id) && !empty($name) && !empty ($date) && !empty ($quantity) && !empty ($phoneNo) && !empty ($address)) {

   $sql = "INSERT INTO `supplier` (`supplier_id`, `product_id`, `name`, `date`, `quantity`, `phoneNo`, `address`)
                        VALUES ('$supplier_id', '$product_id', '$name', '$date', '$quantity', '$phoneNo', '$address')";

   $qry = mysqli_query($db, $sql);
if ($qry) {
   echo "inserted successfully";
}


} else {
   echo "all fields must be filled";

}

}

?>

<!DOCTYPE html>
<html>
   <head>
      <title></title>
   </head>
   <body>
      <form action="" method="POST">

      
         <label>Supplier_id:
         <input type= "text" name="supplier_id">
         </label><br><br>

         <label>Product_id: 
         <input type = "text" name="product_id">
         </label><br> <br>

         <label>Name:
         <input type = "text" name="name">
         </label><br> <br>

         <label>Date: 
         <input type = "text" name="date">
         </label><br> <br>

         <label>Quantity: 
         <input type = "text" name="quantity">
         </label><br> <br>

         <label>PhoneNo: 
         <input type = "text" name="phoneNo">
         </label><br> <br>

         <label>Address: 
         <input type = "text" name="address">
         </label><br> <br>

         <label>
         <input type = "submit" name="grocery_stores" value="INSERT">
         </label>

      </form>
      </body>
</html>