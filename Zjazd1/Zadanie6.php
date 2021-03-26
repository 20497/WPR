<?php

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo("the sides of the triangle " . $a . " " . $b . " " . $c . "<br>");

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) 
{
    echo("Possible to create a triangle");
} 
else 
{
    echo("Impossible to create a triangle");
}

?>