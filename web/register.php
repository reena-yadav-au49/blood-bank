<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: dashboard.php");
  exit;
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
<style>


body{
margin:0%;
    padding:0%;
    overflow-x:hidden;
font-family: 'Comfortaa', cursive;

}



.row{background-color:#ffffff;
margin-top:5%;
border-radius: 4px;
box-shadow: 0 1px 1px 0 #ffffff, 0 6px 20px 0 #efefef;
padding:5%;


}

hr{width:80%;
align-items: left;
  color: #57595a;
      

 }
 
  
#fname ,#sname {
  border: 1.2px solid #d5d7d7;
  border-radius: 4px;
  padding: 15px 15px 15px 15px;

}



.cont{
	margin: auto;
  width: 55%;
  
  
}
#demp{margin-bottom:15px;}

@media only screen and (max-width: 600px) {
   body {
      margin: 0;
      padding: 0;
   }
   .cont {
      width: 82%;
   }
   
}

/*space in nav bar*/
#sf{margin-right:9.5%;
padding-left:5%;

}

li{padding-left:14px;
padding-right:14px;

font-style:bold;
color:yellow;
}


/*image css*/

.ig{
  border-radius: 4px;
 background-size:     cover;
 background-repeat:   no-repeat;
 background-position: center center; 

 width:100%;
 height: 550px;
 
 
}

/*button color*/

.btl{background-color:#57595a;
border-color:#57595a;
color:white;
width:60%;
padding:15px;
}


.card{
width: 95%;
margin-top:40px;
margin-bottom:20px;



}
body{
    background-image: url("https://media.istockphoto.com/id/1320162065/vector/blood-cells-red-erythrocytes.jpg?s=612x612&w=0&k=20&c=rX8kGwiOsHW-V-BOal3Cf6ADKdjx_U5snDdykya0jbs=");
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}



</style>
    <title>beats</title>
	
  </head>
  <body>

  
	
<div class="cont">	
	
	<br/>
<br/><br/>
<br/>
		<div class="row">
			<div class="col-md-6">
					
					<img src="images/blodd.png" class="ig"/>
					
				</div>
						
		<div class="col-md-6 col-lg-6">
		<h2>Registration  Form</h2>
				<hr/>
  
			  
				<div class="form-group">
				  <label for="text">Username</label>
					<input type="text" class="form-control" id="sname" placeholder="Create user name" name="fname" >
				</div>
				<br/>
				 <div class="form-group">
				  <label for="text">Email</label>
					<input type="text" class="form-control" id="semail" placeholder="enter your email" name="sname" >
				</div>

				<br/>
                <div class="form-group">
                    <label for="text">Create Password</label>
                      <input type="text" class="form-control" id="spassword" placeholder="Enter Password" name="sname" >
                  </div>
				<br/>
				<button type="submit" class="btn btn btl" id="btn">Submit</button>

				<br/><br/><br/>
				
				  <div class="d-flex justify-content-between mb-3">
					<div class="p-2"><p>Go to login </p></div>
    
					<div class="p-2"><p></p></div>
				</div>
	
				
			  
		   </div>
	</div>	
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script>
$(document).ready(function() {

	//on button click fetching data using id in html input field

	$('#btn').on('click', function() {

	// fetching data using id in html input field
	var name = $('#sname').val();
	var email = $('#semail').val();
  var password = $('#spassword').val();

	// validating form 
	if(name!="" && email!="" && password!="" ){
		
							// ajax started here
							$.ajax({
								url: "register_verify.php",
								type: "POST",
								data: {
									name: name,  //left side is [name] go to php
									email: email,
                  password: password			
								},
								cache: false,
								success: function(dataResult){
									var dataResult = JSON.parse(dataResult);
									if(dataResult.statusCode==200){
										alert("Data inserted");
											$('#sname').val("")
											$('#semail').val("")
											$('#spassword').val("")
											//after submit form data we again run this function
											app();
									}
									else if(dataResult.statusCode==203){
										alert("email is already registerd...!");
									}
                  else if(dataResult.statusCode==201){
										alert("Error occured !");
									}
								}
							});
							
							// ajax end here
		
		}
		else{
			alert('Please fill all the field !');
		}
	});

	
});
</script>
  </body>
</html>
                                                                                                                                                          