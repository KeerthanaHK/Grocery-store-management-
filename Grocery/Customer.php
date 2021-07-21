<?php 
include ("db.php");


if (isset($_POST['grocery_stores'])) {

  $customer_id = $_POST['customer_id'];
  $Name = $_POST ['Name'];
  $phoneNo = $_POST ['phoneNo'];
  $address = $_POST ['address'];


if(!empty($customer_id) && !empty($Name) && !empty($phoneNo) && !empty ($address) ) {

   $sql = "INSERT INTO `customer` (`customer_id`, `Name`, `phoneNo`, `address`)
                        VALUES ('$customer_id', '$Name', '$phoneNo', '$address')";

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

      
         <label>ID:
         <input type= "text" name="customer_id">
         </label><br><br>

         <label>Name: 
         <input type = "text" name="Name">
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