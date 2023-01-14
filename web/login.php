<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: dashboard.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .form-container{
    font-family: 'Raleway', sans-serif;
    padding-right: 15px;
    position: relative;
    z-index: 1;
}
.form-container:before{
    content: '';
    background-color: rgba(255,255,255,0.5);
    position: absolute;
    left: 0;
    right: 0;
    top: 20%;
    bottom: 20%;
    z-index: -1;
}
.form-container .title{
    color: #333;
    background-color: #fff;
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    padding: 15px 50px 15px 20px;
    margin: 0;
    display: inline-block;
    clip-path: polygon(0 0, 80% 0%, 100% 100%, 0% 100%);
}
.form-container .title i{
    color: #792D3B;
    margin-right: 10px;
}
.form-container .form-horizontal{
    background: #fff;
    padding: 30px 0 0;
    box-shadow: 10px 10px 10px rgb(0,0,0,0.1);
}
.form-horizontal .form-group{
    padding: 0 25px;
    margin: 0 0 20px;
}
.form-horizontal .form-group:last-of-type{ margin-bottom: 30px; }
.form-horizontal .form-group label{
    font-size: 13.5px;
    text-transform: uppercase;
}
.form-horizontal .form-group label.check-label{
    text-transform: none;
    vertical-align: middle;
    display: inline-block;
}
.form-horizontal .form-control{
    color: #111;
    background: #F5F5F5;
    font-size: 16px;
    font-weight: 500;
    letter-spacing: 1px;
    height: 33px;
    padding: 6px 12px;
    border-radius: 0;
    border: none;
    box-shadow: none;
    border-top: 1px solid #e7e7e7;
    border-left: 1px solid #e7e7e7;
}
.form-horizontal .form-control:focus{
    background-color: rgba(216, 63, 88, 0.1);
    box-shadow: none;
}
.form-horizontal .checkbox{
    height: 14px;
    width: 14px;
    min-height: auto;
    margin: 0 3px 0 0;
    border: 1px solid #999;
    cursor: pointer;
    display: inline-block;
    position: relative;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    transition: all 0.3s ease;
}
.form-horizontal .checkbox:before{
    content: '';
    height: 7px;
    width: 14px;
    border-bottom: 3px solid #792D3B;
    border-left: 3px solid #792D3B;
    opacity: 0;
    transform: rotate(-45deg);
    position: absolute;
    left: 1px;
    top: 0;
    transition: all 0.3s ease;
}
.form-horizontal .checkbox:checked{ border-color: #792D3B; }
.form-horizontal .checkbox:checked:before{ opacity: 1; }
.form-horizontal .checkbox:not(:checked):before{ opacity: 0; }
.form-horizontal .checkbox:focus{ outline: none; }
.form-horizontal .signup{
    color: #fff;
    background-color: #87314e;
    font-size: 18px;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 0;
    display: block;
    transition: all 0.3s ease 0s;
}
.form-horizontal .signup:hover,
.form-horizontal .signup:focus{
    background-color: #df405a;
}
.row{
    justify-content: center;
}
body{
    background-image: url("https://www.ackcscharitabletrust.org/images/platelets.jpg ");

      /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

    </style>
</head>
<body>
    
        <div class="container mt-5 ">
            <div class="row">
                <div class="col-md-offset-4 col-md-6 col-sm-offset-3 col-sm-6">
                    <div class="form-container">
                        <h3 class="title"><i class="far fa-caret-square-right"></i> Login</h3>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="text" class="form-control" id="semail">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" id="spassword">
                            </div>

                            <button  type="button" class="btn signup" id="btn">Get Started</button>
                        </form>
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
	
	var email = $('#semail').val();
    var password = $('#spassword').val();

	// validating form 
	if(email!="" && password!="" ){
		
							// ajax started here
							$.ajax({
								url: "login_verify.php",
								type: "POST",
								data: {
									  //left side is [name] go to php
									email: email,
                                    password: password			
								},
								cache: false,
								success: function(dataResult){
									var dataResult = JSON.parse(dataResult);
									if(dataResult.statusCode==200){
										
                                            alert("login....");
											$('#semail').val("");
											$('#spassword').val("");
                                            // similar behavior as clicking on a link
                                             // similar behavior as clicking on a link
                                            window.location.href = "dashboard.php";                                                                                  
											//after submit form data we again run this function
									}
                                    
                                else if(dataResult.statusCode==201){
										alert("email not registerd...");
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