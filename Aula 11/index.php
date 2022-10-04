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
    require_once 'Bolsista.php';
    require_once 'Aluno.php';
    require_once 'Visitante.php';

    $a1 = new Aluno();
    $b1 = new Bolsista();
    $v1 = new Visitante();

    /*$v1->setNome('Joap');
    $v1->setIdade(22);
    $v1->setSexo('M');

    print_r($v1);*/

    /*$a1->setNome('rafa');
    $a1->setMatricula(2323);
    $a1->setIdade(15);
    $a1->setSexo('M');
    $a1->setCurso('Informática');
    $a1->pagarMensalidade();
    print_r($a1);*/

    $b1->setMatricula(1122);
    $b1->setNome('Jobson');
    $b1->setBolsa(12.5);
    $b1->setCurso(17);
    $b1->pagarMensalidade();

    print_r($b1);
    ?>
</body>
</html>