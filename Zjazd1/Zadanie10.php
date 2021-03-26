<?php

function asciiFunction($size)
{

    for ($i = 1; $i <= $size; $i++) 
    {
        for ($j = 1; $j <= $i; $j++) 
        {
            echo("*");
        }
        echo("<br>");
    }
    for ($i = $size; $i >= 1; $i--)
     {
        for ($j = 1; $j <= $i; $j++)
        {
            echo("*");
        }
        echo("<br>");
    }
    for ($i = $size; $i > 0; $i--) 
    {
        for ($j = $i; $j < $size; $j++) 
        {
            echo str_repeat("&nbsp;", 2);
        }
        for ($k = 0; $k < $i; $k++) 
        {
            echo("*");
        }
        echo("<br>");
    }
    for ($i = 0; $i < $size; $i++) 
    {
        for ($j = $size; $j > $i + 1; $j--) 
        {
            echo str_repeat("&nbsp;", 2);
        }
        for ($k = 0; $k <= $i; $k++) 
        {
            echo("*");
        }
        echo("<br>");
    }
}

asciiFunction(3);

?>