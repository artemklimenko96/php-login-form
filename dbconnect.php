<?php
    $server = "localhost"; 
    $database = "credentials"; 
    $username = "root"; 
    $password = ""; 
 
    // connecting to MySQL server
     $mysqli = mysqli_connect($server,$username,$password, $database) or die ( mysql_error() ); 
?>