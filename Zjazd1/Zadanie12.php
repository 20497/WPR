<?php

$rows = 6;
$columns = 2;

if (!is_numeric($rows) || !is_numeric($columns)) 
{
    echo("Błąd");
    return;
}
else
{
$twoDimensionalArray = array(array());

for ($i = 0; $i < $rows; $i++) 
{
    for ($j = 0; $j < $columns; $j++) 
    {
        $twoDimensionalArray[$i][$j] = rand(1, 9);
    }
}

for ($i = 0; $i < $rows; $i++) 
{
    for ($j = 0; $j < $columns; $j++) 
    {
        echo($twoDimensionalArray[$i][$j] . " ");
    }
    echo("<br>");
}

echo("<br>Transposition<br>");
for ($i = 0; $i < $columns; $i++) 
{
    for ($j = 0; $j < $rows; $j++) 
    {
        echo($twoDimensionalArray[$j][$i] . " ");
    }
    echo("<br>");
    }
}

?>