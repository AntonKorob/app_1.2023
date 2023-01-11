<?php
require 'config.php';

$sql_delete = "DELETE FROM `my_test` WHERE id <= 900";


if($conn->query($sql_delete) === TRUE) {
    echo "Record delete successfuly";
}else{
    echo "Error delete record: " .$conn->error;
}

header('Location: ../src/login.php');
exit;
?>