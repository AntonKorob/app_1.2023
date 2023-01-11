    <?php include 'db_conn.php' ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <title>ToDo_List</title>
    </head>

    <body>
        <!-- nav -->
        <div class="nav">
            <div class="nav_Left">
                <div class="logo">
                    <button class="btn"> logo</button>
                </div>
                <div class="nav_left">
                    <button class="btn">nav_l</button>
                </div>
                <div class="nav-rigth">
                    <button class="btn">nav_r</button>
                </div>
            </div>
            <div class="nav_Rigth">
                <div class="logo">
                    <button class="btn"> Enter</button>
                </div>
                <div class="nav_left">
                    <button class="btn">Exit</button>
                </div>
                <div class="nav-rigth">
                    <button class="btn">Subscribe</button>
                </div>
            </div>
        </div>
<!-- img -->

        <div class="giff">
            <img src="http://pa1.narvii.com/6694/a141050ef64c40a2532e045c3e310fc70c9e21ab_00.gif" alt="">
        </div>

        <div class="main-section">
            <div class="add-section">
                <!-- form -->
                <form action="app/add.php" method="post" autocomplete="off">
                    <?php if (isset($_GET['mess']) && $_GET['mess'] == 'error') { ?>
                        <input type="text" name="title" style="border-color: #ff6666;" id="" placeholder="This field is required">
                        <button type="submit">Add &nbsp; <span>&#43;</span></button>
                    <?php } else { ?>

                        <input type="text" name="title" id="" placeholder="What do you need to do?">
                        <button type="submit">Add &nbsp; <span>&#43;</span></button>

                    <?php } ?>
                </form>
                <br>
                <!-- flip -->
                <div id="flip"> <button>Show message</button> </div>

            </div>
            <br>
            <div id="panel">

                <?php
                $todos = $conn->query("SELECT * FROM todos ORDER BY id DESC");
                ?>
                <div class="show-todo-section">
                    <?php if ($todos->rowCount() <= 0) { ?>
                        <div class="todo-item">
                            <!-- empty -->
                            <div class="empty">
                                <img src="img/jpg_1.jpg" alt="www" width="50%">
                                <img src="img/gif_11.gif" alt="www" width="240px">
                            </div>
                        </div>

                    <?php } ?>

                    <?php while ($todo = $todos->fetch(PDO::FETCH_ASSOC)) {; ?>
                        <!-- input -->
                        <div class="todo-item">
                            <span id="<?php echo $todo['id'] ?> " class="remove-to-do">x</span>
                            <?php if ($todo['checked']) { ?>
                                <input type="checkbox" class="check-box" checked>
                                <h2 class="checked"><?php echo $todo['title'] ?></h2>
                            <?php } else { ?>
                                <input type="checkbox" class="chek-box" />
                                <h2 class="checked"><?php echo $todo['title'] ?></h2>
                            <?php } ?>
                            <br>
                            <small>created: <?php echo $todo['date_time'] ?></small>

                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

        <script>
            $(document).ready(function() {
                $("#flip").click(function() {
                    $("#panel").slideToggle("3333");
                });
            });

            $(document).ready(function() {
                $('.remove-to-do').click(function() {
                    const id = $(this).attr('id');
                    $.post("app/remove.php", {
                        id: id
                    }, (data) => {
                        if (data) {
                            $(this).parent().hide(777);
                        }
                    });
                });
            });
        </script>
        <div class="footer">
            <div class="href">
                <a href="#">Home</a>
                <a href="#">Home</a>
                <a href="#">Home</a>
                <a href="#">Home</a>
            </div>
        </div>



    </html>