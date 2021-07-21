<?php 
include ("db.php");


if (isset($_POST['grocery_stores'])) {

  $product_id = $_POST['product_id'];
  $name = $_POST ['name'];
  $description = $_POST ['description'];
  $price = $_POST ['price'];
  $exp_date = $_POST ['exp_date'];



if(!empty($product_id) && !empty($name) && !empty($description) && !empty ($price)  && !empty ($exp_date)) {

   $sql = "INSERT INTO `product` (`product_id`, `name`, `description`, `price`, `exp_date`)
                        VALUES ('$product_id', '$name', '$description', '$price', '$exp_date')";

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

      
         <label>Product_id:
         <input type= "text" name="product_id">
         </label><br><br>

         <label>Product_Name: 
         <input type = "text" name="name">
         </label><br> <br>

         <label>Description:
         <input type = "text" name="description">
         </label><br> <br>

         <label>Price: 
         <input type = "text" name="price">
         </label><br> <br>

         <label>Expiry-date: 
         <input type = "text" name="exp_date">
         </label><br> <br>

         <label>
         <input type = "submit" name="grocery_stores" value="INSERT">
         </label>

      </form>
      </body>
</html>