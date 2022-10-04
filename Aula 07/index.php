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
     require_once 'Lutador.php';
     require_once 'Luta.php';

     $l = array();
     $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);
     $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
     $l[2] = new Lutador("SnapShadow", 'EUA', 35, 1.65, 80.9, 12, 2, 1);
     $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.92, 81.6, 13, 0, 2);

     $UEC01 = new Luta();
     $UEC01->marcarLuta($l[2], $l[3]);
     $UEC01->lutar();

    ?>
</body>
</html>