<?php
$myArray = array_fill(0, 10, 1);

array_walk(
    $myArray,
    function($value, $key) use ($myArray)
    {
        reset($myArray);
    }
);

array_walk(
    $myArray,
    function($value, $key) use (&$myArray)
    {
        var_dump($key);
        unset($myArray[$key]);
        unset($myArray[$key+1]);
        unset($myArray[$key+2]);
    }
);



print_r($myArray);
