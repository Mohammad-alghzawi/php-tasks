<?php

session_start();

echo "<h2> Hello "  .$_SESSION["username"] ."</h2>";

$num1 = intval($_GET["n1"]);

$num2 = intval($_GET["n2"]);

$calc = $_GET["op"];


$answer;

switch($calc) {
    case "+":
        $answer = $num1 + $num2;
        break;

    case "-":
        $answer = $num1 - $num2;
        break;

    case "*": 
        $answer = $num1 * $num2;
        break;
    
    case "/":
        $answer = $num1 / $num2;
        break;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clculator</title>
</head>
<body>
    
<form action="calculator.php">
    <label for="n1">First Number</label>
    <input type="number" id="n1" name="n1">
    <br><br>
    <select name="op" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <br><br>
    <label for="n2">Second Number</label>
    <input type="number" id="n2" name="n2">
    <br><br> 
    <input type="submit">
</form>

<?php echo "Answer: $answer" ?>



</body>
</html>