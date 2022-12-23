<?php

require('Calculator.php');
require('Date.php');
print "lw1.1"."\n";
$chislo = new Calculator();
echo $chislo->sum(6)->minus(2)->product(3)->division(2)->getResult();
print("\n");
print "lw1.2"."\n";
$date = new Date(21,6,2022);
$dates = new Date(9,6,2022);
$date->diffDay($dates);
// print("\n");
//$date->minusDay(56);
//$dates->format('en');
//$date->format('ru');

?>