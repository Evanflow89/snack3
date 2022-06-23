<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

// foreach ($posts as $date) {
//     foreach($date as $keyelm) {
//         foreach ($keyelm as $keyvalue) {
//         var_dump($keyvalue);
//     }
// }
// }
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Php</title>
</head>
<body>
    <?php 
    foreach ($posts as $key => $date) { ?>
     <h2>   <?php echo   $key  ?> </h2>
    
<ul>
<?php foreach($date as $keyelm) { ?>
<?php foreach ($keyelm as $key => $keyvalue) { ?>
<li> <?php echo $key. " : ". $keyvalue ?> </li>
    <?php } ?>
    <?php } ?>
</ul>
       
<?php } ?>
</body>
</html>