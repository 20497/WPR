<!doctype html>
<html>
<body>
<form action="Zadanie1.php" method="POST">
    Num1: <input type="number" name="numberOne">
    Num2: <input type="number" name="numberTwo">
    <select name="actionNumber">
        <option value="addition">+</option>
        <option value="subtraction">-</option>
        <option value="multiplication">*</option>
        <option value="division">/</option>
    </select>
    <input type="submit">
</form>

<?php
$firstNumber = $_POST["firstNumber"];
$secondNumber = $_POST["secondNumber"];

if ($_POST['actionNumber'] == "addition") {
    echo "Result: " . ($firstNumber + $secondNumber);
}
if ($_POST['actionNumber'] == "subtraction") {
    echo "Result: " . ($firstNumber - $secondNumber);
}
if ($_POST['actionNumber'] == "multiplication") {
    echo "Result: " . ($firstNumber * $secondNumber);
}
if ($_POST['actionNumber'] == "division") {
    if ($secondNumber == 0 || $firstNumber ==0) {
        echo "Cannot divide with 0";
    }
    echo "Result: " . ($firstNumber / $secondNumber);
}
?>
</body>
</html>