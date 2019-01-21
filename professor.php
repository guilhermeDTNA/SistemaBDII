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
                <li><a href="addProfessor.php">Cadastrar Professor</a></li>
                <li><a href="removeProfessor.php">Remover Professor</a></li>
                <li><a href="alteraProfessor.php">Alterar Professor</a></li>
            </ul>
            <!-- Alterações Início -->
            <br>
            <br>
            <form action="pesquisar.php?msg=professor" method="POST"> 
                <p align="center"> Nome do professor: <input type="text" name="nome" required="">
                    <input type="submit" value="Procurar" name="procurar"></p>
            </form>
            <!-- Alterações Fim -->
        </div>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>