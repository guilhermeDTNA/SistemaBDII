<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <title>Página Inicial</title>
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
        
        <h1><marquee direction="right"><font color="blue">Bem-Vindo!</marquee></h1>
<!-- 
        <div class="conteudointerno">
            <div class="titulo_opcoes">
                <font color="black">Escolha uma das opções abaixo:
            </div>


            <form>
                <table align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5>

                    <tr>

                        <td>
                            <a href="gerenciar.php?tipo=aluno"><input type="button" class="MeuInput" value="Gerenciar Alunos"></a>
                        </td>

                        <td>
                            <a href="gerenciar.php?tipo=professor"><input type="button" class="MeuInput" value="Gerenciar Professores"></a>
                        </td>

                        <td>
                            <a href="gerenciar.php?tipo=curso"><input type="button" class="MeuInput" value="Gerenciar Cursos"></a>
                        </td>

                    </tr> 

                    <tr>
                        <td>
                            <a href="gerenciar.php?tipo=despesa"><input type="button" class="MeuInput" value="Gerenciar Despesas"></a>
                        </td>

                        <td>
                            <a href="gerenciar.php?tipo=matricula"><input type="button" class="MeuInput" value="Gerenciar Matrículas"></a>
                        </td>

                        <td>
                            <a href="gerenciar.php?tipo=diretor"><input type="button" class="MeuInput" value="Gerenciar Diretores"></a>
                        </td>
                    </tr>                   

                </table>

            </form>

        </div>

    </div> -->

    <?php
    include_once './rodape.php';
    ?>

</body>
</html>
