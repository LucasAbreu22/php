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
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome('Pedro');
        $p2->setNome('Maria');
        $p3->setNome('Claudio');
        $p4->setNome('Rafa');

        $p1->setSexo('M');
        $p2->setSexo('F');
        $p3->setSalario(2500);
        $p4->setSetor('Estoque');

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
    ?>
</body>
</html>