<?php
if(isset($_POST['title'])){
    require '../db_conn.php';

    $title = $_POST['title'];

    if($title == ''){
        header("Location: ../index.php?mess=error");
    }else{
        $stmt = $conn->prepare("INSERT INTO todos(title) VALUES (?)");
        $res = $stmt->execute([$title]);
    if($res) {
       header("Location: ../index.php?mess=success");
    }else{
        header("Location: ../index.php"); 
    }
    $conn = null;
    exit();
    }
}else{

header("Location: ../index.php?mess=error");
}

?>