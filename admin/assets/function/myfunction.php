
<?php 
$host="localhost";
$username= "root";
$password= "";
$database = "pfcdb";
 //creating databse cannection
$con=mysqli_connect($host,$username,$password,$database );

if(!$con)
{
    die("connection failed:". mysqli_connect_error());
}

  ?>
  <?php
function getAll($table)
{
    global  $con;
    $query="select * from $table";
    return $query_run=mysqli_query($con, $query);

}
function getByID($table,$id)
{
    global  $con;
    $query="select * from $table where id='$id'";
    return $query_run=mysqli_query($con, $query);

}

?>