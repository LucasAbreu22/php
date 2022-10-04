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
        require_once 'Livro.php';

        $pessoa = new Pessoa('Lucas', 22, 'M');
        $livro =  new Livro('Nárnia', 'J.J.R', 67, $pessoa);

        $livro->abrir();
        $livro->avancarPag();
        $livro->avancarPag();
        $livro->voltarPag();
        $livro->detalhes();

    ?>
</body>
</html>