<?php

/* Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */

  $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

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
 
<div class="teachers" style="background-color: gray;">  
<h3>Teachers</h3>

<?php
for ($i=0; $i < count($db['teachers']); $i++) {  ?>
   <p>  
    <?= $db['teachers'][$i]['name']; ?> 
    <?= $db['teachers'][$i]['lastname']; ?>
</p>  
     
<?php } ?>
</div>

<div class="pm" style="background-color: green;">
<h3>Pm</h3>

<?php
for ($i=0; $i < count($db['pm']); $i++) {  ?>
   <p>  
    <?= $db['pm'][$i]['name']; ?> 
    <?= $db['pm'][$i]['lastname']; ?>
</p>  
     
<?php } ?>
</div>

</body>
</html>
