<?php

$people = [
  [
    'country' => 'Japan',
    'name' => 'Araki',
    'age' => 23
  ],
  [
    'country' => 'America',
    'name' => 'Mika',
    'age' => 23
  ],
  [
    'country' => 'Japan',
    'name' => 'Rey',
    'age' => 21
  ],
  [
    'country' => 'America',
    'name' => 'Ron',
    'age' => 43
  ],
];

usort($people, function ($v1, $v2) {
  return $v1['name'] <=> $v2['name'];
});

print_r($people);
