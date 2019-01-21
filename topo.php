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

        <div class="topo"> 
            <div class="topointerior">
                
                    <a href="index.php"><img src="inicio.png" height="55px" width="70px"></a>
                
                <div class="menu">
                    <ul>
                        <li><a href="listar.php?msg=aluno" target="_blank">LISTAR ALUNOS</a></li>
                        <li><a href="listar.php?msg=professor" target="_blank">LISTAR PROFESSORES</a></li>
                        <li><a href="listar.php?msg=curso" target="_blank">LISTAR CURSOS</a></li>
                        <li><a href="listar.php?msg=despesa" target="_blank">LISTAR DESPESAS</a></li>
                        <li><a href="listar.php?msg=matricula" target="_blank">LISTAR MATRÍCULAS</a></li>
                        <li><a href="listar.php?msg=diretor" target="_blank">LISTAR DIRETORES</a></li>
                    </ul>
                </div>
            </div>
        </div>
</body>
</html>
