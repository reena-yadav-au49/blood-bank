<?php 
// Turn off error reporting
error_reporting(0);

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<style>

body{
  background-color:#55E6C1;
}
  </style>
<body>
<!-- nav bar started -->
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#"><h3>Blood Bank<span class="badge bg-secondary"></span></h3></a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav text-center">
        
        <li class="nav-item pe-5">
          <!-- Button trigger modal -->
<button type="button" class="btn btn-info border-0 text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Details
</button>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="#"><b> User: <?php echo  $_SESSION["name"];?></b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container p-4 mt-3" style="width:750px">

<h1>Live Search</h1>
<input type="text" class="form-control p-4"  id="search"

placeholder="Search">

</div>
<hr/>
<div class="container mb-5">


        <table class="table table-striped  table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Contact Number</th>
    </tr>
  </thead>
  <tbody id="tables1">
  <tbody id="tables2">
				  
				</tbody>
</table>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="email" class="form-control" id="sname" aria-describedby="emailHelp">
   
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Blood Group</label>
  <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="sblood">
  <option selected>Open this select menu</option>
  <option value="A+">A+</option>
  <option value="B+">B+</option>
  <option value="O+">O+</option>
  <option value="AB+">AB+</option>
  <option value="O-">O-</option>
</select>
   
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="scontact" aria-describedby="emailHelp">
    
  </div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btn">Save details</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
 app();

/* ********************** 
		Search function started 
		   ***************************** */
		   
		   $("#search").on("keyup", function() {
				var search_term = $(this).val();
				//alert(search_term);
				
				   if(search != '')
					   {
						  
					$.ajax({
								url: "live_search.php",
								type: "POST",
								data: {search:search_term },
								success: function(data){ 
									$('#tables1').hide();
									$('#tables2').show();
									$('#tables2').html(data);
									
									
								}
							});
					   }
					   else{
							$('#table2').hide();
						  $('#table1').show();
              app();
									
             }
					
				});




$('#btn').on('click', function() {

// fetching data using id in html input field
var name = $('#sname').val();
var blood = $('#sblood').val();
var contact = $('#scontact').val();

// validating form 
if(name!="" && blood!="" && contact!="" ){
  

							// ajax started here
							$.ajax({
								url: "donor_insert.php",
								type: "POST",
								data: {
									name: name,  //left side is [name] go to php
									blood:blood,
                  contact:contact			
								},
								cache: false,
								success: function(dataResult){
									var dataResult = JSON.parse(dataResult);
									if(dataResult.statusCode==200){
										alert("Data inserted");
											$('#sname').val("");
											$('#sblood').val("");
											$('#scontact').val("");
											//after submit form data we again run this function
											
									}
									else if(dataResult.statusCode==200){
										alert("data insert");
                    app();
									}
                  else if(dataResult.statusCode==201){
										alert("Error occured !");
									}
								}
							});



        
  }
  else{
    alert('Please fill all the field !');
  }



});



//fetching data from database using ajax...

function app(){
	$.ajax({
		url: "fetch.php",
		type: "POST",
		cache: false,
		success: function(data){
			$('#tables1').html(data); 
		}
	});
}	

function myFunction() {
 
  var copyText = $('#num').val();



  alert("Contact Number Copied: "+copyText);

  
  
}

</script>
</body>
</html>