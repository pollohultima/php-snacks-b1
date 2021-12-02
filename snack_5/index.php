<?php

/* Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. */

$text='Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse ullam excepturi officiis beatae amet error ab nesciunt modi dolorem, sint odit obcaecati qui consequatur? Officia assumenda eius ex ratione modi aperiam accusamus adipisci reprehenderit, ipsa facere eum atque fugit temporibus dolor mollitia repellat consequuntur at saepe nihil. Sit, nulla nihil at aut eligendi molestiae nostrum error consectetur inventore rerum beatae aspernatur quae voluptates dignissimos, explicabo iusto consequuntur ipsum perspiciatis. Laboriosam voluptates totam ipsam nemo repudiandae, ut vero hic tempora ex fuga saepe eius minus repellendus sit assumenda alias rerum incidunt veniam iste iusto. Rerum laboriosam, animi corporis aut magni vitae?';

$paragraph=explode('.', $text);

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
   <?php for ($i=0; $i < count($paragraph); $i++) { ?>
    <p><?= $paragraph[$i] ?></p>
    <?php } ?>
 
</body>
</html>