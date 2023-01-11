<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        div{
            margin: 22px;
            padding: 22px;
            border: 2px solid ;

        }
    </style>
    <title>Preg</title>
</head>

<body>
    <div>
        <h2>List of country</h2>
        <?php
        $myfile = fopen("country.txt", "r") or die("Unable to open file!");
        while (!feof($myfile)) {
            echo fgets($myfile) . "<br>";
        }
        fclose($myfile);

        ?>

    </div>
</body>

</html>