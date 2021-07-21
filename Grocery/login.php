<!DOCTYPE html>
<html>
   <head>
   	<title>
   		Grocerystore.com
   	</title>
   	<link rel="stylesheet" href="css/style.css"/>
   	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700,700i" rel="stylesheet">
   </head>
   <body>
   	<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `admin` WHERE username='$username'
and password='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
	<div id="frm">
	

		<center>
		<h1> Login</h1>
		<a href="http://localhost/grocery/home/">HOME</a>
			<br><br><br>
		<form action="login.php" method="POST">
				<label>username:
				<input type="text" class="form-control" name="username">
			</label><br><br>

			
				<label>password:
				<input type="password" class="form-control" name="password">

				</label><br><br>
				<label>
			
				<input type="submit" value="Login"> 
			</label>
		</form></center>
	</div>
<?php } ?>
</body>
</html>
