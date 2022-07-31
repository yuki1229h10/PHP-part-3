<?php

function even($n)
{
  return ($n % 2) === 0;
}

$array = [1, 2, 3, 4, 5];
$newArray = array_filter($array, 'even');
print_r($newArray);


$userAges = [
  'Tanaka' => 20,
  'Kimura' => 25,
  'Akaza' => 40,
];

$usersOver30 = array_filter($userAges, function ($v) {
  return $v >= 30;
});

print_r($usersOver30);
