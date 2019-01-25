<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gerenciar - GereCurso</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <?php
        session_start();
        include_once './valida_login.php';
        ?>
        <?php
        include_once './topo.php';
        $tipo2 = $_GET['tipo'];
        $tipo = ucfirst($_GET['tipo']);
        ?>
        <div class="principal">
            <ul>
                <li><a href="add<?php echo $tipo ?>.php">Cadastrar <?php echo $tipo ?></a></li>
                <li><a href="remove<?php echo $tipo ?>.php">Remover <?php echo $tipo ?></a></li>
                <li><a href="alterarDados.php?tipo=<?php echo $tipo2 ?>">Alterar Dados do(a) <?php echo $tipo ?></a></li>
            </ul>
            <br>
            <br>
            <form action="pesquisar.php?msg=<?php echo $tipo2 ?>" method="POST">
                <?php
                if ($tipo2 == 'matricula') {
                    echo '<p align="center"> ID da ' . $tipo . ': <input type="text" name="nome" required="">';
                } else {
                    echo '<p align="center"> Nome do(a) ' . $tipo . ': <input type="text" name="nome" required="">';
                }
                ?>

                <input type="submit" value="Procurar" name="procurar"></p>
            </form>

            <br>

<?php
if ($tipo == 'Curso') {
    echo '  <form action="listar.php?msg=Curso-Aluno" method="POST"> 
                <p align="center"> ID do Curso: <input type="number" name="id_curso" required="">
                    <input type="submit" value="Listar alunos matriculados" name="listar"></p>
            </form>  ';
}
if ($tipo == 'Matricula') {
    echo '  <ul>
                <li><a href="listar.php?msg=Professor-Aluno">Listar relações entre professores e alunos</a></li>
            </ul> ';
}
if ($tipo == 'Despesa') {
    echo '<br><br><iframe width="100%" height="160px" frameborder="0" src="listar.php?msg=Lucro"></iframe>';
}
?>
        </div>
            <?php
            include_once './rodape.php';
            ?>
    </body>
</html>