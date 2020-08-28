<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<?php
    Include 'nav.php'
?>
<center><h2 class="m-2" style="color: green; padding: 50px;">SIGN IN</h2></center>
 <div class="container">
 	<center>
 	<form method="Post" action="">
 		<fieldset style="border: 3px groove teal; padding: 5px; width: 40%; height: 300px; margin: 20px;">
 		<label style="color: blue;">Email</label><br>
 		<input type="email" name="email" placeholder="Enter your Email" class="form-control" style="width: 60%"><br>
 		 <label style="color: blue;">Password</label><br>
 		<input type="password" name="password" placeholder="Enter your Password" class="form-control" style="width: 50%">
 		<center><input type="submit" name="login" value="login" class="btn btn-danger m-5"></center>
 	</fieldset>
 	</form>
 	</center>
 </div>
 <?php
 session_start();

if (isset($_POST['login'])) {
$email= $_POST['email'];
$password= $_POST['password'];
$hash_password= sha1($password);
Include 'connection.php';
$sql= "select * from users where email='$email' and password='$hash_password'";
$dbc= mysqli_query($con,$sql);
             if ($dbc->num_rows==0) {
						echo "Incorrect email and password";
					}
			  
                else {
					while ($row=mysqli_fetch_array($dbc)) {
				   $_SESSION['surname']=$row['surname'];
                   $_SESSION['fullname']=$row['fullname'];
                  $_SESSION['image']=$row['user_image'];
                  $_SESSION['age']=$row['age'];
                  $_SESSION['gender']=$row['gender'];
                  $_SESSION['country']=$row['country'];
                  $_SESSION['address']=$row['address'];
                  $_SESSION['phoneNumber']=$row['phoneNumber'];
                  $_SESSION['email']=$row['email'];
					$_SESSION['user_id']=$row['user_id'];
					header("location:dashboardp.php");
				}
				}
	
}
 ?>
 <?php
Include 'footer.php';
  ?>
</body>
</html>