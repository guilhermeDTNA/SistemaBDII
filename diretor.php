<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GereDiretor</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <?php
        session_start();
        include_once './valida_login.php';
        ?>
        <?php
        include_once './topo.php';
        ?>
        <div class="principal">
            <ul>
                <li><a href="addDiretor.php">Cadastrar Diretor</a></li>
                <li><a href="removeDiretor.php">Remover Diretor</a></li>
                <li><a href="alteraDiretor.php">Alterar Diretor</a></li>
            </ul>
            <br>
            <br>
            <form action="pesquisar.php?msg=diretor" method="POST"> 
                <p align="center"> Nome do diretor: <input type="text" name="nome" required="">
                    <input type="submit" value="Procurar" name="procurar"></p>
            </form>
        </div>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>
