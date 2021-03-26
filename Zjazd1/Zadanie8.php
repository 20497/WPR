<?php

    $a = 5;
    $b = 4;
    $c = 3;
    if ($a < $b && $a < $c && $b > $c)
    {
        echo "Ascending order $a $c $b </br> <br>";
        echo "Descending order $b  $c  $a";
    }
    if ($a < $b  && $a < $c &&  $b < $c) 
    {
        echo "Ascending order $a  $b  $c </br> <br>";
        echo "Descending order $c  $b  $a";
    }
    if ($a > $b && $a > $c && $b > $c) 
    {
        echo "Ascending order $c $b $a </br> <br>";
        echo "Descending order $a  $b  $c";
    }
    if ($a > $b && $a < $c && $b < $c) 
    {
        echo "Ascending order $b $a $c </br> <br>";
        echo "Descending order $c  $a  $b";
    }
    if ($a > $b && $a > $c && $b < $c)
    {
        echo "Ascending order $b $c $a </br> <br>";
        echo "Descending order $a  $c  $b";
    }
    if ($a < $b && $a > $c && $b > $c)
    {
        echo "Ascending order $c $a $b </br> <br>";
        echo "Descending order $b  $a  $c";
    }

?>