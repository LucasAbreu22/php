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
    
    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Peixe.php';
    require_once 'Ave.php';
    require_once "Cachorro.php";

    $m =  new Mamifero();
    $r = new Reptil();
    $p = new Peixe();
    $a = new Ave();
    $c = new Cachorro();

    $m->setPeso(85.6);
    $m->setIdade(2);
    $m->setCorPelo('marrom');
    $m->setMembros(4);
    $m->locomover();
    $m->alimentar();
    $m->emitirSom();

    $c->reagirFrase("Olá");
    $c->reagirFrase("Vai Apanhar");
    $c->reagirHora(11, 45);
    $c->reagirHora(21, 00);
    $c->reagirDono(true);
    $c->reagirDono(false);
    $c->reagirIdade(2, 12.5);
    $c->reagirIdade(17, 5.5);
    ?>
</body>
</html>