<?php 
 // Start the session
 session_start();

//database file
include "config.php";

  // Turn off error reporting
error_reporting(0);
 



//geting ajax data in vareable...	
$email=$_POST['email'];
$password=$_POST['password'];

if (isset($email)){

        if (  $email!= ""  && $password!= ""){
                
            $sql_query = "select * from register where email='".$email."' and password='".$password."'";
            $result = mysqli_query($link,$sql_query);
            $row = mysqli_fetch_assoc($result);
            
                    $id = $row['id'];
                    $el = $row['email'];
                    $pw = $row['password'];
                    $nm = $row['name'];

                    if($email == $el && $password == $pw ){

                         // Store data in session variables
					  session_start();
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["email"] = $el;
                        $_SESSION["name"] = $nm;   
				
                        echo json_encode(array("statusCode"=>200));
                       
                    }else{
                        echo json_encode(array("statusCode"=>201));

                    }

  
  
  
  
                }


            }
?>