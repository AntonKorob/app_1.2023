<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("button").click(function() {
                $("#open_file").animate({
                    left: '100px'
                }, "slow");
            });
        });
    </script>

    <title>Doc_List_33</title>
</head>

<body>
    <?php

    include './config/config.php'; ?>
    <div class="date">
        <span>Today is : <?php echo date("l jS \of F Y h:i A"); ?></span>
    </div>
    <div class="conteiner">
        <div class="nav">
            <nav>
                <a href="./src/home.php">Home</a>
                <a href="./src/contacts.php">Contacts</a>
                <a href="./src/product.php">Product</a>
                <a href="./src/help.php">Help</a>
            </nav>
            <button><a href="src/login.php">Login</a></button>
        </div>

        <div class="content">
            <div class="content_1">
                <div class="text_1">
                    <?php
                    $sql_text_1 = "SELECT * FROM my_text WHERE id=1";
                    $resut_1 = $conn->query($sql_text_1);
                    if ($resut_1->num_rows > 0) {
                        $row = $resut_1->fetch_assoc();
                        echo "Id: " . $row['id'] . "<br>" . "Name is: " . $row['name'] . "<br>" . "Text is: " . $row['text'] . "<br>";
                    }

                    ?>
                </div>
                <div class="text_2">
                    <?php
                    $sql_text_1 = "SELECT * FROM my_text WHERE id=2";
                    $resut_1 = $conn->query($sql_text_1);
                    if ($resut_1->num_rows > 0) {
                        $row = $resut_1->fetch_assoc();
                        echo "Id: " . $row['id'] . "<br>" . "Name is: " . $row['name'] . "<br>" . "Text is: " . $row['text'] . "<br>";
                    }
                    ?>
                </div>
            </div>
            <div class="content_2">
                <div class="text_3">
                    <?php
                    $sql_text_1 = "SELECT * FROM my_text WHERE id=3";
                    $resut_1 = $conn->query($sql_text_1);
                    if ($resut_1->num_rows > 0) {
                        $row = $resut_1->fetch_assoc();
                        echo "Id: " . $row['id'] . "<br>" . "Name is: " . $row['name'] . "<br>" . "Text is: " . $row['text'] . "<br>";
                    }
                    ?>
                </div>
                <div class="text_4">
                    <?php
                    $sql_text_1 = "SELECT * FROM my_text WHERE id=4";
                    $resut_1 = $conn->query($sql_text_1);
                    if ($resut_1->num_rows > 0) {
                        $row = $resut_1->fetch_assoc();
                        echo "Id: " . $row['id'] . "<br>" . "Name is: " . $row['name'] . "<br>" . "Text is: " . $row['text'] . "<br>";
                    }
                    ?>
                </div>

            </div>
        </div>
        <?php include './src/footer.php' ?>


    </div>
</body>

</html>