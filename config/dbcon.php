<?php
  $host="localhost";
  $username="root";//by default root for xampp server
  $password="";
  $database="pfcdb";

  //creating database connection
  $con = mysqli_connect($host,$username,$password,$database);
//ceck database connection
if(!$con)
{
    die("Connection Failed:". mysqli_connect_error());
}
// else{
//     echo"Connected Sucessfully";
// } 


?>