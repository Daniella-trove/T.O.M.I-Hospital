<?php
if (isset($_GET['app_id'])) {
	$app_id=$_GET['app_id'];
	include 'connection.php';
	$sql="select * from appointment where app_id='$app_id'";
	$dbc=mysqli_query($con,$sql);
  
  while ($row=mysqli_fetch_array($dbc)) {
  	$currentstatus=$row['status'];
  	//if current status 0, update to 1 and return to ajax
  	if ($currentstatus==0){
  		$updateQuery="update appointment set status='1' where app_id='$app_id'";
  		$updatedbc= mysqli_query($con,$updateQuery);
  		//if update is successful, return 1
  		if ($updateQuery) {
  			echo 1;
  		}
  		else {
  			echo mysqli_error($con);
  		}
  	}
  	// if current status is 1=0, it means its already on 1
  	elseif ($currentstatus==1) {
  		$updateQuery="update appointment set status='2' where app_id='$app_id'";
  		$updatedbc= mysqli_query($con,$updateQuery);
  		// if update is successful, return 2
  		if ($updateQuery) {
  			echo 2;
  		}
  		else {
  			echo mysqli_error($con);
  		}
  	}
  		else {
  			$updateQuery="update appointment set status='1' where app_id='$app_id'";
  			$updatedbc= mysqli_query($con,$updateQuery);
  			// if update is successful, return 1
  			if ($updateQuery) {
  				echo 1;
  			}
  			else {
  				mysql_error($con);
  			}
  		}
  	
   }
   	
}

?>	