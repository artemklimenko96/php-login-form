<?php
   require_once ("dbconnect.php");
   session_start();
    $email=$_POST['r_email']; 
    $password=$_POST['r_password'];
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      $email = stripslashes($email);
      $password = stripslashes($password);
      $email =  mysqli_real_escape_string($mysqli,$email);
      $password = sha1(mysqli_real_escape_string($mysqli,$password)); 
      
      $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($mysqli,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['email'];
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         $_SESSION['email'] = $email;
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         header("location: loginPage.php?email=1");
      }
   }
?>