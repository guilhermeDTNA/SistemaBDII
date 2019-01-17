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
        <div class="titulo_opcoes">
            <font color="black">Cadastra Despesas
        </div>
                    <form action="cadastraDespesa.php" method="POST">
                        <div>
                            ID do DIretor: <input type="number" placeholder="ID do Diretor" name="id_diretor">
                        </div><br>
                        
                        <div>
                            Nome da Despesa: <input type="text" placeholder="Nome da Despesa" name="nome_despesa">
                        </div><br>
                        
                        <div>
                            Valor da Despesa: <input type="text" placeholder="Valor da Despesa" name="valor_despesa">
                        </div><br>

                        <input type="submit" value="Registrar Despesa">
                        </div>
                    </form>
            <?php
            include_once './rodape.php';
            ?>
    </body>
</html>

