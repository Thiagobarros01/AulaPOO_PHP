<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><pre>
    <?php
    require_once 'video.php';
    require_once 'usuario.php';
    require_once 'pessoa.php';
    $v[0] = new video("Atividade de POO");
    $v[1] = new video("Atividades em HTML 5");
    $v[2] = new video("Atividade de JAVA");
    
    $p[0] = new usuario("Itachi",22,"M",5501);
    $p[1] = new usuario("Naruto",22,"M",40028922);

    $v[0]->play();
    $v[0]->play();
    $v[0]->pause();
    
    print_r($p);
    print_r($v);


    ?>
</pre></body>
</html>