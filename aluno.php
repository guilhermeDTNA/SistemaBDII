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
        ?>
        <div class="principal">
            <ul>
                <li><a href="addAluno.php">Cadastrar Aluno</a></li>
                <li><a href="removeAluno.php">Remover Aluno</a></li>
                <li><a href="alteraAluno.php">Alterar dados do aluno</a></li>
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