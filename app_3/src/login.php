<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Login</title>
</head>

<body>
    <?php include 'header.php' ?>
    <div class="conteiner_auth">

        <form class="form_login" action="auth.php" method="post">
            <label for="name">
                <input type="text" name="name" placeholder="name" required>
            </label>
            <label for="email">
                <input type="email" name="email" placeholder="email" required>
            </label>
            <label for="password">
                <input type="password" name="password" placeholder="password" required>
            </label>

            <button id="btn-login" type="submit" >Login</button>

        </form>
        <div>
            <form action="../config/delete.php" method="post">
                <button  type="submit">Delete All</button>
            </form>
            <!-- button -->
            <button class="btn_go_back"><a href="../index.php">Go back</a></button>
        </div>

    </div>


    </div>

    <?php include 'footer.php' ?>
</body>

</html>