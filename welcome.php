<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to home page </title>
</head>
<body>
    <h1>Welcome to Home Page</h1>
    <button  type="button" id="btn">Logout </button>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script>
$(document).ready(function() {

	//on button click fetching data using id in html input field

	$('#btn').on('click', function() {

        window.location.href = "login.php";                          

	// fetching data using id in html input field
	

		
	});

	
});
</script>


</body>
</html>