<?php

$localhost="localhost";
$user = "root";
$password = "";
$db_name ="blog";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($localhost, $user, $password, $db_name);


if(!$conn){
    die("<h1>database connection_error:</h1> " . mysqli_connect_error());

}

