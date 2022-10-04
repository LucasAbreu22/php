<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - POO</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';

       # $c1 = new Caneta;

       # $c1->setModelo("BIC");
       # $c1->setPonta(0.5);

       $c1 = new Caneta("Bic", "Azul", 0.5);
       $c2 = new Caneta("Bic", "Preta", 0.3);


       # print "eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";

        print_r($c1);
        echo '<br>';
        print_r($c2);
    ?>
</body>
</html>