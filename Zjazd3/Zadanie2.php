<html>
<body>

<form action="Zadanie2.php" method="post">

    <label>
        <tr>
            <td>Your favourite food</td>
            <td><input type="text" name="color" required></td>
            <br>
        </tr>
        <tr>
            <td>Your favourite animal</td>
            <td><input type="text" name="animal" required></td>
            <br>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["color"]) && isset($_POST["animal"])) {
    $food = $_POST["food"];
    $animal = $_POST["animal"];

    if (file_put_contents('text.txt', $food . "\n" . $color , FILE_APPEND) === false) 
    {
        echo "File not saved.";
    } 
    else 
    {
        echo "File saved.";
    }
}
?>