<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <?php
    Include 'nav.php'
?>
	  <div class="container">
      <center>
      <h1 class="m-2" style=" padding: 80px;">REGISTER HERE</h1>
      </center>
      <div class="row">
      <div class="col-md-6">
        <form method="post" action="" enctype="multipart/form-data">
      <label style="color: green;">SURNAME</label>
       <input type="text" name="surname" placeholder="Your Surname" class="form-control"><br>
         <label style="color: green;">OTHER NAMES</label>
         <input type="text" name="fullname" placeholder="Input other names" class="form-control"><br>
         <label style="color: green;">Select an Image</label>
         <input type="file" name="image" class="form-control"><br>
       <label style="color: green;">AGE</label>
       <input type="text" name="age" placeholder="Your Age" class="form-control"><br>
         <label style="color: green;">GENDER</label>
          <input type="radio" name="gender" value="Male" checked="">Male
          <input type="radio" name="gender" value="Female">Female<br> 
        <label style="color: green;">COUNTRY</label>
        <input type="text" name="country" placeholder="Your Country" class="form-control"><br>
      </div>
  	   <div class="col-md-6">
        <label style="color: green;">ADDRESS</label>
         <input type="text" name="address" placeholder="Address" class="form-control"><br>
  		  <label style="color: green;">PHONE NUMBER</label>
  		  <input type="number" name="phoneNumber" placeholder="Enter Your phone Number" class="form-control"><br>
  		    <label style="color: green;">EMAIL</label>
  		    <input type="email" name="email" placeholder="Enter your Email" class="form-control"><br>
  		   <label style="color: green;">PASSWORD</label>
          <input type="password" name="password" placeholder="Enter your password" class="form-control"><br>
  	 <label style="color: green;">Confirm Password</label>
  	 <input type="password" name="conPassword" placeholder="Confirm your Password" class="form-control"><br>
    </div>
    </div>
     <center><input type="submit" name="submit" class="btn btn-outline-success m-5"></center>
     </form>
  </div>
  <?php
  session_start();
if (isset($_POST['submit'])) {
  $surname= $_POST['surname'];
  $fullname= $_POST['fullname'];
  $imageName= $_FILES['image']['name'];
  $folderName= 'uploads/.';
  $tmp_name=$_FILES['image']['tmp_name'];
  $imagePath=$folderName.$imageName;
  $age= $_POST['age'];
  $gender= $_POST['gender'];
  $country= $_POST['country'];
  $address= $_POST['address'];
  $phoneNumber= $_POST['phoneNumber'];
  $email= $_POST['email'];
  $password= $_POST['password'];
  $hash_password= sha1($password);
  $conPassword= $_POST['conPassword'];
              if ($surname=='') {
                echo "Enter your surname";
              }
              elseif ($fullname=='') {
                echo "Enter other names";
              }
               elseif ($imageName=='') {
                echo "choose yourimage";
              }
              elseif ($age=='') {
                echo "Enter your age";
              }
              elseif ($gender=='') {
                echo "choose a gender";
              }
               elseif ($country=='') {
                echo "Enter your Country";
              }
              elseif ($address=='') {
                echo "Enter your address";
              }
              elseif ($phoneNumber=='') {
                echo "Enter your phone Number";
              }
              elseif ($email=='') {
                echo "Enter your email";
              }
              elseif ($password=='') {
                echo "Enter your password";
              }
              elseif ($conPassword=='') {
                echo "Re-enter your password";
              }
               else{
                Include 'connection.php';
                $upload= move_uploaded_file($tmp_name,$imagePath);
               $sql= "insert into users values('','$surname','$fullname','$imagePath','$age','$gender','$country','$address','$phoneNumber','$email','$hash_password')";
               $dbc= mysqli_query($con,$sql);
            if ($dbc) {
                 echo "Successful Registration";
                  header("Location:login.php");
                }
                else{
                  echo mysqli_error($con);
                }
     }

  }
  ?>
  <?php
Include 'footer.php';
  ?>
</body>
</html>