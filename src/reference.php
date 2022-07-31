<?php

$a = 100;
$b = $a;
$c = &$a;
$a = 200;

var_dump($c);


$a = 1;
function double(&$a)
{
  $a = $a * 2;
}

double($a);
var_dump($a);
