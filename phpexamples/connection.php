<?php
$host="localhost";
$db="demo";
$user="root";
$pass="";



//mySQLi Extension //

// MySQli with procedural approach
$conn=mysqli_connect($host,$user,$pass,$db,3300);
if(!$conn)
{
   die("connection failed".mysqli_connect_error());
}
else{
    echo"connection successfully created";
}
// MySQLi Object-oriented approach
$conn=new mysqli($host,$user,$pass,$db,3300);
if($conn->connect_error)
{
    die("connection failed".conn->connect_error);

}
else
{
    echo(" <br> connection using opps connected successfully");

}

//PDO(PHP data objrct) //
$quarystring="INSERT INTO `test`(`uname`, `password`, `role` ) VALUES ('ankit','ankit123','mis')";
if($conn->query($querystring)===TRUE)
{
    echo"record added successfully";

}else{
    echo"error in record insertion".$querystring."<br>".$conn->error;
}




?>

