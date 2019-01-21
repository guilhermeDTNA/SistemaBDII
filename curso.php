<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GereCurso</title>
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
                <li><a href="addCurso.php">Cadastrar Curso</a></li>
                <li><a href="removeCurso.php">Remover Curso</a></li>
                <li><a href="alteraCurso.php">Alterar Curso</a></li>
            </ul>
            <br>
            <br>
            <form action="pesquisar.php?msg=curso" method="POST"> 
                <p align="center"> Nome do curso: <input type="text" name="nome" required="">
                    <input type="submit" value="Procurar" name="procurar"></p>
            </form>
        </div>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>