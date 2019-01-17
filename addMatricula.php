<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GereMatricula</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

    <body>
        <?php
        include_once './topo.php';
        ?>
        <div class="titulo_opcoes">
            <font color="black">Cadastra Matriculas
        </div>
        <form action="cadastraMatricula.php" method="POST">
            <div>
                ID do Aluno: <input type="number" placeholder="ID do Aluno" name="id_aluno">
            </div><br>

            <div>
                ID do Curso: <input type="number" placeholder="ID do Curso" name="id_curso">
            </div><br>

            <input type="submit" value="Registrar Matricula">
        </form>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>


