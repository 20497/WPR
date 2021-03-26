<?php

$doLoop = true;
while ($doLoop) {
    $table_one_leng = 5;
    $table_two_leng = 5;
    if (is_numeric($table_one_leng) && is_numeric($table_two_leng))
        $differenceLeng = abs($table_one_leng - $table_two_leng);
    else {
        echo("Błąd");
        $doLoop = false;
        break;
    }

    $table_one = [];
    $table_two = [];

    for ($i = 0; $i < $table_one_leng; $i++) {
        $table_one[$i] = rand(1, 10);
    }
    for ($i = 0; $i < $table_two_leng; $i++) {
        $table_two[$i] = rand(1, 10);
    }

    $scalarSum = 0;

    if ($differenceLeng == 0) {
        for ($i = 0; $i < $table_one_leng; $i++) {
            echo("Table1[" . $i . "]: " . $table_one[$i] . ". Table2[" . $i . "]: " . $table_two[$i] . "<br>");
            $scalarSum += $table_one[$i] * $table_two[$i];
        }
    } else if ($differenceLeng >= 1)
        echo("Difference between tables is more than 0!<br>");
    else
        echo("Błąd");


    echo("Scalar result: " . $scalarSum);
    $doLoop = false;
}

?>