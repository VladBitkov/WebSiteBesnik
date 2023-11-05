<?php

$servername = "vlados1.mysql.tools";
$username = "vlados1_db";
$password = "QtDAHkQ9";
$dbname = "vlados1_db";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed".mysqli_connect_error());
} else {
    echo "Success";
} 
?>