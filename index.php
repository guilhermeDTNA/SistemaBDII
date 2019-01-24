<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <title>Página Inicial</title>
        <style>
            * {
    margin: 0;
    padding:0;
}

/* para garantir que estes elementos ocuparão toda a tela */
body, html {
    width: 100%;
    height: 100%;
    font-family: Arial, Tahoma, sans-serif;
}

body {
    background: url(escola.jpg) center center no-repeat fixed;
    
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

#site {
    width: 560px;
    padding: 20px;
    margin: 40px auto;
    background: #FFF; /* fundo branco para navegadores que não suportam rgba */
    background: rgba(255,255,255,0.8); /* fundo branco com um pouco de transparência */
}

p {
    margin-bottom: 1.5em;
}</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script>
</script>
        </style>
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
        
    <br><br><br>
    <br><br><br>
    <br><br><br>
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
