<?php

/* Snack 2
Creiamo due pagine php. La prima farà una chiamata GET alla seconda attraverso un form. Il form avrà un input di testo in cui inserire il nome di un invitato. Inseriamo nell’altro file una lista di invitati. Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko. */

$guest = $_GET['guest'];

$guests= [
    'mario', 'giancarlo', 'pietro', 'gesù'
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    
<?php if (in_array($guest, $guests)) { ?>
  <p>OK</p>

<?php }else{ ?>

   <p>KO</p>
<?php }; ?>

    

</body>
</html>