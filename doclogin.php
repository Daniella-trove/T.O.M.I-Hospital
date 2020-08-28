<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="background-color: cyan;">
	<div class="container">
	<div class="row">
		<div class="col-md-6">
	<img src="uploads/pngguru.com (4).png" style="margin-top: 40px;">
	</div>

	<div class="col-md-6">
<center><h1 class="m-5" style="color: black;">SIGN IN</h1></center>
<center>
 	<form method="Post" action="">
 		<fieldset style="border: 9px groove black; padding: 5px; width: 350px; height: 300px; ">
 		<label style="color: black;">Email</label><br>
 		<input type="email" name="email" placeholder="Enter your Email" class="form-control" style="width: 70%"><br>
 		 <label style="color: black;">Password</label><br>
 		<input type="password" name="password" placeholder="Enter your Password" class="form-control" style="width: 50%"><br>
 		<center><input type="submit" name="login" value="login" class="btn btn-dark m-1" style="color: white"></center>
 	</fieldset>
 	</form>
 	</center>
 </div>
 </div>
 <?php
 session_start();
if (isset($_POST['login'])) {
$email= $_POST['email'];
$password= $_POST['password'];
$hash_password= sha1($password);
Include 'connection.php';
$sql= "select * from admin where email='$email' and password='$hash_password'";
$dbc= mysqli_query($con,$sql);
if ($dbc->num_rows==0) {
						echo "Incorrect email and password";
					}
			  
                else {
					while ($row=mysqli_fetch_array($dbc)) {
                   $_SESSION['fullName']=$row['fullName'];
                   $_SESSION['email']=$row['email'];
                  $_SESSION['gender']=$row['gender'];
                  $_SESSION['image']=$row['admin_image'];
                  $_SESSION['country']=$row['country'];
                  $_SESSION['address']=$row['address'];
                  $_SESSION['phoneNumber']=$row['phoneNumber'];
                   $_SESSION['dob']=$row['dob'];
                  $_SESSION['age']=$row['age'];
                 $_SESSION['admin_id']=$row['admin_id'];
					header("location:docdashboard.php");
				}
				}         					
	
}
?>
</div>
</body>
</html>