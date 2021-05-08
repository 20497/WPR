<!doctype html>
<html>
<body>
<form action="Zadanie1.php" method="POST">
    Num1: <input type="number" name="numberOne">
    Num2: <input type="number" name="numberTwo">
    <select name="actionNumber">
        <option value="addition">Add</option>
        <option value="subtraction">Subtract</option>
        <option value="multiplication">Multiply</option>
        <option value="division">Divide</option>
    </select>
    <input type="submit">
</form>
</body>
<?php
$firstNumber = $_POST["numberOne"];
$secondNumber = $_POST["numberTwo"];

if ($_POST['actionNumber'] == "addition") {
    require 'Zadanie1-2.php';
    echo "Result: " . ($firstNumber + $secondNumber);
}
if ($_POST['actionNumber'] == "subtraction") {
    require 'Zadanie1-2.php';
    echo "Result: " . ($firstNumber - $secondNumber);
}
if ($_POST['actionNumber'] == "multiplication") {
    require 'Zadanie1-2.php';
    echo "Result: " . ($firstNumber * $secondNumber);
}
if ($_POST['actionNumber'] == "division") {
    if ($numberTwo == 0) {
        require 'Zadanie1-2.php';
        echo "Cannot divide with 0";
    }
    echo "Result: " . ($firstNumber / $secondNumber);
}
?>