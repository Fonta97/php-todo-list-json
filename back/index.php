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
file_put_contents('todos.json', $jsonTodo);

echo "File creato";