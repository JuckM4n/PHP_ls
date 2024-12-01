<?php
include '../src/functions.php';

for($i = 0; $i < 50; $i++){
    $users[] = createUser();
}

file_put_contents('users.json', json_encode($users));

$data = file_get_contents('users.json');
$decodedUsers = json_decode($data, true);

$names = [];
$sumAge = 0;
foreach($decodedUsers as $user){
    if (isset($names[$user['name']])) {
        $names[$user['name']]++;
    } else {
        $names[$user['name']] = 1;
    }
    $sumAge += $user['age'];
}

echo 'Средний возраст:' . ($sumAge /sizeof($decodedUsers)) . '<br>';
