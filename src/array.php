<?php

$members = [
  [
    'name' => 'Kimura',
    'team' => [
      'sales',
      'marketing',
    ],
  ],
];

$members2 = [
  'Tanaka',
  'age' => 25,
  'sales',
];

var_dump($members[0]['team'][1]);
var_dump($members2);
