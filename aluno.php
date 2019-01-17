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
        </div>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>