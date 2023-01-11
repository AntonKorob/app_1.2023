<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Hello</title>
</head>

<body>
    <?php include 'header.php' ?>

    <div class="conteiner_auth">
        <div class="Hello_app">
            <?php
            require '../config/config.php';

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            echo "<hr>" . "Hello :" . $name . "<br>";


            $sql = "INSERT INTO `my_test` (name, email, password)
        VALUES ('$name' , '$email', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // $conn->close();

            ?>

        </div>

    </div>
    <div class="form_delete">
        <form action="../config/delete.php" method="post">
            <button type="submit">Delete All</button>
        </form>
    </div>
    <!-- button -->

    <button class="btn_go_back"><a href="./index.php">Go back</a></button>

    <?php include 'footer.php' ?>
</body>

</html>