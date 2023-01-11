<pre>
    <div style="display: flex;margin: 22px;padding:22px" >

        <div style="width: 40%;border: 2px solid #8787;padding:22px">
    
        <!-- Search sistem -->
        Search sistem
    
        <form action="#" method="get">
            <input type="text" name="text_1" >
            
            <br>
            <button type="submit">Send</button>
        </form>
        <form action="open_xls" method="get">
            <button name="open_xls">open xls</button>
        </form>
    <?php
    
    // Функции для работы с массивами. PHP
    echo ' Функции для работы с массивами. PHP' . '<br>';
    echo ' Многомерный массив'.'<br>';
    $array = [99, 88, 77, 66, 4, [55, 3, 4, 5, 6, 7, 8], [5, 6, 7, 8, 9]];
    $search = $_GET['text_1'];
    print_r($array);
    
    echo ' Массив по возростанию' . '<br>';
    
    $array_1 = [3, 42, 4, 55, 6, 88, 9];
    rsort($array_1);
    print_r($array_1);
    
    if (array_search($search, $array)) {
        echo "Found :" . $search . "<br>";
    } else {
        echo "Not found :" . "<br>";
    }
    
    echo ' Max_array ';
    
    echo "Max size = " . (min($array));
    // array_map()
    function cube($c)
    {
        return ($c * $c * $c);
    }
    $arr = [1, 2, 3, 4, 5, 6];
    $res = array_map('cube', $arr);
    print_r($res);
    
    $fruit_color = ['green', 'red', 'yellow'];
    $fruit_name = ['avocado', ' apple', 'banan'];
    $res_1 = array_combine($fruit_color, $fruit_name);
    $res_2 = array_count_values($fruit_color);
    print_r($res_1);
    print_r($res_2);
    
    
    
    ?>
        </div>
        <div style="width: 40%;border: 2px solid #8787;padding:22px">
        hello world
    <?php
    $array_2 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $fruit_color = ['green','red', 'yellow','black','grey','white','aloe','geen-red','blue'];
    $e = array_combine($array_2, $fruit_color);
    print_r($e);

    array_shift($array_2); //start
    array_pop($array_2);//end
    print_r($array_2);

    $today = date("H:i:s");
    $today_1 = date("m.d.y");  
    echo $today . "<br>";
    echo $today_1. "<br>";
    


    ?>
        </div>
    </div>