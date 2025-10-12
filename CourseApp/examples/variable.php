<?php

    $incomeA = 21000;
    $incomeB = 16000;
    $incomeC = 24000;

    $tax_rate1 = 0.25;
    $tax_rate2 = 0.35;  

    echo $incomeA - ($incomeA * $tax_rate1) . "<br>";
    echo $incomeB - ($incomeB * $tax_rate1) . "<br>";
    echo $incomeC - ($incomeC * $tax_rate2);

?>