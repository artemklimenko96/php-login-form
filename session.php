<?php
   require_once ("dbconnect.php");
   session_start();
   
   $email = $_SESSION['r_email'];
   
   $ses_sql = mysqli_query($mysqli,"select email from users where email = '$email' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['email'])){
      header("location:loginPage.php");
   }
?>