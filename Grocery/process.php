<?php
//Get values passed from form in login.php file
$username = $_POST ['user'];
$password = $_POST ['pass'];

//to prevent mysql injection 

$username = stripcslashes($username);
$password = stripcslashes($password);

//connect to the sever and select database 
$db = mysqli_connect("localhost", "root", "","grocery_stores");


//Query the database for clerks 
$result = mysqli_query($db,"select * from clerks where username = '$username' and password = '$password'") 
or die("Failed to query database".mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['username']==$username && $row['password'] == $password)
 {
	header("location: index.php");
} 
else 
{
	echo "Failed to login!";
}

?>