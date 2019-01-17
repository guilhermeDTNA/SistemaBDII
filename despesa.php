<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GereDespesa</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <?php
        include_once './topo.php';
        ?>
        <div class="principal">
            <ul>
                <li><a href="addDespesa.php">Cadastrar Despesa</a></li>
                <li><a href="removeDespesa.php">Remover Despesa</a></li>
                <li><a href="alteraDespesa.php">Alterar Despesa</a></li>
            </ul>
        </div>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>
