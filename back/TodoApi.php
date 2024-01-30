<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Allow-Origin: http://localhost:5173");

$todos = [
    [
        'task' => 'Fare la spesa magica',
    ],
    [
        'task' => 'Pulire casa per placare la tua OCD',
    ],
    [
        'task' => 'Pagare bollette che ti staccano tutto sennò (niente waifu online)',
    ],
    [
        'task' => 'Portare il cane fuori perchè è un good boy',
    ],
    [
        'task' => 'Leggere un libro, se non vuoi rimanere analfabeta',
    ],
    [
        'task' => 'Andare in palestra perchè stai troppo seduto',
    ],
];

$jsonTodo = json_encode($todos);
echo $jsonTodo;