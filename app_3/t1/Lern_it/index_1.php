<h2>Calculate</h2>

<?php
if (isset ($_POST)) {
  function sum_1($a, $b, $s)
  {
    if ($s == "+") {
      echo $a + $b;
    } elseif ($s == '-') {
      echo $a - $b;
    } elseif ($s == '*') {
      echo $a - $b;
    } elseif ($s == '/') {
      echo $a / $b;
    }
  }
  $a = $_POST['num_1'];
  $b = $_POST['num_2'];
  $s = $_POST['val'];

?>
  <form action="#" method="post">
    <input style="width: 81px;" type="number" name="num_1" id="" required>
    <select name="select" id="">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select>
    <input style="width: 81px;" type="number" name="num_2" id="" required>
    <br>
    <p><input type="radio" name="val" value="+">+</p>
    <p><input type="radio" name="val" value="-">-</p>
    <p><input type="radio" name="val" value="*">*</p>
    <p><input type="radio" name="val" value="/">/</p>
 
      <button type="submit">Result</button>
    <hr>

    Result is :
    <?php
    if ($_POST['val']) {
      $result = sum_1($a, $b, $s);
    } else {
      echo " Hello world ";
    }

    ?>
  </form>
<?php
} else {
  echo "enter";
}
$myfile = fopen("text/text.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while (!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);

?>
<button style="margin: 22px;"><a href="https://www.nikomedvedev.ru/other/vscodeshortcuts/hotkeys.html">Hot key in VS</a></button>