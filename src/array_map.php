<?php

function double($n)
{
  return $n * 2;
}

array_map('double', [1, 2]);


function square($n)
{
  return $n * $n;
}

$array = [2, 4, 6];
$newArray = array_map('square', $array);
print_r($newArray);
