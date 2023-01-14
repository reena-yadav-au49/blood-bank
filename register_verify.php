<?php 
//database file
include "config.php";

//geting ajax data in vareable...	
	$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

        if ( $name!= "" && $email!= ""  && $password!= ""){

                $sql_query = "select count(*) as cntUser from register where email='".$email."'";
                $result = mysqli_query($link,$sql_query);
                $row = mysqli_fetch_array($result);
        
                $count = $row['cntUser'];
        
                        if($count > 0){
                            //echo "Username already exists please use other name";
                            echo json_encode(array("statusCode"=>203));
                        }
                        else{
                                $sql = "INSERT INTO `register`( `name`, `email`, `password`)
                                VALUES ('$name','$email','$password')";
                                $result = mysqli_query($link,$sql);
                                
                                echo json_encode(array("statusCode"=>200));
                                    
                            }            

        }
        else {
        //echo "not get data";
        echo json_encode(array("statusCode"=>201));
        }

?>