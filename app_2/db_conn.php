<?php

$host= "localhost";
$name = "root";
$pass = "";
$db_name = "to_do_list";


// Create connection

// $conn = mysqli_connect($host, $name, $pass, $db_name);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

try {
    $conn = new PDO("mysql:host=$host;dbname=to_do_list", $name, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
