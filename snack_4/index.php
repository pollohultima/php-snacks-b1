<?php

/* Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

$rdmNum=[];


while ( count($rdmNum) < 15) { 

    $number = rand(1,99);
    
    if (!in_array($number, $rdmNum)) {
        array_push($rdmNum, $number);  
    };

};

var_dump($rdmNum)


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