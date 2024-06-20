<?php
$server="localhost";
$username="root";
$password="";
$db_name="mark";
$con=mysqli_connect($server,$username,$password,$db_name);
if(mysqli_connect_error())
{
    echo "connection failed".mysqli_connect_error();
    
}
else{
    echo "connected successfully";
}
?>