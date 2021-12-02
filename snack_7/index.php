<?php

/* Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. */

$students=[
    [
        'name' => 'Mattia',
        'lastName' => 'Pollato',
        'votes' => [
            16,15,20,29
        ]
        ],

        [
        'name' => 'Andrea',
        'lastName' => 'Cisello',
        'votes' => [
            19,18,20,21
        ]
        ],

         [
        'name' => 'Mario',
        'lastName' => 'Grande',
        'votes' => [
            16,25,20,28
        ]
    ]
]





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
for ($i=0; $i < count($students); $i++) {  ?>
      
    <p> <?= $students[$i]['name']; ?> 
     <?= $students[$i]['lastName']; ?> </p> 
    <p>La media dei voti è:
    <?= round(array_sum($students[$i]['votes'])/count($students[$i]['votes'])); ?></p>

 
     
<?php } ?>
</body>
</html>