<!DOCTYPE html>
<html>
<head>
	<title>Doc site</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<style>
			legend{
				display: block;
				width: auto;
				padding: 0 5px;
				margin-bottom: 0;
				font-size: inherit;
				line-height: inherit;
				border: auto;
				border-bottom: none;
				text-align: center;
			}

			fieldset{
				border: 5px solid red;
				padding: 10px;
				width: auto;
				height: 600px;
			}
			.form{
				margin-left: 0px;
			}
		</style>
</head>
<body style="background-color: white;">
  <img src="uploads/pngguru.com (6).png" style="width: 100%">
	<div class="container">
			<center><h1 class="m-3" style="color: blue;">DOCTOR REGISTRATION</h1></center>
			<div class="form">
        <center>
	<form method="post" action="" enctype="multipart/form-data">
	<fieldset>
			<legend style="color: lightsteelblue;">
				<h4>Personal Details</h4>
			</legend>

			<div class="row">
				<div class="col-md-6">
					<label style="color: blue;">Full Name</label><br>
					<input type="text" name="fullName" placeholder="Enter your Full name" class="form-control"><br>
					<label style="color: blue;">Email</label><br>
					<input type="email" name="email" placeholder="your Email" class="form-control"><br>
					<label style="color: blue;">Password</label><br>
					<input type="password" name="password" placeholder="Enter your passsword" class="form-control"><br>
					<label style="color: blue;">Gender</label>
					<input type="radio" name="gender" value="Male" checked="">Male
					<input type="radio" name="gender" value="Female">Female<br>
					<label style="color: blue;">Select an image</label><br>
					<input type="file" name="image" class="form-control"><br>
					<label style="color: blue;">Country</label><br>
					<input type="text" name="country" placeholder="Your Country" class="form-control"><br>
				</div>
				<div class="col-md-6">
					<label style="color: blue;">Address</label><br>
					<input type="text" name="address" placeholder="Enter your address" class="form-control"><br>
					<label style="color: blue;">Phone Number</label><br>
					<input type="number" name="phoneNumber" placeholder="Input your phone Number" class="form-control"><br>
					<label style="color: blue;">Specialisation</label><br>
					<select name="specialisation" class="form-control">
						<option value="">select specialization</option>
						<?php
                         include"connection.php";
                         $sql= "select * from specialisation";
                         $dbc= mysqli_query($con,$sql);
                         while ($row=mysqli_fetch_array($dbc)) {
                         	?>
                         		<option value="<?=$row['special_id']?>"><?=$row['name']?></option>
                         	<?php
                         }
						?>
					</select>
					<label style="color: blue;">Date of Birth</label><br>
					<input type="text" name="dob" placeholder="Enter DOB" class="form-control"><br><br>
					<label style="color: blue;">Age</label><br>
					<input type="number" name="age" placeholder="Input your Age" class="form-control"><br>
				</div>
			</div>
				 <center><input type="submit" name="submit" value="submit" class="btn btn-primary"></center>
	</fieldset>

	</form>
</center>
</div>
	</div>
	<?php
  if (isset($_POST['submit'])) {
  	$fullName= $_POST['fullName'];
  	$email= $_POST['email'];
  	 $password= $_POST['password'];
    $hash_password= sha1($password);
    $gender= $_POST['gender'];
  $imageName= $_FILES['image']['name'];
  $folderName= 'uploads/.';
  $tmp_name=$_FILES['image']['tmp_name'];
  $imagePath=$folderName.$imageName;
  $country= $_POST['country'];
   $address= $_POST['address'];
   $phoneNumber= $_POST['phoneNumber'];
   $specialisation= $_POST['specialisation'];
   $dob= $_POST['dob'];
   $age= $_POST['age']; 
 
              if ($fullName=='') {
                echo "Enter your fullName";
              }
              elseif ($email=='') {
                echo "Enter other email";
              }
              elseif ($password=='') {
                echo "Enter your password";
              }
              elseif ($gender=='') {
                echo "choose a gender";
              }
               elseif ($imageName=='') {
                echo "choose yourimage";
              }
               elseif ($country=='') {
                echo "Enter your Country";
              }
              elseif ($address=='') {
                echo "Enter your address";
              }
              elseif ($age=='') {
                echo "Enter your age";
              }
              elseif ($phoneNumber=='') {
                echo "Enter your phone Number";
              }
              elseif ($specialisation=='') {
                echo "select your specialisation";
              }
              elseif ($dob=='') {
                echo "Enter your date of birth";
              }
              elseif ($age=='') {
                echo "Enter your age";
              }
         else {
         	include 'connection.php';
         	$upload= move_uploaded_file($tmp_name,$imagePath);
         	$sql= "insert into admin values('','$fullName','$email','$hash_password','$gender','$imagePath','$country','$address','$phoneNumber','$specialisation','$dob','$age')";
         	$dbc= mysqli_query($con,$sql);
         	if ($dbc) {
         		echo "<script> alert('Your registration is successful')
         		window.location='doclogin.php'
         		</script>";
         	}
         	else{
         		echo mysqli_error($con);
         	}
         }


  }


	?>
</body>
</html>