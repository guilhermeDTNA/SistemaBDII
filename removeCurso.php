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
        <div class="titulo_opcoes">
            <font color="black">Remove cursos
        </div>
        <form action="excluiCurso.php" method="POST">
            
            <p align="center"> Identificação (ID) do curso: <input type="text" name="id_curso">
            
            <input type="submit" value="Remover Curso"></p>
        </form>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>

