<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GereCurso</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <?php
        include_once './topo.php';
       $tipo = ucfirst($_GET['tipo']);
        ?>
        <div class="principal">
            <ul>
                <li><a href="add<?php echo $tipo?>.php">Cadastrar <?php echo $tipo?></a></li>
                <li><a href="remove<?php echo $tipo?>.php">Remover <?php echo $tipo?></a></li>
                <li><a href="altera<?php echo $tipo?>.php">Alterar Dados do <?php echo $tipo?></a></li>
            </ul>
        </div>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>