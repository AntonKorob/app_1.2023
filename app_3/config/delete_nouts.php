<?php
require 'config.php';

$sql_2 = "DELETE FROM `nouts` ";

if ($conn->query($sql_2) === TRUE) {
    echo "Record delete successfuly";
} else {
    echo "Error delete record: " . $conn->error;
}
header('Location: ../src/login.php');
exit;
?>

