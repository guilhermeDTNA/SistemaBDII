<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Despesa - GereCurso</title>
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
                        <table bgcolor="darksalmon" align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5> 
                        <tr>
                            <td>
                            ID do DIretor: <input type="number" placeholder="ID do Diretor" name="id_diretor">
                        </td><br>
                        
                        <td>
                            Nome da Despesa: <input type="text" placeholder="Nome da Despesa" name="nome_despesa">
                        </td><br>
                        
                        <td>
                            Valor da Despesa: <input type="text" placeholder="Valor da Despesa" name="valor_despesa">
                        </td><br>

                        
                    
                    </tr>
                        </table><br><br>

                        <center><input type="submit" value="Registrar Despesa"></center>
                    </form>
            <?php
            include_once './rodape.php';
            ?>
    </body>
</html>

