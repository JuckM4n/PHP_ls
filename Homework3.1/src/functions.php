<?php
const NAMES = [
    'Dima', 'Nikita', 'Sveta', 'Dasha'
];
function createUser()
{
    return [
      'name' => NAMES[array_rand(NAMES)],
      'age' => mt_rand(18, 45),
    ];
}
