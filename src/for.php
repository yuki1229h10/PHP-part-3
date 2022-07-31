<?php

// $students = ['Aoki', 'Aoyama'];

// for ($i = 0; $i < count($students); $i++) {
//   echo $students[$i] . PHP_EOL;
// }

$students = [
  1 => ['Tanaka', 'Sato'],
  2 => ['Kawasaki']
];

for ($grade = 1; $grade <= count($students); $grade++) {
  for ($nameIndex = 0; $nameIndex < count($students[$grade]); $nameIndex++) {
    echo $students[$grade][$nameIndex] . PHP_EOL;
  }
}
