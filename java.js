function update(app_id) {
	var a=app_id
	$.ajax({
		type:"GET",
		url:"update.php",
		data:{
			app_id:a
		},
		success: function(result){
			//if 1 is return from php, you just approved, update the appointment status to 
			//Approved using jquery
		 if (result==1) {
		 	$("#a"+app_id).text("Approved")
		 }//if 1 is not returned from php, you just rescheduled, update the appointment status to
		 else{
		 	$("#a"+app_id).text("Rescheduled")
		 }
		},
		error: function(error){
			console.log(error)
		}
	});
}