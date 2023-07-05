<?php

$servername="localhost";
$username="root";
$pass="";
$dbname="insta_data";

$con=mysqli_connect($servername, $username, $pass, $dbname);

if(! $con){
    echo "connection failed";
}else{
    // echo "connection done";
}
?>