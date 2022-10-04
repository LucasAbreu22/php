<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    require_once 'Video.php';
    require_once 'Gafanhoto.php';
    require_once 'Visualizacao.php';

    $v[0] = new Video("Aula 01 de POO");
    $v[1] = new Video("Aula 02 de POO");
    $v[2] = new Video("Aula 03 de POO");

    $g = new Gafanhoto("Lucas", 22, 'M', "salve");

    $v[0]->play();
    $v[0]->like();

    $vis[0] =  new Visualizacao($g, $v[1]);
    $vis[1] =  new Visualizacao($g, $v[2]);

    $vis[0]->avaliar();
    $vis[1]->avaliarPorc(85);

    print_r($vis[0]);
    print_r($vis[1]);
    
    ?>
    </pre>
</body>
</html>