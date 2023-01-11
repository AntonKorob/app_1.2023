<?php

$host = "localhost";
$name = "root";
$password = "";
$db_name = "text_all";

//Create connection
$conn = new mysqli($host,$name,$password,$db_name); 

//Chek connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connection successfully";
}

?>
