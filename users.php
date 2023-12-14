<?php

$users = [
    ['firstname' => 'aymen', 'name' => 'sellaouti', 'age' => 39],
    ['firstname' => 'aymen', 'name' => 'test', 'age' => 3],
    ['firstname' => 'clement', 'name' => 'serizay', 'age' => 3],
    ['firstname' => 'anne sophie', 'name' => 'jackowska', 'age' => 3],
    ['firstname' => 'skander', 'name' => 'sellaouti', 'age' => 3],
    ['firstname' => 'souheib', 'youssfi' => 'sellaouti', 'age' => 59]
];

function compareUsers($user1, $user2) {
    echo "Je suis entrain de comparer".PHP_EOL;
    // Si les deux users ont le meme age on va retourner 0
    // Si le premier est plus agé on retourne > 0
    // Si le premier est moins agé on retourne < 0
    if($user1['age'] == $user2['age']){
        return strcmp($user1['name'], $user2['name']);
    }
    return ($user1['age'] - $user2['age']);
}
sort($users);

usort($users, 'compareUsers');
var_dump($users);