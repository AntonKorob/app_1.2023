<hr>
<?php
include '../config/config.php';
if($_POST){
    $text = $_POST['text_1'];
    if (!empty($text)) {
        $sql = "INSERT INTO `nouts` (nouts) VALUES ('$text')";
        if ($conn->query($sql) === TRUE) {
            echo " / New record created successfully";
        } else {
            echo " Enter yore nouts";
        }
    }
}else{
    echo " / Hello world !!!";
} 

?>
<!-- textarea -->

<div class="textarea">
    <form action="home.php" method="post">

        <label for="...">
            <h2>Your nouts : _ _ _ </h2>
        </label>
        <textarea name="text_1" id="" cols="60" rows="10" placeholder="Enter your nouts"></textarea>
        <div class="button_click">
            <button type="submit">Click me</button>
        </div>
    </form>
    <form action="../config/delete_nouts.php" method="post">
        <button type="submit">Delete All</button>
    </form>
</div>
</div>

<div class="nouts_name">
    <h2>Your nouts : </h2>
    <?php

    // запрос на выборку

    $sql_1 = "SELECT id, nouts FROM nouts ORDER BY id DESC";

    $result_1 = $conn->query($sql_1);

    while ($row = $result_1->fetch_assoc())

    // получаем все строки в цикле по одной
    {
        echo '<p>Запись id=' . $row['id'] . '. Текст: ' . $row['nouts'] . '</p>'; // выводим данные
    }

    $conn->close();


    ?>
</div>
