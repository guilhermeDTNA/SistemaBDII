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
        $tipo2 = $_GET['tipo'];
        $tipo = ucfirst($_GET['tipo']);
        ?>
        <div class="principal">
            <ul>
                <li><a href="add<?php echo $tipo ?>.php">Cadastrar <?php echo $tipo ?></a></li>
                <li><a href="remove<?php echo $tipo ?>.php">Remover <?php echo $tipo ?></a></li>
                <li><a href="altera<?php echo $tipo ?>.php">Alterar Dados do <?php echo $tipo ?></a></li>
            </ul>
            <br>
            <br>
            <form action="pesquisar.php?msg=<?php echo $tipo2 ?>" method="POST"> 
                <p align="center"> Nome do <?php echo $tipo ?>: <input type="text" name="nome" required="">
                    <input type="submit" value="Procurar" name="procurar"></p>
            </form>
            
            <br>

            <?php
            if ($tipo == 'Matricula') {
                echo '  <form action="listar.php?msg=Curso-Aluno" method="POST"> 
                <p align="center"> ID do Curso: <input type="number" name="id_curso" required="">
                    <input type="submit" value="Listar alunos matriculados" name="listar"></p>
            </form>  ';
            }
            ?>
        </div>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>