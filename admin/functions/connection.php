<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "tripease";

$connect=mysqli_connect($server,$user,$password,$database);
if($connect)
{
   //echo "OK";
}
else{
    die("Database Connection Error");
}