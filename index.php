<?php

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
    'home_points' => '55',
    'visitors_points' => '60'
    ],

    [
        'home' => 'Olimpia Milano',
    'visitors' => 'Cantù',
    'home_points' => '55',
    'visitors_points' => '60'
    ],
    
];

echo'<pre>';
var_dump($games);
echo '</pre>';

for ($i=0; $i < cont($games); $i++) {  
     $games[$i]['home'];
     
}
 var_dump($games[$i]['home']);

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

 
    
</body>
</html>