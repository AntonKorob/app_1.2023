<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-left: 32px;
        }

        .text {
            width: 70%;
            border: 3px solid grey;
            border-radius: 22px;
            padding: 42px;

        }

        .country {
            width: 80%;
        }

        .file_manager {
            margin-left: 102px;
            width: 70%;
            padding: 22px;
            
        }

        img {
            transform: translateY(40%);
            margin-right: 11px;
        }

        .folder,
        .file {
            width: 40px;
            height: 40px;
        }

        h2 {
            margin-left: 75px;
        }
    </style>
    <title>File manager</title>
</head>

<body>
    <div class="file_manager">
        <h2>File manager</h2>

        <?php
        $folder = 't1';
        // Проверяем $folder -папка то далее

        if (is_dir($folder)) {
            // Проверяем $dh - открыла папку $folder то далее

            if ($dh = opendir($folder)) {

                // Цикл while крутит открытый $dh записанный в $file пока не правда 
                while (($file = readdir($dh)) !== false) {

                    // Проверяем $file - не '.' или '..' то далее выводим списком $file

                    if ($file != '.' && $file != '..') {
                        // Провкряем $file - папка то далее
                        if (is_dir($folder . '/' . $file)) {
                            echo "<li> <img src='t1/img/folder.gif' class='folder'>" . $file . "</li>";
                        } else {
                            echo "<li> <img src='t1/img/file_1.gif' file class='file' >" .  $file . " filesize: " . filesize($folder . '/' . $file) . "</li>";
                        }
                    }
                }
                closedir($dh);
            }
        }


        ?>
        </ul>
    </div>
    <ul>


        <hr>
        <h2>Some text opened from a file </h2>
        <div class="text">
            <?php
            // Открываем и читаем текст
            $myfile = fopen("./t1/text/one.txt", "r") or die("Unable to open file!");
            // Output one line until end-of-file
            while (!feof($myfile)) {
                echo fgets($myfile) . "<br>";
            }
            fclose($myfile);
            ?>

        </div>
        <!-- List of all countrys -->

        <h2>Favorite fruit</h2></h2>
        <div class="country">
            <ol>
                <?php
                $fruits = array("lemon", "orange", "banana", "apple");
                sort($fruits);
                foreach ($fruits as $key) {
                    echo  "<li>fruits : " . $key . "</li>"  ;
                 
                }
                ?>
            </ol>
            
        </div>

</body>

</html>