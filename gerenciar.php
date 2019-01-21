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
            <br>
            <br>
            <form action="pesquisar.php?msg=aluno" method="POST"> 
                <p align="center"> Nome do aluno: <input type="text" name="nome" required="">
                    <input type="submit" value="Procurar" name="procurar"></p>
            </form>
        </div>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>