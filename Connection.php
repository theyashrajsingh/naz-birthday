<?php // Simple authentication script
 session_start(); 
  $valid_username = 'user';
  $valid_password = 'pass';
   if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
         $username = $_POST['username']; 
         $password = $_POST['password'];
         
         if ($username == $valid_username && $password == $valid_password) 
         { 
            header("Location: welcome.php"); // Redirect on successful login 
            exit(); } else { echo "Invalid credentials"; } } ?>