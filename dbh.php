<?php

$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbname ="loginsystem";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbname); 
if(!$conn){
    die("Connection failed: ". my_sqli_connect_error());
}