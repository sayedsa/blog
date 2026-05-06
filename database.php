<?php

$hostname  = "localhost";
$username = "toptcszk_blog_user";
$password = "bjp0H4!JkyB=";
$databaseName = "toptcszk_bloga";

//Instance of the class 'mysqli'
//Its a built in PHP class that we can use to connect to database
$conn = new mysqli($hostname, $username, $password, $databaseName);


//If any error, print msg
if($conn->connect_error){
    echo "Connection failed: " . $conn->connect_error;
}


?>