<?php

    $string = "Hello, world!";
    $integer = 123;
    $double = 1.23;
    $boolean = true;
    $array = [1, 2, 3];
    $object = new stdClass();
    $null = null;


    echo gettype($string) . "<br>" ;
    echo gettype($integer) . "<br>";
    echo gettype($double) . "<br>";
    echo gettype($boolean) . "<br>";
    echo gettype($array) . "<br>";
    echo gettype($object) . "<br>";
    echo gettype($null) . "<br>";

?>