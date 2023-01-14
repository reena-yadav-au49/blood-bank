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
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="file:///C:/xampp/htdocs/web/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    

    <title>Blood bank project</title>
  </head>
  <style>
body{
  background-image: url("https://png.pngtree.com/thumb_back/fh260/back_our/20190620/ourmid/pngtree-blood-donation-poster-board-background-material-image_163689.jpg");
  /* background-color: #ecf0f1; */
  font-family: 'Varela Round', sans-serif;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}



#box{
 
  height:160px;
  border-radius:15px;
  margin:10px;
  font-size:120px;
}


#head{
  font-size:70px;
  font-weight: 900;
  font-family: 'Varela Round', sans-serif;
  color: #000;
}

span{
  font-size:20px;
  background-color:#ededed;
  border-radius:50px;
  font-weight: 200;
  padding:20px;

}
</style>
  <body>
    

<!-- nav bar started -->
<nav class="navbar navbar-expand-lg bg-dark border-bottom">
  <div class="container">
    <a class="navbar-brand" href="#">
      <h1 class="text-white">Blood Bank</h1>
     </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav text-center">
        <li class="nav-item ">
          <a class="nav-link me-3  text-white" aria-current="page" href="#">Home</a>

  
        </li>
        <li class="nav-item ">
          <a class="nav-link me-3  text-white" href="login.php">Login</a>
        </li>
        <li class="nav-item  ">
          <a class="nav-link me-3 text-white" href="register.php">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container d-flex justify-content-center ">

<div class="row">
<div class="col-md-6 d-flex align-items-center justify-content-center">
<h1 id="head">Welcome to <br/> Blood Bank<br/><span>Get a Donar Contact Details</span> </h1>


</div>
<div class="col-md-6  d-flex align-items-center justify-content-center">
<img src="https://www.jagranimages.com/images/newimg/17122021/17_12_2021-blood_group_j_22301677.jpg" style="height:600px;">

</div>

<div class="col-sm-2 d-flex  align-items-center justify-content-center bg-primary" id="box">
A+
</div>
<div class="col-sm-2 d-flex  align-items-center justify-content-center bg-info" id="box">
B+
</div>
<div class="col-sm-2 d-flex   align-items-center justify-content-center bg-warning" id="box">
  AB
</div>

<div class="col-sm-2 d-flex   align-items-center justify-content-center bg-info" id="box">
  O-
</div>
<div class="col-sm-2 d-flex   align-items-center justify-content-center bg-info" id="box">
  O+
</div>


<h1>“Donating Money Is Great, But Donating Blood Is Even Better.
   <span class="badge bg-secondary"></span></h1>
</div>

</div>

<div class="container">
<h1 class="text-center mt-5" id="about" >About Us
<span class="badge bg-secondary"></span>
</h1>
<div class="container bg-danger mt-5 p-5">

<h1 class="mt-2">What can give blood ,and how often ?</h1>
<p>The criteria for donor selection varies from country to country, but blood can be donated by most people who are healthy and do not have an infection that can be transmitted through their blood.
</br>
The age at which people are eligible to give blood varies, but is commonly between the ages of 17 and 65. Some countries accept donations from people from the age of 16 and extend the upper age limit beyond 65 years.
</br>
Healthy adults can give blood regularly – at least twice a year. Your local blood service can tell you how frequently you can give blood.
</p>

<h1 class=" mt-5 ">Is giving blood safe ?</h1>
<p>Yes. Remember that you will only be accepted as a blood donor if you are fit and well. Your health and well-being are very important to the blood service. The needle and blood bag used to collect blood come in a sterile pack that cannot be reused, so the process is made as safe as possible.
</p>



</div>
</div>


<div class="container">
<div class="row">
<div class="col-md-6  d-flex align-items-center justify-content-center">
<img src="https://static.tnn.in/photo/msid-92190376,imgsize-156090,updatedat-1655151218060,width-200,height-200,resizemode-75/92190376.jpg" style="height:400px;">

</div>
<div class="col-md-6  justify-content-center">
<b class="d-flex align-items-center">
Blood Donation Is The Act Of Giving Blood To Someone Who Needs It. It Is Not Just About Giving Blood, But It Is An Act Of Kindness That Saves The Lives Of Hundreds Of People. These Fifteen Minutes Of Your Life Can Save Someone’s Entire Life. You Can’t Even Imagine That Donating One Bag Of Blood Can Be So Beneficial To The Human Race. Donating The Blood Without Expecting Or Asking For Any Money Or Gesture Is A Great Act Of Kindness, And If You Are 18 Years Old Or Above, You Should Definitely Take Part In This Act Of Kindness.</b>
</div>

















<div class="container">
<div class="row">
<div class="col-md-6  d-flex align-items-center justify-content-center">
<img src="images/don.png" style="height:400px;">

</div>
<div class="col-md-6  justify-content-center">
  <h1>Why should people donate blood ?</h1>
<p>
Safe blood saves lives. Blood is needed by women with complications during pregnancy and childbirth, children with severe anaemia, often resulting from malaria or malnutrition, accident victims and surgical and cancer patients.

There is a constant need for a regular supply of blood because it can be stored only for a limited period of time before use. Regular blood donation by a sufficient number of healthy people is needed to ensure that blood will always be available whenever and wherever it is needed.


</p>


</div>
</div>
</div>
<div><h1>
“Blood Donation Costs You Nothing, But It Can Mean The World To Someone In Need.”</h1>
<span class="badge bg-secondary"></span></div>

<div class="clearfix">
  <div class="spinner-border float-end" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>






<div class="container-fluid bg-dark">
  <div class="footer d-flex justify-content-center">
    <p class="p-3 m-2 text-white">Crafted with love by Reena Yadav </p>
</div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>