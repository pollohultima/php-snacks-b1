<?php

/* Snack 1:
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$games=[
   [
        'home' => 'Olimpia Milano',
    'visitors' => 'Cantù',
    'home_points' => '55',
    'visitors_points' => '60'
    ],

    [
        'home' => 'Olimpia Milano',
    'visitors' => 'Cantù',
    'home_points' => '98',
    'visitors_points' => '40'
    ],

    [
        'home' => 'Olimpia Milano',
    'visitors' => 'Cantù',
    'home_points' => '51',
    'visitors_points' => '29'
    ],
    
];

echo'<pre>';
var_dump($games);
echo '</pre>';

for ($i=0; $i < count($games); $i++) {  
     $games[$i]['home'];
     
}


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
for ($i=0; $i < count($games); $i++) {  ?>
   <p> <?= $games[$i]['home']; ?> -  
    <?= $games[$i]['visitors']; ?> | 
    <?= $games[$i]['home_points']; ?> - 
    <?= $games[$i]['visitors_points']; ?>
</p>  
     
<?php } ?>
 
    
</body>
</html>