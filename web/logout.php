<?php 
 //insert.php  
 require 'config.php';
 
  // Start the session
session_start();
 
  // Turn off error reporting
error_reporting(0);
 
// Destroy the session.
	session_destroy();
    header('Location: index.php');
exit;
			
?>  