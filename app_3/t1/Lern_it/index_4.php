<?php
//whithout CSS

// Working whit API
$data = array(
    'foo' => 'bar',
    'baz' => 'boom',
    'cow' => 'milk',
    'null' => null,
    'php' => 'hypertext processor'
);

echo http_build_query($data) . "<br>";
echo http_build_query($data, '', '&amp;');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Скрытое поле</title>
</head>

<body>
    <form action="#" method="get">
        <p><b>Напишите любимое слово и нажмите кнопку Отправить
                (никакие данные не будут передаваться на сервер!):</b></p>

        <p>
            <input type="text" name="name" placeholder="name">
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <input type="data" name="date" placeholder="date: d:m:y">
            <input type="radio" name="man" value="man" checked>
            <input type="radio" name="man" id="">
            <!-- time -->
            <input type="datetime-local" name="time" value="">
        </p>
        <p><button type="submit">Отправить</button></p>
    </form>
</body>

</html>
<?php
if (isset($_GET)) {


    $val_1 = $_GET['name'];
    $val_2 = $_GET['email'];
    $val_3 = $_GET['password'];
    $val_4 = $_GET['date'];
    $val_5 = $_GET['man'];
    $val_6 = $_GET['man'];
    $val_7 = $_GET['time'];

    $time = date('H:d');
    // array ()
    $array = [
        1 => $val_1,
        5 => $val_2,
        'g' => $val_3,
        'hi' => $val_4,
        'man' => $val_5,
        'men' => $val_6
    ];
    $array[8] = 'Hello';
    $array['rand_1'] = rand(1, 33);
    $array['rand_2'] = rand(1, 33);
    $array['w'] = $val_7;

    var_dump($array);
echo "<br>";
    // $sum_rand

    $sum_rand = $array['rand_1'] + $array['rand_2'];
    echo "rand_1 = " . $array['rand_1'] . "<br>";
    echo "rand_2 = " . $array['rand_2'] . "<br>";
    echo "summa = ". $sum_rand . "<br>";

    // foreach($array as $value)
    foreach ($array as $value) {
        echo $value . "<br>";
    }
} else {
    echo " Error";
}
//without key

$temp = [22, 33, 44, 55, 66];
$temp[] = $val_1;
$temp[2] = $val_1;
$temp[7] = $val_1;

var_dump($temp);
foreach ($temp as $value) {
    echo $value . "<br>";
}
echo $temp[4] . "<br>";
echo count($temp) . "<br>";

//min element as array

$ex1 = [2, 33, 44, 55, 66, 77];
$min = $ex1[0]; //33

for ($i = 0; $i < count($ex1); $i++) {
    if ($min > $ex1[$i]) {
        $min = $ex1[$i];
    }
}
echo "<hr>";
echo $min . "<br>";

$ex2 = [2, 2, 44, 55, 66, 77, 88, 99, 12];
$ex22 = sort($ex2);

// foreach

foreach ($ex2 as $val) {

    if ($val < 100) {
        echo '$val = ' . $val . '<br>';
    }
}
// for
$sum = 0;

for ($i = 0; $i < count($ex2); $i++) {
    $sum = $sum + $ex2[$i];
    echo $sum . "<br>";
}
$sum2 = $ex2[0] + $ex2[1];
echo $sum2 . "<br>";

$rand = rand(1, 33);
echo $rand;
?>